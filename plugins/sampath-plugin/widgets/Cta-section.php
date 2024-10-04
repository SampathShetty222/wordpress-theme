<?php 
/*
CTA - SECTION
*/
?>
<?php

class Cta_Section_Widgets extends \Elementor\Widget_Base {

    public function get_name() {
        return 'Cta-Section';
    }

    public function get_title() {
        return esc_html__( 'CTA Section', 'sampath-plugin' );
    }

    public function get_icon() {
        return 'eicon-headphones';
    }

    public function get_categories() {
        return [ 'b2w_category' ];
    }

    public function get_keywords() {
        return['Cta','sampath', 'Contact','form','plugin'];
    }

    protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'sampath-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'sampath-plugin' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get in touch and we will help you get ahead of the curve!', 'sampath-plugin' ),
                'placeholder' => esc_html__( 'Enter the title', 'sampath-plugin' ),
            ]
            );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .heading',
			]
            );
        $this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .heading' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_control(
            'button_content',
            [
                'label' => esc_html__( 'Button Title', 'sampath-plugin' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Contact Us' ),
                'placeholder' => esc_html__( 'Enter the Button Text', 'sampath-plugin' ),
            ]
            );

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .cta-section',
			]
		);

        

        $this->end_controls_section();
    }

    protected function render(){
        $settings = $this -> get_settings_for_display();        
echo <<<HTML
 <!-- CTA -->
 <section
        class="cta-section bg-primary rounded-common mx-auto md:max-w-7xl md:pl-24 md:pe-20 md:py-12 md:mt-28 px-7 md:px-0 py-7">
        <div class="md:flex">
            <div class="md:w-1/2 text-center md:text-start">
                <h4 class="heading capitalize font-heading text-3xl	font-semibold text-white leading-10	pe-5">{$settings['title']}</h4>
            </div>
            <div class="md:w-1/2 md:justify-end justify-center pt-5 md:pt-0 flex items-center">
                <button
                    class="bg-white text-end text-lg font-heading font-normal text-primary px-10 py-2 rounded-2xl">{$settings['button_content']}</button>
            </div>
        </div>
    </section>
HTML;
    }
   }
// Register
\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Cta_Section_Widgets() );