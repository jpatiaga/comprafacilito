<?php
$subdomain = preg_replace('/^(?:([^\.]+)\.)?comprafacilito\.local$/', '\1', $_SERVER['SERVER_NAME']);
if ($subdomain == 'promociones' && arg(1) && is_numeric(arg(1))):
	$node = node_load(arg(1));
	if ($node->type == 'producto'):
?>
<html>
	<head>
		<title><?php echo $node->title ?></title>
	</head>
	<body style="font-family: Georgia,'Times New Roman',Times,serif; text-align: center;">
		<table border="0" cellpadding="0" cellspacing="0" style="border: 0;" width="600" align="center">
			<tr>
				<td align="center" style="font-size: 11px;">
					Si no puede ver correctamente este mensaje o sus im&aacute;genes, por favor haga click <a href="http://comprafacilito.local/node/<?php echo $node->nid ?>">aqu&iacute;</a>
				</td>
			</tr>
			<tr>
				<td align="center">
					<hr />
				</td>
			</tr>
			<tr>
				<td align="center">
					<table border="0" cellpadding="0" cellspacing="0" width="600">
						<tr>
							<td width="100">
								<a href="http://comprafacilito.local/node/<?php echo $node->nid ?>"><img border="0" src="http://comprafacilito.local/sites/default/files/logo_smaller.png" alt="CompraFacilito.com" /></a>
							</td>
							<td width="500">
								<h1><a href="http://comprafacilito.local/node/<?php echo $node->nid ?>" style="color: #000; text-decoration: none;"><?php echo $node->title ?></a></h1>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td align="center">
					<p style="padding-bottom: 10px;"><?php echo strip_tags($node->body['und'][0]['safe_value']) ?></p>
				</td>
			</tr>
			<tr>
				<td align="center">
					<a href="http://comprafacilito.local/node/<?php echo $node->nid ?>"><img border="0" style="padding-bottom: 15px;" src="http://comprafacilito.local/sites/default/files/productos/<?php echo $node->field_imagen['und'][0]['filename'] ?>" alt="<?php echo $node->title ?>" /></a>
				</td>
			</tr>
			<tr>
				<td align="center">
					<a style="font-size: 24px; font-weight: bold; margin-bottom: 10px; color: #000; text-decoration: none;" href="http://comprafacilito.local/node/<?php echo $node->nid ?>">Oferta <span style="color: #EE018D;">CompraFacilito</span>: $<?php echo number_format($node->field_precio['und'][0]['value'], 2, ',', '.') ?></a>
				</td>
			</tr>
			<tr>
				<td align="center">
					<p>El precio ya incluye IVA y la entrega a domicilio en Quito.<br /><span style="font-size: 12px;">Entrega a provincias: $2.</span></p>
				</td>
			</tr>
			<tr>
				<td align="center">
					<p style="font-size: 24px; font-weight: bold; margin-top: 20px;">Realice su pedido haciendo clic <a style="color: #FF0000;" href="http://comprafacilito.local/node/<?php echo $node->nid ?>">AQUI</a></p>
				</td>
			</tr>
			<tr>
				<td align="center">
					<p style="margin-top: 50px; font-size: 10px; color: #999999; font-style: italic;">De acuerdo a la Ley de Comercio Electr&oacute;nico del Ecuador y su Reglamento publicado en el Registro Oficial 735 del 31 de diciembre de 2002 Decreto N. 3496, art&iacute;culo 22, usted puede pedir el cese del env&iacute;o de información en cualquier momento escribiendo a <a style="color: #999999;" href="mailto:info@comprafacilito.com">info@comprafacilito.com</a> con la palabra SALIR como asunto del mensaje.</p>
				</td>
			</tr>
		</table>
	</body>
</html>
<?php
	endif;
else:
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
<?php endif; ?>