$('.sl').slick({
autoplay: true,
autoplaySpeed:10000,
cssEase:'ease-in',
asNavFor: '.sl2',
});
$('.sl2').slick({
  slidesToShow: 7,
  centerMode: true,

  dots: true,
  asNavFor: '.sl',
  focusOnSelect: true,
  	arrows: false,
 responsive: [
{
	breakpoint:900,
	settings: {
		 slidesToShow: 3,
		 
				}
}
]
});
	