<?php 
/*
Marqueue Section
*/
?>
<?php

class Marqueue_Section_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'marqueue_section';
    }

	public function get_title() {
        return esc_html__( 'Marquee Section', 'sampath-plugin' );
    }

	public function get_icon() {
        return 'eicon-slider-album';
    }

	public function get_categories() {
        return [ 'b2w_category' ];
    }

	public function get_keywords() {
        return['marqueue','sampath' , 'samtheme'];
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
            'marqueue-title',
            [
                'label' => esc_html__( 'Title', 'sampath-plugin' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('1st and Only EV Bus Service in India'),
                'placeholder' => esc_html__( 'Enter your Title', 'sampath-plugin' ),
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .marqueue-tag span',
			]
		);
		$this->add_responsive_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .marqueue-tag span' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .marqueue-section',
			]
		);
        $this->end_controls_section();
    }

protected function render(){
        $settings = $this->get_settings_for_display();

echo <<<HTML
<section class="marqueue-section text-black py-[30px]">
 <marquee behavior="scrool" direction="left" class="text-white text-4xl marqueue-tag" loop>
    <span class="uppercase font-bold">{$settings['marqueue-title']}</span><span class="px-[100px]">.</span><span class="uppercase font-bold">{$settings['marqueue-title']}</span>
    <span class="uppercase font-bold">{$settings['marqueue-title']}</span><span class="px-[100px]">.</span><span class="uppercase font-bold">{$settings['marqueue-title']}</span>
 </marquee>
</section>
HTML;
        }
}

//Register widgets

\Elementor\plugin::instance()->widgets_manager->register_widget_type( new \Marqueue_Section_Widget() );
