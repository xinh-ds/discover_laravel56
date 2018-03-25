
function toggle(className, displayState) {
  elements = document.getElementsByClassName(className);
    for (let i = 0 ; i < elements.length; i++) {
      elements[i].style.display = displayState;
    }
}

let tagNews = document.getElementsByClassName('btn-show');
for (let i = 0; i < tagNews.length; i++) {
  tagNews[i].addEventListener('click', function () {
    toggle('tag-news-table', 'none');
    document.getElementById(this.getAttribute('alt')).style.display = 'block';
  });
}
