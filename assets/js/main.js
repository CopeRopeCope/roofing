/**
 * NiPeĐo Lim Theme
 * Main JavaScript
 */

'use strict';

const LIMPLUS = {

    init() {

        this.cacheDom();
        this.bindEvents();
        this.stickyHeader();
        this.initScrollSpy();

    },

    cacheDom() {

        this.header = document.querySelector('.header');
        this.navigation = document.querySelector('.header__nav');
        this.mobileToggle = document.getElementById('mobile-toggle');

        this.galleryItems = document.querySelectorAll('.gallery__item img');
        this.currentImage = 0;

        this.lightbox = document.getElementById('gallery-lightbox');
        this.lightboxImage = document.getElementById('gallery-image');
        this.closeButton = document.getElementById('gallery-close');
        this.previousButton = document.getElementById('gallery-prev');
        this.nextButton = document.getElementById('gallery-next');

        this.sections = document.querySelectorAll('section[id]');
        this.navLinks = document.querySelectorAll('.nav-link');

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

        });

        if (this.closeButton) {

            this.closeButton.addEventListener(
                'click',
                () => this.closeLightbox()
            );

        }

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
            (event) => this.handleKeydown(event)
        );

        if (this.navigation) {

            this.navigation.querySelectorAll('a').forEach((link) => {

                link.addEventListener(
                    'click',
                    () => this.closeMobileMenu()
                );

            });

        }

    },

    handleKeydown(event) {

        if (
            event.key === 'Escape' &&
            this.navigation &&
            this.navigation.classList.contains('is-open')
        ) {

            this.closeMobileMenu();
            return;

        }

        if (!this.lightbox || !this.lightbox.classList.contains('active')) {

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

    },

    stickyHeader() {

        if (!this.header) {

            return;

        }

        this.header.classList.toggle(
            'header--scrolled',
            window.scrollY > 40
        );

    },

    initScrollSpy() {

        if (!this.sections.length || !this.navLinks.length) {

            return;

        }

        const observer = new IntersectionObserver(

            (entries) => {

                entries.forEach((entry) => {

                    if (!entry.isIntersecting) {

                        return;

                    }

                    const id = '#' + entry.target.id;

                    this.navLinks.forEach((link) => {

                        link.classList.remove('active');

                        const href = new URL(link.href).hash;

                        if (href === id) {

                            link.classList.add('active');

                        }

                    });

                });

            },

            {

                threshold: 0.45

            }

        );

        this.sections.forEach(
            (section) => observer.observe(section)
        );

    },

    toggleMobileMenu() {

        if (!this.navigation || !this.mobileToggle) {

            return;

        }

        this.navigation.classList.toggle('is-open');
        this.mobileToggle.classList.toggle('is-active');

        this.mobileToggle.setAttribute(
            'aria-expanded',
            this.navigation.classList.contains('is-open')
        );

        document.body.classList.toggle('menu-open');

    },

    closeMobileMenu() {

        if (!this.navigation || !this.mobileToggle) {

            return;

        }

        this.navigation.classList.remove('is-open');
        this.mobileToggle.classList.remove('is-active');

        this.mobileToggle.setAttribute(
            'aria-expanded',
            'false'
        );

        document.body.classList.remove('menu-open');

    },

    openLightbox(index) {

        this.currentImage = index;

        this.updateLightbox();

        this.lightbox.classList.add('active');

    },

    closeLightbox() {

        this.lightbox.classList.remove('active');

        this.lightboxImage.src = '';
        this.lightboxImage.alt = '';

    },

    previousImage() {

        this.currentImage =
            this.currentImage === 0
                ? this.galleryItems.length - 1
                : this.currentImage - 1;

        this.updateLightbox();

    },

    nextImage() {

        this.currentImage =
            this.currentImage === this.galleryItems.length - 1
                ? 0
                : this.currentImage + 1;

        this.updateLightbox();

    },

    updateLightbox() {

        this.lightboxImage.src =
            this.galleryItems[this.currentImage].src;

        this.lightboxImage.alt =
            this.galleryItems[this.currentImage].alt;

    }

};

document.addEventListener(
    'DOMContentLoaded',
    () => LIMPLUS.init()
);