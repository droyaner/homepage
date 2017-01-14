COMPILER=idoc2pdf


all: Flyer.pdf

Flyer.pdf: Ferienwohnung1.pdf Ferienwohnung2.pdf
	pdftk Ferienwohnung1.pdf Ferienwohnung2.pdf output Flyer.pdf
	rm Ferienwohnung[1-2].pdf
Ferienwohnung1.pdf: Ferienwohnung1.doc
	doc2pdf Ferienwohnung1.doc 
Ferienwohnung2.pdf: Ferienwohnung2.doc
	doc2pdf Ferienwohnung2.doc
packages:
	sudo apt-get install pdftk unoconv
clean:
	rm Flyer.pdf
.PHONY: packages clean
