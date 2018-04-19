<?php
/**
 * Display navbar with search.
 *
 * @package WPAMPTheme
 */

?>
<div class="travel-no-focus" role="button" tabindex="-1">

	<!-- Results Navbar -->
	<header class="travel-results-navbar pt4 pr4 pl4">
		<div class="px1 md-px2 flex justify-between items-stretch">
			<div class="flex items-stretch">
				<a href="<?php echo esc_html( home_url() ); ?>" class="travel-results-navbar-icon h2 circle my1 md-my2">
					<svg class="travel-icon travel-icon-logo h2" viewbox="0 0 100 100"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-width="7.5"><circle cx="50" cy="50" r="45"></circle><path d="M20.395 83.158c-2.37-10.263-.79-18.553 4.737-24.87 8.29-9.472 17.763-1.183 26.052-9.472 8.29-8.29 2.37-18.948 10.658-26.053 5.526-4.737 12.237-6.316 20.132-4.737M39.084 95c-2.788-10.2-1.912-17.304 2.627-21.316 6.808-6.017 14.956-.68 24.088-9.623 9.13-8.94 3.062-17.133 10.255-23.534 4.795-4.267 10.282-5.668 16.46-4.203"></path></g></svg></a>
					<div class="ml3 flex items-center xs-hide sm-hide">

					<div class="flex items-center">
						<label class="travel-input-icon relative">
							<input class="travel-input travel-input-dark rounded" type="text" name="query" placeholder="<?php esc_html_e( 'Search' ); ?>" on='
								input-throttled:AMP.setState({
									fields_query: event.value,
									fields_query_live: event.value,
									fields_query_edited: query_query != event.value
								});' value="<?php echo esc_attr( $_GET['s'] ); ?>">
						</label>
						<label class="travel-date-input travel-input-dark travel-date-input-touched bold relative rounded ml2">
							<input class="block relative p0 z1" type="date" placeholder="yyyy-mm-dd" on='
								change:AMP.setState({
									fields_start: event.value
								})' pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="yyyy-mm-dd" name="departure"
								value="<?php echo isset( $_GET['start'] ) ? esc_attr( $_GET['start'] ) : ''; ?>">

							<div class="travel-date-input-label">
								Departure
							</div>
						</label>
						<label class="travel-date-input travel-input-dark travel-date-input-touched bold relative rounded ml2">
							<input class="block relative p0 z1" type="date" placeholder="yyyy-mm-dd" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" on='
								change:AMP.setState({
									fields_end: event.value
								})' title="yyyy-mm-dd" name="return"
								value="<?php echo isset( $_GET['end'] ) ? esc_attr( $_GET['end'] ) : ''; ?>">

							<div class="travel-date-input-label">
								<?php esc_html_e( 'Return', 'travel' ); ?>
							</div>
						</label>
						<a href="<?php echo esc_url( site_url() ); ?>?s=<?php echo esc_attr( $_GET['s'] ); ?>" [href]="'<?php echo esc_url( site_url() ); ?>?s=' + fields_query_live + '&start=' + (fields_start || '') + '&end=' + (fields_end || '')" class="search-travel-btn travel-input travel-input-dark rounded ampstart-btn white bold">
							<?php esc_html_e( 'Find adventures', 'travel' ); ?>
						</a>
					</div>
				</div>
			</div>
			<div class="travel-results-navbar-icon h3 my1 md-my2 md-hide lg-hide" role="button" tabindex="0">
				<svg class="travel-icon" viewbox="0 0 100 100"><g fill="currentColor"><path d="M77 74v18.312C77 94.35 78.79 96 81 96s4-1.65 4-3.688V74h-8zm0-37V6.778C77 4.69 78.79 3 81 3s4 1.69 4 3.778V37h-8zM47 52v41.24c0 2.076 1.79 3.76 4 3.76s4-1.684 4-3.76V52h-8zm0-38V6.667C47 4.642 48.79 3 51 3s4 1.642 4 3.667V14h-8zM16 86v7.29c0 2.05 1.79 3.71 4 3.71s4-1.66 4-3.71V86h-8zm0-38V6.75C16 4.68 17.79 3 20 3s4 1.68 4 3.75V48h-8z"></path><circle cx="20.5" cy="67.5" r="11.5"></circle><circle cx="50.5" cy="33.5" r="11.5"></circle><circle cx="80.5" cy="55.5" r="11.5"></circle></g></svg>
			</div>
		</div>
	</header>
	<!--/ Results Navbar -->
</div>
