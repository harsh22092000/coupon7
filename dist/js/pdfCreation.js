alert("hello");
function HTMLtoPDF(){
    var doc= new jsPDF();

    doc.text("Hello",10,10);
    doc.save('htmltopdf.pdf');

}