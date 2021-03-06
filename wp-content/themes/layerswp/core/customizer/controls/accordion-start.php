<?php
/**
 * Accordion Start Control
 *
 * This file is used to register and display the custom Layers Accordion Start.
 *
 * @package Layers
 * @since Layers 1.6.5
 */

if( !class_exists( 'Layers_Customize_Accordion_Start_Control' ) ) {

	class Layers_Customize_Accordion_Start_Control extends Layers_Customize_Control {

		public $type = 'layers-accordion-start';

		public function render_content() {
			
			$form_elements = new Layers_Form_Elements();
			
			?>
			<div
				id="layers-customize-control-<?php echo esc_attr( $this->id ); ?>"
				class="
					l_option-customize-control
					l_option-customize-control-<?php echo esc_attr( str_replace( 'layers-', '', $this->type ) ); // l_option-customize-control-accordion-start ?>
					<?php if ( FALSE === strpos( $this->class, 'group' ) ) { ?>
						l_option-customize-control-<?php echo esc_attr( str_replace( 'layers-', '', $this->type ) . '-standard' ); // l_option-customize-control-accordion-start-standard ?>
					<?php } else { ?>
						l_option-customize-control-<?php echo esc_attr( str_replace( 'layers-', '', $this->type ) . '-group' ); // l_option-customize-control-accordion-start-group ?>
					<?php } ?>
					<?php echo esc_attr( $this->class ); ?>
				"
				<?php echo $this->get_linked_data(); ?>
				>
				
				<?php do_action( 'layers-control-inside', $this ); ?>
				
				<?php if ( '' != $this->label ) { ?>
					<span class="customize-control-title"><?php echo $this->label; ?></span>
				<?php } ?>
				
				<?php echo $form_elements->input(
					array(
						'type' => 'hidden',
						'label' => ( isset( $this->label ) ? $this->label : '' ),
						'name' => '',
						'id' =>  $this->id,
						'value' => stripslashes( $this->value() ),
						'data' => $this->get_customize_data(),
						'placeholder' => $this->placeholder,
					)
				); ?>
				
			</div>
			<?php
		}

	}
}