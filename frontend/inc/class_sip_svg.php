<?php

class sip_svg {


	private $xml;
	private $width;
	private $height;
	private $text_color;
	private $graph;
	private $bg_color;
	public  $data;
	public  $s_ip;
	public  $d_ip;

	/***
	   *	Constructor
	   */
	function sip_svg(){
		$this->text_color = 'black';
		$this->width = 940;
		$this->bg_color = '#ccc';
		$this->s_ip = 'unknown';
		$this->d_ip = 'unknown';
	}


	/***
	  *	insert line
	  *	@param position,color,line thicknes in px
	  */
	private function line($position,$rgb_color='black',$stroke_width=1){
		return '<g style="fill: none; color: black; stroke: currentcolor; stroke-width: '.$stroke_width.
			'; stroke-linecap: butt; stroke-linejoin: miter;">
	<path style="stroke: '.$rgb_color.';" d="'.$position.' "/>'."\n".'</g>'."\n";
	}
	private function arrow($position,$rgb_color='black',$stroke_width=1){
		return '<g style="fill: none; color: black; stroke: currentcolor; stroke-width: '.$stroke_width.
			'; stroke-linecap: butt; stroke-linejoin: miter;">
	<path marker-end="url(#'.$rgb_color.')" style="stroke: '.$rgb_color.';" d="'.$position.' "/>'."\n".'</g>'."\n";
	}
	private function arr2pos($arr){
		$i=0;
		foreach($arr as $v){
			if($i==0)
				$position = 'M'.$v.' ';
			else
				$position .= 'L'.$v.' ';
			$i++;
		}
		return $position;
	}

	/***
	  *	insert text
	  *	@param text, position,rotate,align,color
	  */
	private function text($text,$position,$rotate=false,$align='end',$color='black'){
		if($rotate==false) $rot_string = ''; else $rot_string = 'rotate('.$rotate.')';
		return '<g transform="translate('.$position.') '.$rot_string.
		'" style="stroke: none; fill: '.$color.'; font-family: arial; font-size: 10pt; text-anchor: '.$align.';">
		<text>'.$text.'</text>'."\n".'</g>'."\n";
	}

	/***
	  *	graph generator
	  */
	private function graph(){
		$line_padding_top_bottom = 40.5;
		$line_padding_left_right = 80.5;
		

		$this->graph .= '<marker id="magenta" viewBox="0 0 10 10" refX="10" refY="5" markerUnits="strokeWidth" orient="auto" markerWidth="10" markerHeight="14"><polyline points="0,0 10,5 0,10 1,5" fill="magenta" /></marker>';
		$this->graph .= '<marker id="cyan" viewBox="0 0 10 10" refX="10" refY="5" markerUnits="strokeWidth" orient="auto" markerWidth="10" markerHeight="14"><polyline points="0,0 10,5 0,10 1,5" fill="cyan" /></marker>';
		$begin = $line_padding_top_bottom+5;
		$line_height = 15;
		foreach($this->data as $e){
			if($e['d']){
				$pos = Array($line_padding_left_right.','.$begin,($this->width-$line_padding_left_right).','.($begin+$line_height));
				$this->graph .= $this->arrow($this->arr2pos( $pos ),'magenta');
				$rot=1.5;
				$this->graph .= $this->text($e['x'],($this->width/2).','.($begin+($line_height/2)-2),$rot,'middle','magenta');
			}else{
				$pos = Array(($this->width-$line_padding_left_right).','.$begin,$line_padding_left_right.','.($begin+$line_height));
				$this->graph .= $this->arrow($this->arr2pos( $pos ),'cyan');
				$rot=-1.5;
				$this->graph .= $this->text($e['x'],($this->width/2).','.($begin+($line_height/2)-2),$rot,'middle','cyan');
			}

			$begin = $begin + $line_height+10;
		}
		$this->height = $begin+50;

		$this->graph .= $this->line($this->arr2pos(Array($line_padding_left_right.','.$line_padding_top_bottom,$line_padding_left_right.','.($this->height-$line_padding_top_bottom))));
		$this->graph .= $this->text($this->s_ip,$line_padding_left_right.','.($line_padding_top_bottom-5),false,'middle');
		$this->graph .= $this->line($this->arr2pos(Array(($this->width-$line_padding_left_right).','.$line_padding_top_bottom,($this->width-$line_padding_left_right).','.($this->height-$line_padding_top_bottom))));
		$this->graph .= $this->text($this->d_ip,($this->width-$line_padding_left_right).','.($line_padding_top_bottom-5),false,'middle');
		
	}

	private function generate(){
		$this->graph();
		// headers
		$this->xml = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>'."\n";
		$this->xml .= '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">'."\n";
		$this->xml .= '<svg width="'.$this->width.'" height="'.$this->height.'" viewBox="0 0 '.$this->width.' '.$this->height.
				'" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">'."\n";
		$this->xml .= '<desc>Generated by KaTaLyzer svg class</desc>'."\n\n";

		// defs section
		$this->xml .= '<defs>'."\n";

		$this->xml .= '</defs>'."\n\n";

		$this->xml .= $this->graph;

		$this->xml .= '</svg>';
	}


	/***
	   *	Print xml
	   */
	function draw(){
		$this->generate();
		echo $this->xml;
	}
	/***
	  *	Return xml
	  */
	function ret(){
		$this->generate();
		return $this->xml;
	}

}
/*
Header("Pragma: no-cache");
Header("Cache-Control: no-cache");
Header("Expires: ".GMDate("D, d M Y H:i:s")." GMT");
header('Content-type: image/svg+xml');

$svg = new sip_svg();

// pole, smer cas text
$data[] = Array(
	'd'=>true,
	't'=>123123123,
	'x'=>'sadasdasdad dsa dsa'
);
$data[] = Array(
	'd'=>true,
	't'=>123123534,
	'x'=>'sadasds dd sa fsda fs df sdf af sda fas fsd fsa fsda fas fds fsa fsa fsad dsa dsa'
);
$data[] = Array(
	'd'=>false,
	't'=>123122534,
	'x'=>'sda fsa fs a'
);
$data[] = Array(
	'd'=>true,
	't'=>123123534,
	'x'=>'sadasds dds fsad fsaf sadsa fsa f sdfas f fsda fsa fsdad dsa dsa'
);
$data[] = Array(
	'd'=>false,
	't'=>123122534,
	'x'=>'sda fsa fs a'
);
$data[] = Array(
	'd'=>true,
	't'=>123123534,
	'x'=>'sadasdsda fsad fsad a fsa sdaf sds af sda fsda fsa fsad  dad dsa dsa'
);
$data[] = Array(
	'd'=>false,
	't'=>123122534,
	'x'=>'sda fsadsa fsa dfsa fsa fsd sa fsdaf sad fa f asfda fsa fsda  fs a'
);
$svg->data = $data;

$svg->draw();
*/

