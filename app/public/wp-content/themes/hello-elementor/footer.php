<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<style>
	/* Footer Styling */
	.site-footer {
	background-color: #000000;
	color: #fff;
	padding: 3rem 0 1rem 0;
	margin-top: 4rem;
	}

	.footer-container {
	max-width: 1200px;
	margin: 0 auto;
	padding: 0 1rem;
	}

	.footer-info {
	display: flex;
	justify-content: space-between;
	gap: 2rem;
	flex-wrap: wrap;
	}

	.footer-section {
	flex: 1;
	min-width: 250px;
	}

	.footer-section h3 {
	color: #fff;
	margin-bottom: 1rem;
	font-size: 1.2rem;
	}

	.footer-section p {
	color: #fff;
	margin-bottom: 0.5rem;
	}

	.contact-button {
	display: inline-block;
	background-color: #CC3366;
	color: #fff;
	padding: 0.8rem 1.5rem;
	border-radius: 5px;
	text-decoration: none;
	margin-top: 1rem;
	transition: background-color 0.3s;
	}

	.contact-button:hover {
	background-color: #aa2855;
	color: #fff;
	}

	.footer-bottom {
	border-top: 1px solid #444;
	padding-top: 1rem;
	text-align: center;
	}

	.footer-bottom p {
	color: #fff;
	font-size: 0.9rem;
	}

	/* Alleen op mobiel onder elkaar */
	@media (max-width: 768px) {
	.footer-info {
		flex-direction: column;
		text-align: center;
	}
	}
</style>

<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-info">
			<div class="footer-section">
                <h3>Openingstijden</h3>
                <p>Maandag t/m Vrijdag: 11:00 - 22:00</p>
                <p>Zaterdag & Zondag: 12:00 - 23:00</p>
            </div>

            <div class="footer-section">
                <h3>Contact</h3>
                <p>Telefoon: 123-456-789</p>
                <p>Email: info@desmaakmaker.nl</p>
                <a href="/contact/" class="contact-button">Neem Contact Op</a>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> De Smaakmaker. Alle rechten voorbehouden.</p>
        </div>
    </div>
</footer>

<?php 
	if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
		if ( hello_elementor_display_header_footer() ) {
			if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
				get_template_part( 'template-parts/dynamic-footer' );
			} else {
				get_template_part( 'template-parts/footer' );
			}
		}
	}

	wp_footer();
?>

</body>
</html>
