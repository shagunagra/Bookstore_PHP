var button = document.querySelectorAll('#sub');
for(var i=0;i<button.length;i++)
{
    button[i].addEventListener('click', function(){
        alert('You subscribed the book successfully!.....');
    });
}