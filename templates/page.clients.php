<?php
/**
 * @copyright Copyright (c) 2018 Julius Härtl <jus@bitgrid.net>
 *
 * @author Julius Härtl <jus@bitgrid.net>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * @var array $_
 * @var \OCP\IL10N $l
 * @var \OCP\Defaults $theme
 */
?>

<div class="page" data-title="<?php p($l->t('Stay in sync')); ?>" data-subtitle="">
	<div class="content content-clients">
		<p><?php p($l->t('bitnext gives you access to your files wherever you are.')); ?><br />
			<?php p($l->t('Our easy to use desktop and mobile clients are available for all major platforms at zero cost!')); ?></p>
		<div class="description-block">
			<h3><?php p($l->t('Get the apps to sync your files')); ?></h3>
			<a target="_blank" href="<?php p($_['desktop']); ?>" rel="noreferrer noopener">
				<img src="<?php p(image_path('core', 'desktopapp.svg')); ?>"
					 alt="<?php p($l->t('Desktop client')); ?>"/>
			</a>
		</div>
	</div>
</div>
