<?php
//LISTAR CAPITULOS
function list_chapter($post_id, $count, $active = 0, $post_ids = 0, $eps = 1)
	{
		$category = get_the_category($post_id);
		$title = $category[0]->slug;
		echo '<div>';
		$east_chap = new WP_Query([
			'showposts'     => $count,
			'post_type'     => ['post'],
			'category_name' => $title,
			'meta_key'      => 'nome_capitulo',
			'orderby'       => 'meta_value_date'
		]);

		if ($east_chap->have_posts()) {
			echo '<ul class="list-unstyled">';

			while ($east_chap->have_posts()) {
				$east_chap->the_post();
				

				if ((date('U') - get_the_time('U', get_the_ID())) < 86400) {
					$time = '</br><span>NOVO </span>';
				}
				else {
					$time = '';
				}

				if ($active == 1) {
					if ($post_ids == get_the_ID()) {
						echo '<li>';
					}
					else {
						echo '<li>';
					}
				}
				else {
					echo '<li>';
				}

				if ($eps == 1) {
					echo '<div>';
					echo '<span><a href="' . get_the_permalink() . '"><chapter>' . rwmb_the_value(get_the_ID(), 'nome_capitulo') . '</chapter></a></span>';
					//echo '<span class="eps"><a href="' . get_the_permalink() . '"><chapter>' . meta(get_the_ID(), 'east_chapter') . '</chapter></a></span>';
					echo '</div>';
				}

				echo '<div>';
				echo '<span><a href="' . get_the_permalink() . '">' . get_the_title() . '</a>' . $time . '</span>';
				echo '<span> ' . get_the_date() . '</span>';
				echo '</div>';
				echo '</li>';
			}

			echo '</ul>';
		}
		else {
			echo '<div>' . ('No chapters') . '</div>';
		}

		echo '</div>';
		wp_reset_query();
	}
