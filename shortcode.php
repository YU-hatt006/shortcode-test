//ランキングタイトル　2019.12.13追記

function ranking_func($attr, $content) {
	$html  = '<div class="">'; 
    $html .= '<h3 class="rankingtitle rankingh3 ' . $attr['css'] . '">';
    $html .= '<span class="">' . $attr['ranking'] . '</span>'; 
    $html .= '<div class="text">' . $attr['title'] . '</div>';
    $html .= '</h3>'. $content .'</div>';
    return $html;
    }
add_shortcode('ranking', 'ranking_func');

⇨作成したショートコード
[ranking css = 'n1' ranking = '第1位' title = 'タイトル']テキスト[/ranking]



//20200112 続きを読む機能
function readmoresh_func($attr, $content) {
    $html = '<div class="cp_box">';
        $html .= '<input id="' . $attr['input_id'] . '" type="checkbox">';
        $html .= '<label for="' . $attr['input_id'] . '">' . '</label>';
        $html .= '<div class="cp_container"> '. $content . '</div>';
    $html .= '</div>';
    return $html;
}
add_shortcode('readmoresh', 'readmoresh_func');


⇨作成したショートコード
[readmoresh input_id = 'cp01']テキスト[readmoresh]



