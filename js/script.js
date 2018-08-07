
//$(".post.post--vk").on("click", function() {
//	$("#modal-vk").modal("show");
//});

// $(".post.post--vk-no-media").on("click", function() {
// 	$("#modal-vk-no-media").modal("show");
// });

// $(".post.post--vk-media").on("click", function() {
// 	$("#modal-vk").modal("show");
// });

// $(".post.post--fb-media").on("click", function() {
// 	$("#modal-fb").modal("show");
// });

// $(".post.post--fb-no-media").on("click", function() {
// 	$("#modal-fb-no-media").modal("show");
// });

// $(".post.post--tw").on("click", function() {
// 	$("#modal-tw").modal("show");
// });

// $(".post.post--tw-media").on("click", function() {
// 	$("#modal-tw").modal("show");
// });

// $(".post.post--tw-no-media").on("click", function() {
// 	$("#modal-tw-no-media").modal("show");
// });

// $(".post.post--yt").on("click", function() {
// 	$("#modal-yt").modal("show");
// });

// $(".post.post--ig").on("click", function() {
// 	$("#modal-ig").modal("show");
// });

// $(".post.post--gp").on("click", function() {
// 	$("#modal-gp").modal("show");
// });


$('.post a[href]').click(function(evt) {
	evt.stopPropagation();
});


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


// Короткий текст для постов
function postShortText (post) {
	var postFullText = post.innerHTML;
	var postCutText = postFullText.substr(0, 150);
	post.innerHTML = postCutText;
	post.insertAdjacentHTML('beforeEnd', '&nbsp;...');

	var postFullElement = document.createElement('div');
	postFullElement.style.display = 'none';
	postFullElement.innerHTML = postFullText;
	post.insertAdjacentElement('afterEnd', postFullElement);

	var postButtonMore = document.createElement('button');
	postButtonMore.className = 'post__more-link';
	postButtonMore.innerHTML = 'Читать далее';
	postButtonMore.setAttribute('type', 'button');
	post.insertAdjacentElement('beforeEnd', postButtonMore);

	postButtonMore.addEventListener('click', function (evt) {
		evt.preventDefault();

		post.innerHTML = postFullText;
		postFullElement.remove();
		postButtonMore.remove();
	})
}

var posts = document.body.querySelectorAll('.posts__item .post__text');
for (var i = 0; i < posts.length; i++) {

	if (posts[i].innerHTML.length > 150) {
		postShortText(posts[i]);
	}
}


// Работа текстового меню
var languageList = document.getElementById('index-page__language-list');
var languageButton = document.getElementById('index-page__language-button');
if (languageList && languageButton) {
	languageList.classList.add('language-list--js');

	languageButton.addEventListener('click', function (evt) {
		evt.preventDefault();

		languageList.classList.toggle('language-list--js');
	})
}


//var post = document.querySelector('#test_text');

//postShortText(post);



// var post = document.querySelector('#test_text');
// post.classList.add('class__test');


// var postFullText = post.innerHTML;

// var postCutText = postFullText.substr(0, 100);

// post.innerHTML = postCutText;
// post.insertAdjacentHTML('beforeEnd', '&nbsp;...');




//
// var seeMore = document.createElement('button');
// seeMore.className = 'post__more-link';
// seeMore.innerHTML = 'Полный текст';
// seeMore.setAttribute('type', 'button');

// post.insertAdjacentElement('beforeEnd', seeMore);
//

// var postFullElement = document.createElement('div');
// postFullElement.style.display = 'none';
// postFullElement.className = 'post__more-full';
// postFullElement.innerHTML = postFullText;

// seeMore.insertAdjacentElement('afterEnd', postFullElement);

//console.log(postCutText);


// var postFullButtons = document.querySelector('.post__more-link');

// postFullButtons.addEventListener("click", function (evt) {
// 	evt.preventDefault();

// 	var postFullText = postFullButtons.nextSibling;

// 	post.innerHTML = postFullText.innerHTML;

// 	postFullText.remove();
// 	seeMore.remove();

// 	console.log(postFullText);
// })





$('.post .post__more-link').click(function(evt) {
	evt.stopPropagation();
});
