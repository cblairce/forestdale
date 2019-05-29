jQuery(document).foundation();

jQuery('.top-bar').on('sticky.zf.stuckto:top', function(){
    jQuery(this).addClass('shrink');
}).on('sticky.zf.unstuckfrom:top', function(){
    jQuery(this).removeClass('shrink');
})