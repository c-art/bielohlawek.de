# Generate pages from individual records in yml files
# (c) 2014 Adolfo Villafiorita
# Distributed under the conditions of the MIT License

module Jekyll

  class GalleryGenerator < Generator
    DEFAULT_TEMPLATE_GALLERY = 'gallery'
    DEFAULT_TEMPLATE_PICTURE = 'picture'

    safe true

    def generate(site)
      if data = site.config['gallery_generator']
        data = [data] if data.is_a?(Hash)
        data.each do |config|
          gallery_directory  = config.fetch('gallery_directory')
          raise "directory #{gallery_directory} not found" if !File.directory?(gallery_directory)

          output_directory = config.fetch('output_directory', config.fetch('gallery_directory'))
          # raise "directory #{output_directory} not found" if !File.directory?(output_directory)

          template_gallery = config.fetch('template_gallery', DEFAULT_TEMPLATE_GALLERY)
          raise "gallery template #{template_gallery} not found" if !site.layouts.key?(template_gallery)

          template_picture = config.fetch('template_picture', DEFAULT_TEMPLATE_PICTURE)
          raise "picture template #{template_picture} not found" if !site.layouts.key?(template_picture)

          gallery = Gallery.new(gallery_directory)
          generate_gallery(gallery, site, template_gallery, template_picture, output_directory)
        end
      end
    end

    private

    def generate_gallery(gallery, site, template_gallery, template_picture, output_directory)
      gallery.sub_galleries.each do |sub_gallery|
        generate_gallery(sub_gallery, site, template_gallery, template_picture, output_directory)
      end
      gallery.pictures.each do |picture|
        site.pages << picture.generate_page(site, template_picture, output_directory)
      end
      site.pages << gallery.generate_page(site, template_gallery, output_directory)
    end

    class GalleryPage < Page
      def initialize(gallery, site, template, output_directory, name = 'index.html')
        @gallery = gallery
        @site = site
        @dir  = File.join(*[output_directory, gallery.path].compact)
        @name = name

        self.process(@name)
        self.read_yaml('_layouts', site.layouts[template].name)

        self.data['gallery'] = gallery
      end
    end

    class PicturePage < Page
      def initialize(picture, site, template, output_directory)
        @picture = picture
        @site = site
        @dir  = File.join(output_directory, picture.gallery.path)
        @name = sanitize_filename(picture.name) + ".html"

        self.process(@name)
        self.read_yaml('_layouts', site.layouts[template].name)

        self.data['gallery'] = picture.gallery
        self.data['picture'] = picture
      end

      def sanitize_filename(name)
        name.gsub!(/[^\w\s_-]+/, '')
        name.gsub!(/(^|\b\s)\s+($|\s?\b)/, '\\1\\2')
        name.gsub!(/\s+/, '_')
        name
      end
    end

    class Gallery
      attr_reader :path

      def initialize(base, path = nil , gallery = nil)
        @path     = path
        @gallery  = gallery
        @entries  = []

        Dir.foreach(full_path(base, @path)) do |entry|
          next if entry[0] == '.'

          entry_path = full_path(@path, entry)
          @entries << if File.directory?(full_path(base, entry_path))
            Gallery.new(base, entry_path, self)
          else
            Picture.new(entry, self)
          end
        end
      end

      def generate_page(site, template_gallery, output_directory)
        @page = GalleryPage.new(self, site, template_gallery, output_directory)
      end

      def sub_galleries
        @sub_galleries ||= @entries.select { |entry| entry.is_a?(Gallery) }
      end

      def pictures
        @pictures ||= @entries.select { |entry| entry.is_a?(Picture) }
      end

      def previous(picture)
        pictures[pictures.index(picture) - 1 ]
      end

      def next(picture)
        pictures[pictures.index(picture) + 1 ]
      end

      def root?
        @gallery.nil?
      end

      def name
        @path.to_s
      end

      def to_liquid
        {
          'pictures' => pictures,
          'name'     => name,
          'url'      => @page.url,
        }
      end

      private
      def full_path(*args)
        File.join(*(args.compact))
      end
    end

    class Picture
      attr_reader :filename, :gallery

      def initialize(filename, gallery)
        @filename = filename
        @gallery  = gallery
      end

      def generate_page(site, template_picture, output_directory)
        @page = PicturePage.new(self, site, template_picture, output_directory)
      end

      def name
        File.basename(@filename, ext)
      end

      def path
        @page.url.gsub('.html', ext)
      end

      def to_liquid
        {
          'gallery'  => gallery,
          'name'     => name,
          'url'      => @page.url,
          'path'     => path,
          'filename' => @filename,
          'previous' => gallery.previous(self),
          'next'     => gallery.next(self),
        }
      end

      private
      def ext
        File.extname(@filename)
      end
    end
  end
end

# Liquid::Template.register_filter(Jekyll::DataPageLinkGenerator)
