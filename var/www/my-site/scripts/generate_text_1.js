var text = " Какой-то текст";
var full_text = "";
for (var i = 0; i <= 200; i++) {
	full_text = full_text + text;
}
document.getElementById("p").innerHTML = full_text;
console.log(full_text);
