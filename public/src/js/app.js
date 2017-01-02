var postId = 0;
var postBodyElement = null; 

$('.post').find('.interaction').find('.edit').on('click', function(event){
	event.preventDefault();
	
	postBodyElement = event.target.parentNode.parentNode.childNodes[1];
	var postBody = postBodyElement.textContent();
	postId = event.target.parentNode.parentNode.dataset['postId'];
	$('#post-body').val(postBody);	
	$('#edit-modal').modal();
});

$('modal-save').on('click', function(){
	$.ajax({
		methods: 'POST',
		url: url,
		data: {body: $('#post-body').val(), postId: postId, _token: token}
	});
	.done(function (msg) {
		$(postBodyElement).text(msg['new_body']);
		$('#edit-modal').mode('hide');
	});

	$('.like').on('click', function(event){
	event.preventDefault();
	postId = event.target.parentNode.parentNode.dataset['postId'];
	var isLike = event.target.previousElementSibling == null;
	console.log(isLike);
	$.ajax({
		methods: 'POST',
		url: urlLike,
		data: {isLike, postId: postId, _token: token}
	})
		.done(function(){
			event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You don\'t like this post' : 'Dislike';
			if (isLike) {
				event.target.nextElementSibling.innerText = 'Dislike';				
			} else {
				event.target.previousElementSibling.innerText = 'Like';	
}
		});
});