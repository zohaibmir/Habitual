// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(document).ready(function() {
    height = $(".portfolio-ul").height();        
    if(height < 100)
        height = 420;
    $(".home-sub-orbit").css("height",height);
    height2 = $(".look-book-ul").height(); 
    if(height2 < 100)
        height2 = 420;
    $(".lookbook-orbit").css("height",height2);
    
    $('a[href*=#]').click(function() {
        
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            && location.hostname == this.hostname) {
            var $target = $(this.hash);            
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');            
            if ($target.length) {
                var targetOffset = $target.offset().top;                                 
                $('html,body')
                .animate({
                    scrollTop: targetOffset
                }, 1000);
                return false;
            }
        }
    });   
    
    //Spring 2014 Click
    
    $('#Spring-2004').click(function() {
        $(".look-btn").removeClass("activebtn");
        $(this).addClass("activebtn");
        $(".spring2014").show();
        $(".fall2013").hide();
        $(".summer2013").hide();
    });
    
    //Fall 2013 Click 
    $('#Fall-2013').click(function() {
        $(".look-btn").removeClass("activebtn");
        $(this).addClass("activebtn");
        $(".fall2013").show();
        $(".spring2014").hide();
        $(".summer2013").hide();
    });
    
    //Summer 2013 Click 
    $('#Summer-2013').click(function() {
        $(".look-btn").removeClass("activebtn");
        $(this).addClass("activebtn");
        $(".summer2013").show();
        $(".spring2014").hide();
        $(".fall2013").hide();
    });
    
    
    
    $(".credits").hover(function () {   
        $(".credit-img").show();
        $(".credit-text").hide();
    }, 

 

    // ON MOUSE OUT

    function () {
        $(".credit-img").hide();
        $(".credit-text").show();
    }
    );
    
    $(".fb-click").hover(function () {   
        $(".fb-bottom-hover").show();
    }, 

 

    // ON MOUSE OUT

    function () {
        $(".fb-bottom-hover").hide();
    }
    );
            
            
    //
    
    $(".fb1-click").hover(function () {   
        $(".fb-blog-hover").show();
    }, 

 

    // ON MOUSE OUT

    function () {
        $(".fb-blog-hover").hide();
    }
    );
    
    //    
    //        
    $(".tw-click").hover(function () {   
        $(".tw-bottom-hover").show();
    }, 

 

    // ON MOUSE OUT

    function () {
        $(".tw-bottom-hover").hide();
    }
    );
        
        
    //
    $(".news-letter").hover(function () {   
        $(".news-letter-content").show();
    }, 

 

    // ON MOUSE OUT

    function () {
        $(".news-letter-content").hide();
    }
    );    
    
    // Hover Function for Multiple Line Text    
    // Hover Function for Multiple Line Text



    $(function() {

        // OPACITY OF BUTTON SET TO 0%

        $(".roll").css("opacity","0");

 

        // ON MOUSE OVER
        //ROll Efect
    
        $(".roll").hover(function () {        

            // SET OPACITY TO 80%
            
            $(this).css("height",$(this).next().height());            
            $(this).css("width",$(this).next().width());  
            $(this).stop().animate({

                opacity: 0.6

            }, 200);

        

            $(this).children().stop().animate({

                top:"45%"

            }, 300);

        

        }, 

 

        // ON MOUSE OUT

        function () {

 

            // SET OPACITY BACK TO 50%

            $(this).stop().animate({

                opacity: 0

            },300);        

            $(this).children().stop().animate({

                top: "75%"

            }, 200)

        });

    });

    // Open Image Pop Up MOdel
    
    $('a.reveal-link').click(function() {
        src =  $(this).attr("val");
        $("#popup-img").attr("src", src);
       
    });
        
    //
        
        
    $('.stocklist-category').click(function() {
        listing = this.id;
        $(".listings").hide();
        $("."+listing).show();
    });
        
    $('.departments-category').click(function() {
        listing = this.id;
        $(".listings").hide();
        $("."+listing).show();
    });
    $('.retailers-category').click(function() {
        listing = this.id;
        $(".listings").hide();
        $("."+listing).show();
    });
    $('.international-category').click(function() {
        listing = this.id;
        $(".listings").hide();
        $("."+listing).show();
    });
       
    $('.sub-cat').click(function() {
        listing = this.id;        
        $(".listings").hide();
        $("."+listing).show();
    });
       
});