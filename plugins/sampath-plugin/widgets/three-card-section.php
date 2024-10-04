<?php
/**
 * Three Card Section Widget
 */

class Three_Card_Section_Widgets extends \Elementor\Widget_Base
{

  public function get_name()
  {
    return 'three_card_section';
  }
  //title in the dashbaord
  public function get_title()
  {
    return __('Three Card Section', 'sampath-plugin');
  }

  public function get_icon()
  {
    return 'eicon-button';
  }

  public function get_keywords()
  {
    return ['card', 'section', 'heavy', 'ui', 'cta', 'sampath'];
  }

  public function get_categories()
  {
    return ['b2w_category'];
  }

  protected function _register_controls()
  {

    $this->start_controls_section(
      'Background',
      [
        'label' => __('Content', 'sampath-plugin'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .three-card-section',
			]
		);

    $this->end_controls_section();
    $this->start_controls_section(
      'Section-Second',
      [
        'label' => __('Heading Content', 'sampath-plugin'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
			'section_title',
			[
				'label' => esc_html__( 'Title', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Top Heavy Machinery & Spare Parts Makers', 'sampath-plugin' ),
				'placeholder' => esc_html__( 'Type your title here', 'sampath-plugin' ),
			]
		);
    $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_typography',
				'selector' => '{{WRAPPER}} .section_title',
			]
		);
    $this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Title Color', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .section-title' => 'color: {{VALUE}}',
				],
			]
		);

    $this->add_control(
			'section_subtitle',
			[
				'label' => esc_html__( 'Sub Title', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( "Our platform is dedicated to connecting you with the industry's finest, offering a curated selection of companies known for their exceptional innovation, reliability, and performance", 'sampath-plugin' ),
				'placeholder' => esc_html__( 'Type your Sub Title here', 'sampath-plugin' ),
			]
		);
    $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subheading_typography',
				'selector' => '{{WRAPPER}} .section-subtitle',
			]
		);
    $this->add_control(
			'subtitle_color',
			[
				'label' => esc_html__( 'SubTitle Color', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .section-subtitle' => 'color: {{VALUE}}',
				],
			]
		);
    
    $this->end_controls_section();
    $this->start_controls_section(
      'Section-Cards',
      [
        'label' => __('Cards Content', 'sampath-plugin'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'card-list',
			[
				'label' => esc_html__( 'Card List', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'list_title',
						'label' => esc_html__( 'Title', 'sampath-plugin' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'List Title' , 'sampath-plugin' ),
						'label_block' => true,
					],
					[
						'name' => 'list_content',
						'label' => esc_html__( 'Content', 'sampath-plugin' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'sampath-plugin' ),
						'show_label' => false,
					],
				],
				'default' => [
					[
						'list_title' => esc_html__( 'Robust Equipment:', 'sampath-plugin' ),
						'list_content' => esc_html__( 'Featuring industry giants known for their heavy-duty machinery designed to tackle the toughest jobs.', 'sampath-plugin' ),
					],
					[
						'list_title' => esc_html__( 'Advanced Machinery:', 'sampath-plugin' ),
						'list_content' => esc_html__( 'Featuring industry giants known for their heavy-duty machinery designed to tackle the toughest jobs.', 'sampath-plugin' ),
					],
          [
						'list_title' => esc_html__( 'High quality spare parts:', 'sampath-plugin' ),
						'list_content' => esc_html__( 'Featuring industry giants known for their heavy-duty machinery designed to tackle the toughest jobs.', 'sampath-plugin' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);

    $this->end_controls_section();

  }

  protected function render()
  {
    $settings = $this->get_settings_for_display();
    echo <<<HTML
      <section class="three-card-section bg-[url('/images/machines.svg')] md:px-[50px] px-[20px] w-full md:py-[80px] py-12 md:mt-0 mt-[70px] bg-cover bg-center relative">
        <div class="inset-0 opacity-60 bg-black absolute"></div>
        <div class="opacity-95">
            <div class="md:max-w-[660px] mx-auto md:text-center text-start">
                <h3 class="md:text-5xl text-3xl font-bold text-white md:leading-[60px] section_title section-title">{$settings['section_title']}</h3>
                <p class="text-xl text-white md:py-7 py-5">Our platform is dedicated to connecting you with the industry's finest, offering a curated selection of companies known for their exceptional innovation, reliability, and performance</p>
            </div>
            <div class="md:grid md:grid-cols-3 gap-4 opacity-95 md:pt-10">
HTML;
    if( $settings['card-list'] ){
      foreach( $settings['card-list'] as $key => $value ){
echo <<<HTML
        <div class="bg-[rgba(0,0,0,0.5)] text-center py-10 rounded-xl px-7 md:my-0 my-3">
                    <h4 class="text-white text-2xl font-medium">{$value['list_title']}</h4>
                    <p class="text-[rgba(255,255,255,0.6)] pt-3">{$value['list_content']}</p>
                </div>
HTML;
      }
    }
echo <<<HTML
            </div>

        </div>
    </section>
HTML;
  }
}


// Register widget
\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Three_Card_Section_Widgets());