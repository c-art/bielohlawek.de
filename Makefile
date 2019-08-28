build:
	docker run -it --rm -v "$$PWD":/srv/jekyll -p "4000:4000" jekyll/jekyll jekyll build
