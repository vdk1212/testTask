jQuery( function( $ ) {

	'use strict';

	// VARIABLES
	let page = document.querySelector( 'html' ),
		scrollPosition = 0,
		header = $( 'header' ),
		popupScrollTop,
		mobile = navigator.userAgent.match( /Android/i ) || navigator.userAgent.match( /webOS/i ) || navigator.userAgent.match( /iPhone/i ) || navigator.userAgent.match( /iPad/i ) || navigator.userAgent.match( /iPod/i );
	// FUNCTIONS
	function headerScrolled() {

		if ( scrollPosition > header.outerHeight() ) {
			header.addClass( 'scrolled' );
		} else {
			header.removeClass( 'scrolled' );
		}
	}
	// Disable scroll on page
	const removeScroll = () => {
		popupScrollTop = window.scrollY;
		page.style.position = 'fixed';
		page.style.top = '-' + popupScrollTop + 'px';
		page.style.width = '100%';
	}
	// Enable scroll on page
	const addScroll = () => {
		page.style.cssText = '';
		window.scroll(0, popupScrollTop);
	}
	// FUNCTION ON PAGE LOAD
	scrollPosition = window.scrollY;
	
	headerScrolled();
	// FUNCTION ON PAGE SCROLL
	document.addEventListener( 'scroll', () => {
		scrollPosition = window.scrollY;
		headerScrolled();
	} );
	// EVENTS
	// Mobile menu button
	$( '.burger' ).on( 'click', function() {
		header.toggleClass( 'open-menu' );
		$( this ).toggleClass( 'active' );
		$( 'nav' ).toggleClass( 'active' );

		if ( $( this ).hasClass( 'active' ) ) {
			removeScroll();
		} else {
			addScroll();
		}
	} );
	// Tel-informer
	$( '.phone' ).on( 'click', function () {
		$( this ).toggleClass( 'active' );
	} );
	// Popups
	let popup = document.querySelectorAll( '.popup-content' ),
		popupBtn = document.querySelectorAll( '.open-popup' ),
		popupBgClose = document.querySelectorAll( '.popup-bg' ),
		popupBtnClose = document.querySelectorAll( '.popup-btn-close' );

	function closePopup() {
		popup.forEach( ( thisPopup ) => {
			thisPopup.classList.remove( 'active' );
		} );
	}

	function openPopup( popup ) {
		header.removeClass( 'open-menu' );
		$( 'nav' ).removeClass( 'active' );
		$( '.burger' ).removeClass( 'active' );

		closePopup();
		removeScroll( popupScrollTop );

		document.querySelector( popup ).classList.add( 'active' );
	}

	popupBtn.forEach( ( clickedBtn ) => {
		closePopup();

		clickedBtn.addEventListener( 'click', ( e ) => {
			e.preventDefault();
			openPopup( '#' + clickedBtn.getAttribute( 'data-id' ) );
		} );
	} );

	popupBgClose.forEach( ( clickedBtn ) => {
		clickedBtn.addEventListener( 'click', () => {
			clickedBtn.parentElement.classList.remove( 'active' );
			addScroll();
		} );
	} );

	popupBtnClose.forEach( ( clickedBtn ) => {
		clickedBtn.addEventListener( 'click', () => {
			clickedBtn.parentElement.parentElement.classList.remove( 'active' );
			addScroll();
		} );
	} );
	// Input focus
	$( '.form input, .form textarea' ).focus( function() {
		$( this ).parent().addClass( 'active' );
	} );
	// Input blur
	$( '.form input, .form textarea' ).blur( function() {
		$( this ).parent().removeClass( 'active' );
	} );
	// Check if input is empty / hide placeholder
	$( '.form input, .form textarea' ).on( 'change', function() {
		if ( $( this ).val() ) {
			$( this ).closest( 'label' ).addClass( 'hide-pl' );
		} else {
			$( this ).closest( 'label' ).removeClass( 'hide-pl' );
		}
	} );

	let formBtn = document.querySelector( '.contact-form-btn' );

	formBtn.addEventListener( 'click', () => {

		let validCout = 0,
			form = document.querySelector( '#contact-form' ),
			labels = form.querySelectorAll( 'label' ),
			inputs = form.querySelectorAll( 'input' ),
			confirmationText = document.querySelector( '#contacts-form .confirmation-of-shipment' );

		inputs.forEach( ( e, i ) => {
			if ( e.validity.patternMismatch === true || e.value === '' ) {
				e.classList.add( 'invalid' );
				validCout++;
			}
		} );

		if ( validCout === 0 ) {
			openPopup( '#thanks-popup' );

			inputs.forEach( ( e, i ) => {
				e.classList.remove( 'invalid' );
				validCout = 0;
			} );

			labels.forEach( ( e, i ) => {
				e.classList.remove( 'hide-pl' );
			} );

			setTimeout( function() {
				form.reset();
			}, 1000 );
		} else {}
	} );

	document.querySelector( '#contact-form' ).addEventListener( 'click', ( e ) => {
		if ( e.target.classList.contains( 'invalid' ) ) {
			e.target.classList.remove( 'invalid' );
		}
	} )
} );