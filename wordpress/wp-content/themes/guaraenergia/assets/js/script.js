(function() {
    function sq(query) {
        return document.querySelector(query);
    }
    
    function headerEvents() {
        sq('.jsDropdown').onmouseenter = function() {
            this.classList.add('active');
        }
        
        sq('.jsDropdown').onmouseleave = function() {
            this.classList.remove('active');
        }
        
        sq('.jsHeaderMenuBtn').onclick = function() {
            controlHideShowMenuHeader();
        }
        
        function controlHideShowMenuHeader() {
            sq('body').classList.toggle('gra-menu-active');
        }
    }
    
    headerEvents();
    
    sq(".jsCurrentYear").textContent = new Date().getFullYear();


    if (sq('.jsVideoPlayer')) {
        const videoPlay = sq('.jsVideoPlayer');
        const videoId = videoPlay.getAttribute('data-video-id');
        let played = false;

        if (window.innerWidth > 992) {
            if (videoId) {
                videoPlay.innerHTML = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/${videoId}?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="border-radius:37px"></iframe>`;
            }
        } else {
            videoPlay.onclick = function() {
                if (!played) {
                    played = true;
                    videoPlay.innerHTML = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/${videoId}?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="border-radius:37px"></iframe>`;
                }
            };
        }
        
    }


    const scrollToLink = document.querySelectorAll('[data-scroll-btn]')

    if (scrollToLink) {

        function scrollToSmoothly(pos, time) {
            var currentPos = window.pageYOffset;
            var start = null;
            if(time == null) time = 500;
            pos = +pos, time = +time;
            window.requestAnimationFrame(function step(currentTime) {
                start = !start ? currentTime : start;
                var progress = currentTime - start;
                if (currentPos < pos) {
                    window.scrollTo(0, ((pos - currentPos) * progress / time) + currentPos);
                } else {
                    window.scrollTo(0, currentPos - ((currentPos - pos) * progress / time));
                }
                if (progress < time) {
                    window.requestAnimationFrame(step);
                } else {
                    window.scrollTo(0, pos);
                }
            });
        }

        scrollToLink.forEach(function(item, i) {
            item.onclick = function() {
                const destination = this.getAttribute('data-scroll-btn');
                scrollToSmoothly(document.querySelector(destination).offsetTop, 300);
            }
        });
    }

    if (sq('.jsShowMoreHomeFaq')) {
        var onceShowHidden = false;

        sq('.jsShowMoreHomeFaq').onclick = function() {
            this.classList.toggle('gra-active');

            document.querySelectorAll('.jsHomeFaq').forEach(function(item) {
                if (item.offsetTop === 0) {
                    if (!onceShowHidden) {
                        item.classList.add('gra-faq-hidden');
                    }

                    item.style.display = '';
                } else {
                    if (item.classList.contains('gra-faq-hidden')) {
                        item.style.display = 'none';
                    }
                }
            });

            onceShowHidden = true;
        }
    }
})();