$(".btndeit").click(e => {
    let textValues = displayData(e);

    // get inpuet boxes
    let id = $("input[name='ID']");
    let Name = $("input[name='BookName']");
    let Publisher = $("input[name='BookPublisher']");
    let Price = $("input[name='BookPrice']");

    // set values in input boxes
    id.val(textValues[0]);
    Name.val(textValues[1]);
    Publisher.val(textValues[2]);
    Price.val(textValues[3].replace("$", ""));

});

function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textValues = [];

    for (const value of td) {
        if (value.dataset.id == e.target.dataset.id) {
            textValues[id++] = value.textContent;
        }
    }
    return textValues;
}