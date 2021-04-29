// alert("hello");
function HTMLtoPDF(){
    var doc= new jsPDF();
    var htmlele=$(".htmltopdf").html()
    doc.fromHTML(htmlele);
    // doc.text("Hello",10,10);
    doc.save('Report.pdf');

}