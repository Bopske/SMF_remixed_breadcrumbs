<?php

/*******************************************************************************
 * RemixedBreadcrumbs
 *
 * Copyright (c) 2022 Arjen Welling
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 ******************************************************************************/

if (!defined('SMF'))
    die('No direct access...');

/**
 * Loads the extra css file
 *
 * Called by:
 * 		integrate_load_theme
 */
function remixedbreadcrumbs_css()
{

	global $options, $modSettings, $settings;
	
	// Load mod style
	loadCSSFile('RemixedBreadcrumbs.css', array('force_current' => false, 'validate' => true, 'order_pos' => '10000'));		
}

/**
 * Mention who made this thing
 *
 * Called by:
 * 		integrate_credits
 */
function remixedbreadcrumbs_credits()
{
	global $context;
	$context['copyrights']['mods'][] = 'Remixed Breadcrumbs by @rjen &copy; 2022';
}