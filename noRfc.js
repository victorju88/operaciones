function generar(){
    const doc = new jsPDF({
    orientation: "landscape",
    unit: "in",
    format: [4, 2]
    });

    doc.text("Hello world!", 1, 1);
    doc.save("noRFC.pdf");
}