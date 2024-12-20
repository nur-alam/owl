<?php
/**
 * Admin page
 *
 * @package Tutorowl
 */

$template_list = TEMPLATE_LIST;
// $template_list = 'http://owl.test/wp-content/droip-layouts.json';

$prev_img = array(
	'https://raw.githubusercontent.com/nur-alam/owl/refs/heads/main/files/business-entrepreneureship.png',
	'https://raw.githubusercontent.com/nur-alam/owl/refs/heads/main/files/droip-photography-template.jpg',
);
?>
<div id="tutorowl-demo-import">
	<div class="demo-importer-ui">
		<div class="demo-importer-wrapper">
			<div class="demo-importer-top">
				<h2><?php esc_html_e( 'Tutor Owl Templates', 'tutorowl' ); ?></h2>
			</div>
			<ul class="demo-importer-list">
				<?php $i = 0; ?>
				<?php
				if ( ! empty( $template_list ) ) {
					foreach ( $template_list as $key => $template ) {
						$template = (object) $template;
						?>
				<li class="single-item">
					<div class="single-item-inner">
						<div class="template-name">
							<?php echo esc_html( $template->name ); ?>
						</div>
						<div class="icons">
							<img src="<?php echo esc_url( $prev_img[ $i++ ] ); ?>" loading="lazy" alt="icon">
							<!-- <img src="<?php echo esc_url( $template->preview_url ); ?>" loading="lazy" alt="icon"> -->
						</div>
					</div>
					<div class="actions">
						<a class="preview-url btn btn-light" href="https://preview.tutorlms.com/singlecourse/"
							target="_blank"><?php esc_html_e( 'Preview', 'tutorowl' ); ?></a>
						<button 
							data-template="<?php echo esc_attr( $key ); ?>"
							class="import-btn btn btn-primary primary-btn">
							<span><?php esc_html_e( 'Import', 'tutorowl' ); ?></span>
						</button>
					</div>
				</li>
						<?php
					}
				} else {
					?>
				<h3 style="text-align: center; margin-top: 30px;">
					<?php echo esc_html_e( 'No template available.', 'tutorowl' ); ?></h3>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>



<div id="modal-wrapper">
	<div class="modal-wrapper-overlay"></div>
	<div class="modal-content">
		<div class="modal-head">
			<h3><?php esc_html_e( 'Music Template', 'tutorowl' ); ?></h3>
		</div>
		<div class="import-item-wrapper">
			<div class="installation-progress-wrapper">
				<div class="progress">
					<div class="progress-status"></div>
				</div>
				<div class="percentage-number">0%</div>
			</div>
			<div class="success-block-wrapper">
				<div class="success-block">
					<div class="success-heading">
						<svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M24 41C33.3888 41 41 33.3888 41 24C41 14.6112 33.3888 7 24 7C14.6112 7 7 14.6112 7 24C7 33.3888 14.6112 41 24 41ZM15.5663 24.8555C15.6107 24.9627 15.6747 25.0607 15.7552 25.1443L21.7787 31.1456C21.8582 31.2383 21.9567 31.3128 22.0675 31.3641C22.3046 31.462 22.5708 31.462 22.8079 31.3641C22.9187 31.3128 23.0172 31.2383 23.0967 31.1456L33.7628 20.535C33.8432 20.4514 33.9073 20.3535 33.9516 20.2463C34.0401 20.0074 34.0401 19.7447 33.9516 19.5058C33.9082 19.3981 33.844 19.3 33.7628 19.217L32.4226 17.9138C32.3442 17.8238 32.2476 17.7514 32.1391 17.7016C32.0305 17.6518 31.9126 17.6257 31.7932 17.6251C31.666 17.6235 31.5399 17.6487 31.423 17.6991C31.3103 17.7509 31.2085 17.8238 31.1231 17.9138L22.4451 26.5919L18.4023 22.5416C18.3145 22.451 18.2102 22.3781 18.095 22.3269C17.9784 22.2757 17.8521 22.2504 17.7247 22.2529C17.6073 22.2532 17.4912 22.2785 17.3841 22.3269C17.2729 22.3758 17.1742 22.4492 17.0954 22.5416L15.7552 23.8263C15.674 23.9093 15.6098 24.0074 15.5663 24.1151C15.4779 24.354 15.4779 24.6166 15.5663 24.8555Z"
								fill="#24A148"></path>
						</svg>
						<h3><?php esc_html_e( 'Import Successful!', 'tutorowl' ); ?></h3>
					</div>
					<p><?php esc_html_e( 'Bingo! Your demo site is ready. Check how it looks.', 'tutorowl' ); ?></p>
					<a href="<?php echo esc_url( home_url() ); ?>" class="btn btn-primary view-site-now"
						target="_blank">
						<?php esc_html_e( 'View Site', 'tutorowl' ); ?>
					</a>
				</div>
			</div>
			<div class="import-item">
				<svg class="svg-circle" style="width: 15px; height: 15px;">
					<circle class="circle-full" cx="8" cy="8" r="8" fill="#5FAC23"></circle>
					<path class="check-mark"
						d="M6.138 8.9714L3.9427 6.776 3 7.7187l3.138 3.138L12 4.9427l-.9427-.9426L6.138 8.9714z"
						fill="#fff"></path>
				</svg>
				<svg class="svg-spinner" viewBox="0 0 50 50">
					<circle class="path" cx="25" cy="25" r="20" fill="none"></circle>
				</svg>
				<div class="title"><?php esc_html_e( 'Tutor LMS', 'tutorowl' ); ?></div>
			</div>
			<div class="import-item">
				<svg class="svg-circle" style="width: 15px; height: 15px;">
					<circle class="circle-full" cx="8" cy="8" r="8" fill="#5FAC23"></circle>
					<path class="check-mark"
						d="M6.138 8.9714L3.9427 6.776 3 7.7187l3.138 3.138L12 4.9427l-.9427-.9426L6.138 8.9714z"
						fill="#fff"></path>
				</svg>
				<svg class="svg-spinner" viewBox="0 0 50 50">
					<circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
				</svg>
				<div class="title"><?php esc_html_e( 'Droip', 'tutorowl' ); ?></div>
			</div>
			<div class="import-item">
				<svg class="svg-circle" style="width: 15px; height: 15px;">
					<circle class="circle-full" cx="8" cy="8" r="8" fill="#5FAC23"></circle>
					<path class="check-mark"
						d="M6.138 8.9714L3.9427 6.776 3 7.7187l3.138 3.138L12 4.9427l-.9427-.9426L6.138 8.9714z"
						fill="#fff"></path>
				</svg>
				<svg class="svg-spinner" viewBox="0 0 50 50">
					<circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
				</svg>
				<div class="title"><?php esc_html_e( 'Contents', 'tutorowl' ); ?></div>
			</div>
			<div id="content-details"></div>
		</div>
		<div class="danger-block"></div>
		<div class="modal-footer">
			<button id="import-cancel-btn"
				class="preview-url btn btn-light"><?php esc_html_e( 'Cancel', 'tutorowl' ); ?></button>
			<button class="btn btn-primary primary-btn import-now"><?php esc_html_e( 'Import Now', 'tutorowl' ); ?></button>
		</div>
	</div>
</div>