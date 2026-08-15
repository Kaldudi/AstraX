document.addEventListener('DOMContentLoaded', () => {
    // Splash Screen Logic
    const splashScreen = document.getElementById('splash-screen');
    if (splashScreen) {
        // Generate stars
        for (let i = 0; i < 70; i++) {
            const star = document.createElement('div');
            star.classList.add('star');
            star.style.left = Math.random() * 100 + 'vw';
            star.style.top = Math.random() * 100 + 'vh';
            const size = Math.random() * 3 + 1;
            star.style.width = size + 'px';
            star.style.height = size + 'px';
            star.style.animationDuration = (Math.random() * 2 + 1) + 's';
            star.style.animationDelay = (Math.random() * 2) + 's';
            splashScreen.appendChild(star);
        }

        setTimeout(() => {
            splashScreen.classList.add('pop-off');
            setTimeout(() => {
                splashScreen.classList.add('hidden');
            }, 500);
        }, 3000);
    }

    // Tab Switching Logic
    const tabs = document.querySelectorAll('.tab');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active class and indicator from all tabs
            tabs.forEach(t => {
                t.classList.remove('active');
                const indicator = t.querySelector('.tab-indicator');
                if (indicator) {
                    indicator.remove();
                }
            });

            // Add active class and indicator to clicked tab
            tab.classList.add('active');
            
            const indicator = document.createElement('div');
            indicator.classList.add('tab-indicator');
            tab.appendChild(indicator);
        });
    });

    // Compose textarea auto-resize and button enable/disable
    const composeTextarea = document.querySelector('.compose-content textarea');
    const postSubmitBtn = document.querySelector('.post-submit-btn');

    if(composeTextarea && postSubmitBtn) {
        composeTextarea.addEventListener('input', function() {
            // Auto resize
            this.style.height = '50px';
            this.style.height = (this.scrollHeight) + 'px';

            // Enable/disable button based on content
            if(this.value.trim().length > 0) {
                postSubmitBtn.removeAttribute('disabled');
            } else {
                postSubmitBtn.setAttribute('disabled', 'true');
            }
        });
    }

    // Like button animation toggle
    const likeButtons = document.querySelectorAll('.action-item.like');
    likeButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation(); // prevent triggering tweet click
            const icon = this.querySelector('svg');
            const span = this.querySelector('span');
            
            if (this.style.color === 'rgb(249, 24, 128)') {
                // Unlike
                this.style.color = '';
                icon.style.fill = 'currentColor';
                let count = span.textContent;
                if(!count.includes('K')) {
                    let num = parseInt(count);
                    if(!isNaN(num)) span.textContent = num - 1;
                }
            } else {
                // Like
                this.style.color = '#f91880';
                icon.style.fill = '#f91880';
                let count = span.textContent;
                if(!count.includes('K')) {
                    let num = parseInt(count);
                    if(!isNaN(num)) span.textContent = num + 1;
                }
            }
        });
    });
    
    // Repost toggle
    const repostButtons = document.querySelectorAll('.action-item.repost');
    repostButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const icon = this.querySelector('svg');
            
            if (this.style.color === 'rgb(0, 186, 124)') {
                this.style.color = '';
                icon.style.fill = 'currentColor';
            } else {
                this.style.color = '#00ba7c';
                icon.style.fill = '#00ba7c';
            }
        });
    });
});
