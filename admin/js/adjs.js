let id = $("input[name*='ID']")
id.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    ;
    let topic = $("input[name*='topic']");
    let body = $("input[name*='body']");
    let author = $("input[name*='author']");

    id.val(textvalues[0]);
    topic.val(textvalues[1]);
    body.val(textvalues[2]);
    author.val(textvalues[3].replace("$", ""));
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}