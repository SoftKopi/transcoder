<?php
/**
 * This file is part of the arhitector/transcoder library.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Dmitry Arhitector <dmitry.arhitector@yandex.ru>
 *
 * @license   http://opensource.org/licenses/MIT MIT
 * @copyright Copyright (c) 2017 Dmitry Arhitector <dmitry.arhitector@yandex.ru>
 */

/**
 * 'FFMpeg format 1' => [extensions],
 * 'FFMpeg format 2' => [extensions, ...],
 */
return [
	'a64'          => ['a64', 'A64'],
	'ace'          => ['ac3', 'eac3'],
	'adts'         => ['aac', 'adts'],
	'adx'          => ['adx'],
	'aea'          => ['aea'],
	'aiff'         => ['aif', 'aiff', 'afc', 'aifc'],
	'amr'          => ['amr'],
	'ape'          => ['ape', 'apl', 'mac'],
	'aqtitle'      => ['aqt'],
	'asf'          => ['asf', 'wmv', 'wma'],
	'asf_stream'   => ['asf', 'wmv', 'wma'],
	'ass'          => ['ass', 'ssa'],
	'ast'          => ['ast'],
	'au'           => ['au'],
	'avi'          => ['avi'],
	'avisynth'     => ['avs'],
	'avs'          => ['avs'],
	'avr'          => ['avr'],
	'bin'          => ['bin'],
	'adf'          => ['adf'],
	'idf'          => ['idf'],
	'bit'          => ['bit'],
	'bmv'          => ['bmv'],
	'brstm'        => ['brstm'],
	'caf'          => ['caf'],
	'cdg'          => ['cdg'],
	'cdxl'         => ['cdxl', 'xl'],
	'daud'         => ['302', 'daud'],
	'dts'          => ['dts'],
	'dtshd'        => ['dtshd'],
	'dv'           => ['dv', 'dif'],
	'ea_cdata'     => ['cdata'],
	'epaf'         => ['pgaf', 'fap'],
	'ffm'          => ['ffm'],
	'ffmetadata'   => ['ffmeta'],
	'filmstrip'    => ['flm'],
	'flac'         => ['flac'],
	'flv'          => ['flv'],
	'g722'         => ['g722', '722'],
	'g723_1'       => ['tco', 'rco', 'g723_1'],
	'g729'         => ['g729'],
	'gif'          => ['gif'],
	'gsm'          => ['gsm'],
	'gxf'          => ['gxf'],
	'hls'          => ['m3u8'],
	'ico'          => ['ico'],
	'roq'          => ['roq'],
	'ilbc'         => ['lbc'],
	'image2'       => ['bmp', 'dpx', 'jls', 'jpeg', 'jpg', 'ljpg', 'pam', 'pbm', 'pcx', 'pgm', 'pgmyuv', 'png', 'ppm', 'sgi', 'tga', 'tif', 'tiff', 'jp2', 'j2c', 'xwd', 'sun', 'ras', 'rs', 'im1', 'im8', 'im24', 'sunras', 'xbm', 'xface'],
	'ingenient'    => ['cgi'],
	'ircam'        => ['sf', 'ircam'],
	'ivf'          => ['ivf'],
	'jacosub'      => ['jss', 'js'],
	'latm'         => ['latm', 'loas'],
	'libmodplug'   => ['669', 'abc', 'amf', 'ams', 'dbm', 'dmf', 'dsm', 'far', 'it', 'mdl', 'med', 'mid', 'mod', 'mt2', 'mtm', 'okt', 'psm', 'ptm', 's3m', 'stm', 'ult', 'umx', 'xm', 'itgz', 'itr', 'itz', 'mdgz', 'mdr', 'mdz', 's3gz', 's3r', 's3z', 'xmgz', 'xmr', 'xmz'],
	'libnut'       => ['nut'],
	'lvf'          => ['lvf'],
	'matroska'     => ['mkv', 'mka'],
	'webm'         => ['webm'],
	'microdvd'     => ['sub'],
	'mmf'          => ['mmf'],
	'mov'          => ['mov'],
	'3gp'          => ['3gp'],
	'mp4'          => ['mp4'],
	'psp'          => ['mp4', 'psp'],
	'3g2'          => ['3g2'],
	'ipod'         => ['m4v', 'm4a'],
	'ismv'         => ['ismv', 'isma'],
	'f4v'          => ['f4v'],
	'mp3'          => ['mp2', 'mp3', 'm2a'],
	'mp2'          => ['mp2', 'm2a', 'mp3'],
	'mpc'          => ['mpc'],
	'vobsub'       => ['idx'],
	'mpeg'         => ['mpg', 'mpeg'],
	'vob'          => ['vob'],
	'svcd'         => ['vob'],
	'dvd'          => ['dvd'],
	'mpegts'       => ['ts', 'm2t', 'm2ts', 'mts'],
	'mpjpeg'       => ['mjpg'],
	'mpl2'         => ['txt', 'mpl2'],
	'mpsub'        => ['sub'],
	'mvi'          => ['mvi'],
	'mxf'          => ['mxf'],
	'mxg'          => ['mxg'],
	'nc'           => ['v'],
	'nistsphere'   => ['nist', 'sph'],
	'nut'          => ['nut'],
	'ogg'          => ['ogg', 'ogv', 'spx', 'opus'],
	'oga'          => ['oga'],
	'oma'          => ['oma', 'omg', 'aa3'],
	's16be'        => ['sw'],
	's16le'        => ['sw'],
	's8'           => ['sb'],
	'u16be'        => ['uw'],
	'u16le'        => ['uw'],
	'u8'           => ['ub'],
	'alaw'         => ['al'],
	'mulaw'        => ['ul'],
	'pjs'          => ['pjs'],
	'pvf'          => ['pvf'],
	'mlp'          => ['mlp'],
	'truehd'       => ['thd'],
	'shn'          => ['shn'],
	'vc1'          => ['vc1'],
	'ac3'          => ['ac3'],
	'cavsvideo'    => ['cavs'],
	'dirac'        => ['drc'],
	'dnxhd'        => ['dnxhd'],
	'eac3'         => ['eac3'],
	'h261'         => ['h261'],
	'h263'         => ['h263'],
	'h264'         => ['h264'],
	'm4v'          => ['m4v'],
	'mjpeg'        => ['mjpg', 'mjpeg'],
	'mpeg1video'   => ['mpg', 'mpeg', 'm1v'],
	'mpeg2video'   => ['m2v'],
	'rawvideo'     => ['yuv', 'cif', 'qcif', 'rgb'],
	'realtext'     => ['rt'],
	'rm'           => ['rm', 'ra'],
	'rso'          => ['rso'],
	'sami'         => ['smi', 'sami'],
	'sbg'          => ['sbg'],
	'siff'         => ['vb', 'son'],
	'smjpeg'       => ['mjpg'],
	'sox'          => ['sox'],
	'spdif'        => ['spdif'],
	'srt'          => ['srt'],
	'subviewer1'   => ['sub'],
	'subviewer'    => ['sub'],
	'swf'          => ['swf'],
	'tak'          => ['tak'],
	'tta'          => ['tta'],
	'tty'          => ['ans', 'art', 'asc', 'diz', 'ice', 'nfo', 'txt', 'vt'],
	'rcv'          => ['rcv'],
	'vivo'         => ['viv'],
	'voc'          => ['voc'],
	'vplayer'      => ['txt'],
	'vqf'          => ['vqf', 'vql', 'vqe'],
	'wav'          => ['wav'],
	'w64'          => ['w64'],
	'webvtt'       => ['vtt'],
	'wtv'          => ['wtv'],
	'wv'           => ['wv'],
	'yop'          => ['yop'],
	'yuv4mpegpipe' => ['y4m']
];
