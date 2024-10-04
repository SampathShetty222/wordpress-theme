<?php
/**
 * B2W Button Widget
 */

class B2w_Buttons_Widget extends \Elementor\Widget_Base {

	public function get_name() {
    return 'b2w_buttons';
  }
  //title in the dashbaord
	public function get_title() {
    return __( 'Button', 'sampath-plugin' );
  }

	public function get_icon() {
    return 'eicon-button';
  }

  public function get_keywords() {
    return [ 'b2w', 'button', 'link', 'ui', 'cta', 'happy' ];
  }

	public function get_categories() {
    return ['b2w_category'];
  }

	protected function _register_controls() {

    $this->start_controls_section(
      'b2w_buttons',
      [
        'label' => __('Button','sampath-plugin'),
        'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    // add our controls

    $this->add_control(
      'button_text',
      [
        'label' => __('Button Text', 'sampath-plugin'),
        'label_block' => true,
        'placeholder' => __('Type something special here, my friend!', 'sampath-plugin' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Learn More','sampath-plugin'),
      ]
    );

    $this->add_control(
      'button_link',
      [
        'label' => __('Button Link', 'sampath-plugin'),
        'type' => \Elementor\Controls_Manager::URL,
        'show_external' => true,
        'default' => [
          'url' => '#',
          'is_external' => true,
          'nofollow' => false
        ],
      ]
    );

    $this->add_control(
      'button_style',
      [
        'label' => __( 'Button Style', 'sampath-plugin' ),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => 'btn-primary',
        'options' => [
          'btn-primary'   => __( 'Primary', 'sampath-plugin' ),
          'btn-secondary' => __( 'Secondary', 'sampath-plugin' ),
					'btn-invert'    => __( 'Invert', 'sampath-plugin' ),
        ],
      ],
    );

    $this->add_control(
			'color',
			[
				'label' => esc_html__( 'Color', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#FFFFFF',
				'selectors' => [
					'{{WRAPPER}} .link-box a' => 'color: {{VALUE}}',
				],
			]
		);

    $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .link-box a',
			]
		);
    $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'selector' => '{{WRAPPER}} .link-box a',
			]
		);

    $this->add_responsive_control(
      'button_align',
      [
        'label' => __( 'Alignment', 'sampath-plugin' ),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [

          'left' => [
            'title' => __( 'Left', 'sampath-plugin' ),
						'icon' => 'eicon-text-align-left',
          ],

          'center' => [
            'title' => __( 'Center', 'sampath-plugin' ),
						'icon' => 'eicon-text-align-center',
          ],

          'right' => [
            'title' => __( 'Right', 'sampath-plugin' ),
						'icon' => 'eicon-text-align-right',
          ],

        ],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
        'default' => 'left',
				'selectors' => [
					'{{WRAPPER}} .link-box' => 'text-align: {{VALUE}};',
				],
        'toggle' => true,

      ],
    );

    $this->add_responsive_control(
			'space_between',
			[
				'type' => \Elementor\Controls_Manager::SLIDER,
				'label' => esc_html__( 'Spacing', 'sampath-plugin' ),
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => [
					'size' => 30,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => 20,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => 10,
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .link-box' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);


    $this->end_controls_section();

  }
  

	protected function render() {

    $settings = $this->get_settings_for_display();
    $target = $settings['button_link']['is_external'] ? ' target="_blank"' : '';
    $nofollow = $settings['button_link']['nofollow'] ? ' rel="nofollow"' : '';

    echo '<div class="link-box">';
    echo '<a href="' . $settings['button_link']['url'] . '" ' . $target . $nofollow . ' class="btn"' . $settings['button_style'] . '">'.$settings['button_text'].'</a>';
    echo '</div>';
  }
//   protected function render(){
//     $settings = $this->get_settings_for_display();
// echo <<<HTML

// HTML;
//   }
}


// Register widget
\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \B2w_Buttons_Widget() );