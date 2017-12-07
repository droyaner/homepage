TEX = pdflatex -shell-escape -interaction=nonstopmode -file-line-error
BIB = bibtex

.PHONY: all pdf clean cleanup
.SILENT: pdf

all : pdf cleanup

pdf :
	for file in $$(ls *tex | cut -d \. -f 1) ; do make $$file.pdf ; done
%.pdf: %.tex 
	rubber -m pdftex $<
cleanup: 
	rm -f *.toc *.aux *.log *.out
clean: 
	rm -f *.toc *.pdf *.aux *.log *.out
	rm -f ./image/*.pdf
