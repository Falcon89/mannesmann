(function() {
	var reviewsAdd = function () {
		var doc = document,
			userName = doc.getElementsByClassName('user')[0],
			areaForm = doc.getElementsByTagName('textarea')[0],
			wrapperParagraf = doc.getElementById('wrapper'),
			newParagraf,
			sendButton = doc.getElementById('sendbutton');

			sendButton.addEventListener('click', function(e) {
				e.preventDefault();
				newParagraf = doc.createElement('p');
				newParagraf.className = 'reviews-text';
				newParagraf.innerHTML = '<strong>' + userName.value + ':</strong> ' + areaForm.value;
				if (userName.value === '') {
					userName.classList.add('error');
				}
				if (areaForm.value === '') {
					areaForm.classList.add('error');
					return false;
				}
				if (userName || areaForm) {
					wrapperParagraf.appendChild(newParagraf);
					userName.classList.remove('error');
					areaForm.classList.remove('error');
				}
			});
		};
		reviewsAdd();
})();