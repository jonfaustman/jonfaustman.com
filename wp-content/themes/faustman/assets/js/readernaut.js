function parseResponse(data) {
var bookshelf = document.getElementById("readernaut");

for (var i=0; i<2; i++) {
var cover = data.reader_books[i].book_edition.covers.cover_small;
var title = data.reader_books[i].book_edition.title;
var permalink = data.reader_books[i].permalink;

var link = document.createElement("a");
link.setAttribute("href",permalink);

var img = document.createElement("img");
img.setAttribute("src",cover);
img.setAttribute("alt",title);

link.appendChild(img);
bookshelf.appendChild(link);
}
}