function OpenWindow(id,id_back){
    let window = document.querySelector(id);
    let window_background = document.querySelector(id_back);
    window.classList.remove('hide');
    window_background.classList.remove('hide');
}
function CloseWindow(id,id_back){
    let window = document.querySelector(id);
    let window_background = document.querySelector(id_back);
    window.classList.add('hide');
    window_background.classList.add('hide');
}
function OpenPage (PageId,PageIdHide,PageIdHide2){
    let Page = document.querySelector(PageId);
    let PageHide = document.querySelector(PageIdHide);
    let PageHide2 = document.querySelector(PageIdHide2);
    Page.classList.remove('hide');
    PageHide.classList.add('hide');
    PageHide2.classList.add('hide');
}
