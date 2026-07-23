/**
 * ALS Roofing Theme
 * Main JavaScript
 */

'use strict';

const ALS = {

    init() {

        this.cacheDom();
        this.bindEvents();
        this.stickyHeader();
    },

    cacheDom() {

        this.header = document.querySelector('.header');
        this.mobileToggle = document.querySelector('.mobile-toggle');
        this.navigation = document.querySelector('.header__nav');
        
        this.galleryItems = document.querySelectorAll('.gallery__item img');
        this.currentImage = 0;
        
        this.lightbox = document.getElementById('gallery-lightbox');
        this.lightboxImage = document.getElementById('gallery-image');
        this.closeButton = document.getElementById('gallery-close');

        this.previousButton = document.getElementById('gallery-prev');
        this.nextButton = document.getElementById('gallery-next');

    },

    bindEvents() {

        window.addEventListener(
            'scroll',
            () => this.stickyHeader()
        );

        if (this.mobileToggle) {

            this.mobileToggle.addEventListener(
                'click',
                () => this.toggleMobileMenu()
            );

        }
        
        this.galleryItems.forEach((image, index) => {

            image.addEventListener(
                'click',
                () => this.openLightbox(index)
            );

        })

        if (this.closeButton) {

            this.closeButton.addEventListener(
                'click',
                () => this.closeLightbox()
            );

        }

        if (this.lightbox) {

            this.lightbox.addEventListener(
                'click',
                (event) => {

                    if (event.target === this.lightbox) {

                        this.closeLightbox();

                    }

                }
            );

        }

        document.addEventListener(
            'keydown',
            (event) => {

                if (!this.lightbox.classList.contains('active')) {

                    return;

                }

                switch (event.key) {

                    case 'Escape':

                        this.closeLightbox();

                        break;

                    case 'ArrowLeft':

                        this.previousImage();

                        break;

                    case 'ArrowRight':

                        this.nextImage();

                        break;

                }

            }
        );

        if (this.previousButton) {

            this.previousButton.addEventListener(
                'click',
                () => this.previousImage()
            );

        }

        if (this.nextButton) {

            this.nextButton.addEventListener(
                'click',
                () => this.nextImage()
            );

        }
    },

    stickyHeader() {

        if (!this.header) {
            return;
        }

        if (window.scrollY > 40) {

            this.header.classList.add('header--scrolled');

        } else {

            this.header.classList.remove('header--scrolled');

        }

    },

    toggleMobileMenu() {

        this.mobileToggle.classList.toggle('is-active');

        this.navigation.classList.toggle('is-open');

    },

    openLightbox(index) {

        this.currentImage = index;

        this.lightboxImage.src = this.galleryItems[index].src;

        this.lightboxImage.alt = this.galleryItems[index].alt;

        this.lightbox.classList.add('active');

    },

    closeLightbox() {

    this.lightbox.classList.remove('active');

    },

    previousImage() {

        if (this.currentImage === 0) {

            this.currentImage = this.galleryItems.length - 1;

        } else {

            this.currentImage--;

        }

        this.updateLightbox();

    },

    nextImage() {

        if (this.currentImage === this.galleryItems.length - 1) {

            this.currentImage = 0;

        } else {

            this.currentImage++;

        }

        this.updateLightbox();

    },

    updateLightbox() {
    this.lightboxImage.src = this.galleryItems[this.currentImage].src;
    this.lightboxImage.alt = this.galleryItems[this.currentImage].alt;
    }
};

document.addEventListener(
    'DOMContentLoaded',
    () => ALS.init()
);