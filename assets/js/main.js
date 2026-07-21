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

    }

};

document.addEventListener(
    'DOMContentLoaded',
    () => ALS.init()
);