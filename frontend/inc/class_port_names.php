<?php
class port{

	private $tcp = Array();
	private $upd = Array();


	// constructor

	function port(){
		$this->tcp = Array(
			// basic ports 0 - 1000
			1 => 'tcpmux',
			2 => 'compressnet',
			3 => 'compressnet',
			5 => 'rje',
			7 => 'echo',
			9 => 'discard',
			11 => 'systat',
			13 => 'daytime',
			17 => 'qotd',
			18 => 'msp',
			19 => 'chargen',
			20 => 'ftp-data',
			21 => 'ftp',
			22 => 'ssh',
			23 => 'telnet',
			25 => 'smtp',
			27 => 'nsw-fe',
			29 => 'msg-icp',
			31 => 'msg-auth',
			33 => 'dsp',
			37 => 'time',
			38 => 'rap',
			39 => 'rlp',
			41 => 'graphics',
			42 => 'nameserver',
			43 => 'nicname',
			44 => 'mpm-flags',
			45 => 'mpm',
			46 => 'mpm-snd',
			47 => 'ni-ftp',
			48 => 'auditd',
			49 => 'tacacs',
			50 => 're-mail-ck',
			51 => 'la-maint',
			52 => 'xns-time',
			53 => 'domain',
			54 => 'xns-ch',
			55 => 'isi-gl',
			56 => 'xns-auth',
			58 => 'xns-mail',
			61 => 'ni-mail',
			62 => 'acas',
			63 => 'whois++',
			64 => 'covia',
			65 => 'tacacs-ds',
			66 => 'sql*net',
			67 => 'bootps',
			68 => 'bootpc',
			69 => 'tftp',
			70 => 'gopher',
			71 => 'netrjs-1',
			72 => 'netrjs-2',
			73 => 'netrjs-3',
			74 => 'netrjs-4',
			76 => 'deos',
			78 => 'vettcp',
			79 => 'finger',
			80 => 'www-http',
			82 => 'xfer',
			83 => 'mit-ml-dev',
			84 => 'ctf',
			85 => 'mit-ml-dev',
			86 => 'mfcobol',
			88 => 'kerberos',
			89 => 'su-mit-tg',
			90 => 'dnsix',
			91 => 'mit-dov',
			92 => 'npp',
			93 => 'dcp',
			94 => 'objcall',
			95 => 'supdup',
			96 => 'dixie',
			97 => 'swift-rvf',
			98 => 'tacnews',
			99 => 'metagram',
			100 => 'newacct',
			101 => 'hostname',
			102 => 'iso-tsap',
			103 => 'gppitnp',
			104 => 'acr-nema',
			105 => 'csnet-ns',
			106 => '3com-tsmux',
			107 => 'rtelnet',
			108 => 'snagas',
			109 => 'pop2',
			110 => 'pop3',
			111 => 'sunrpc',
			112 => 'mcidas',
			113 => 'auth',
			115 => 'sftp',
			116 => 'ansanotify',
			117 => 'uucp-path',
			118 => 'sqlserv',
			119 => 'nntp',
			120 => 'cfdptkt',
			121 => 'erpc',
			122 => 'smakynet',
			123 => 'ntp',
			124 => 'ansatrader',
			125 => 'locus-map',
			127 => 'locus-con',
			128 => 'gss-xlicen',
			129 => 'pwdgen',
			130 => 'cisco-fna',
			131 => 'cisco-tna',
			132 => 'cisco-sys',
			133 => 'statsrv',
			134 => 'ingres-net',
			135 => 'epmap',
			136 => 'profile',
			137 => 'netbios-ns',
			138 => 'netbios-dgm',
			139 => 'netbios-ssn',
			140 => 'emfis-data',
			141 => 'emfis-cntl',
			142 => 'bl-idm',
			143 => 'imap',
			144 => 'uma',
			145 => 'uaac',
			146 => 'iso-tp0',
			147 => 'iso-ip',
			148 => 'jargon',
			149 => 'aed-512',
			150 => 'sql-net',
			151 => 'hems',
			152 => 'bftp',
			153 => 'sgmp',
			154 => 'netsc-prod',
			155 => 'netsc-dev',
			156 => 'sqlsrv',
			157 => 'knet-cmp',
			158 => 'pcmail-srv',
			159 => 'nss-routing',
			160 => 'sgmp-traps',
			161 => 'snmp',
			162 => 'snmptrap',
			163 => 'cmip-man',
			164 => 'cmip-agent',
			165 => 'xns-courier',
			166 => 's-net',
			167 => 'namp',
			168 => 'rsvd',
			169 => 'send',
			170 => 'print-srv',
			171 => 'multiplex',
			173 => 'xyplex-mux',
			174 => 'mailq',
			175 => 'vmnet',
			176 => 'genrad-mux',
			177 => 'xdmcp',
			178 => 'nextstep',
			179 => 'bgp',
			180 => 'ris',
			181 => 'unify',
			182 => 'audit',
			183 => 'ocbinder',
			184 => 'ocserver',
			185 => 'remote-kis',
			186 => 'kis',
			187 => 'aci',
			189 => 'qft',
			190 => 'gacp',
			191 => 'prospero',
			192 => 'osu-nms',
			193 => 'srmp',
			194 => 'irc',
			195 => 'dn6-nlm-aud',
			196 => 'dn6-smm-red',
			197 => 'dls',
			198 => 'dls-mon',
			199 => 'smux',
			200 => 'src',
			201 => 'at-rtmp',
			202 => 'at-nbp',
			203 => 'at-3',
			204 => 'at-echo',
			205 => 'at-5',
			206 => 'at-zis',
			207 => 'at-7',
			208 => 'at-8',
			209 => 'qmtp',
			210 => 'z39.50',
			212 => 'anet',
			213 => 'ipx',
			214 => 'vmpwscs',
			215 => 'softpc',
			217 => 'dbase',
			218 => 'mpp',
			219 => 'uarps',
			220 => 'imap3',
			221 => 'fln-spx',
			222 => 'rsh-spx',
			223 => 'cdc',
			242 => 'direct',
			243 => 'sur-meas',
			244 => 'inbusiness',
			245 => 'link',
			246 => 'dsp3270',
			247 => 'subntbcst_tftp',
			256 => 'rap',
			257 => 'set',
			259 => 'esro-gen',
			260 => 'openport',
			261 => 'nsiiops',
			266 => 'sst',
			267 => 'td-service',
			268 => 'td-replica',
			269 => 'manet',
			280 => 'http-mgmt',
			281 => 'personal-link',
			283 => 'rescap',
			284 => 'corerjd',
			286 => 'fxp',
			287 => 'k-block',
			309 => 'entrusttime',
			344 => 'pdap',
			345 => 'pawserv',
			346 => 'zserv',
			347 => 'fatserv',
			348 => 'csi-sgwp',
			349 => 'mftp',
			350 => 'matip-type-a',
			351 => 'matip-type-b',
			359 => 'nsrmp',
			371 => 'clearcase',
			372 => 'ulistproc',
			373 => 'legent-1',
			374 => 'legent-2',
			375 => 'hassle',
			376 => 'nip',
			377 => 'tnETOS',
			378 => 'dsETOS',
			379 => 'is99c',
			380 => 'is99s',
			381 => 'hp-collector',
			382 => 'hp-managed-node',
			383 => 'hp-alarm-mgr',
			384 => 'arns',
			385 => 'ibm-app',
			386 => 'asa',
			387 => 'aurp',
			388 => 'unidata-ldm',
			389 => 'ldap',
			390 => 'uis',
			391 => 'synotics-relay',
			392 => 'synotics-broker',
			393 => 'meta5',
			394 => 'embl-ndt',
			395 => 'netcp',
			396 => 'netware-ip',
			397 => 'mptn',
			398 => 'kryptolan',
			399 => 'iso-tsap-c2',
			400 => 'work-sol',
			401 => 'ups',
			402 => 'genie',
			403 => 'decap',
			404 => 'nced',
			405 => 'ncld',
			406 => 'imsp',
			407 => 'timbuktu',
			408 => 'prm-sm',
			409 => 'prm-nm',
			410 => 'decladebug',
			411 => 'rmt',
			412 => 'synoptics-trap',
			413 => 'smsp',
			414 => 'infoseek',
			415 => 'bnet',
			416 => 'silverplatter',
			417 => 'onmux',
			418 => 'hyper-g',
			419 => 'ariel1',
			420 => 'smpte',
			421 => 'ariel2',
			422 => 'ariel3',
			423 => 'opc-job-start',
			424 => 'opc-job-track',
			425 => 'icad-el',
			426 => 'smartsdp',
			427 => 'svrloc',
			428 => 'ocs_cmu',
			429 => 'ocs_amu',
			430 => 'utmpsd',
			431 => 'utmpcd',
			432 => 'iasd',
			433 => 'nnsp',
			434 => 'mobileip-agent',
			435 => 'mobilip-mn',
			436 => 'dna-cml',
			437 => 'comscm',
			438 => 'dsfgw',
			439 => 'dasp',
			440 => 'sgcp',
			441 => 'decvms-sysmgt',
			442 => 'cvc_hostd',
			443 => 'https',
			444 => 'snpp',
			445 => 'microsoft-ds',
			446 => 'ddm-rdb',
			447 => 'ddm-dfm',
			448 => 'ddm-ssl',
			449 => 'as-servermap',
			450 => 'tserver',
			451 => 'sfs-smp-net',
			453 => 'creativeserver',
			454 => 'contentserver',
			455 => 'creativepartnr',
			456 => 'macon-tcp',
			457 => 'scohelp',
			458 => 'appleqtc',
			459 => 'ampr-rcmd',
			460 => 'skronk',
			461 => 'datasurfsrv',
			462 => 'datasurfsrvsec',
			463 => 'alpes',
			464 => 'kpasswd',
			465 => 'urd',
			466 => 'digital-vrc',
			467 => 'mylex-mapd',
			468 => 'photuris',
			469 => 'rcp',
			470 => 'scx-proxy',
			471 => 'mondex',
			472 => 'ljk-login',
			473 => 'hybrid-pop',
			474 => 'tn-tl-w1',
			475 => 'tcpnethaspsrv',
			476 => 'tn-tl-fd1',
			477 => 'ss7ns',
			478 => 'spsc',
			479 => 'iafserver',
			480 => 'iafdbase',
			481 => 'ph',
			482 => 'bgs-nsi',
			483 => 'ulpnet',
			484 => 'integra-sme',
			485 => 'powerburst',
			486 => 'avian',
			487 => 'saft',
			488 => 'gss-http',
			489 => 'nest-protocol',
			490 => 'micom-pfs',
			491 => 'go-login',
			492 => 'ticf-1',
			493 => 'ticf-2',
			494 => 'pov-ray',
			495 => 'intecourier',
			496 => 'pim-rp-disc',
			497 => 'dantz',
			498 => 'siam',
			499 => 'iso-ill',
			500 => 'isakmp',
			501 => 'stmf',
			502 => 'asa-appl-proto',
			503 => 'intrinsa',
			504 => 'citadel',
			505 => 'mailbox-lm',
			506 => 'ohimsrv',
			507 => 'crs',
			508 => 'xvttp',
			509 => 'snare',
			510 => 'fcp',
			511 => 'passgo',
			512 => 'exec',
			514 => 'shell',
			515 => 'printer',
			516 => 'videotex',
			517 => 'talk',
			518 => 'ntalk',
			519 => 'utime',
			520 => 'efs',
			521 => 'ripng',
			522 => 'ulp',
			523 => 'ibm-db2',
			524 => 'ncp',
			526 => 'tempo',
			527 => 'stx',
			528 => 'custix',
			529 => 'irc-serv',
			530 => 'courier',
			531 => 'conference',
			532 => 'netnews',
			533 => 'netwall',
			535 => 'iiop',
			536 => 'opalis-rdv',
			537 => 'nmsp',
			538 => 'gdomap',
			539 => 'apertus-ldp',
			540 => 'uucp',
			541 => 'uucp-rlogin',
			542 => 'commerce',
			543 => 'klogin',
			545 => 'appleqtcsrvr',
			546 => 'dhcpv6-client',
			547 => 'dhcpv6-server',
			548 => 'afpovertcp',
			549 => 'idfp',
			550 => 'new-rwho',
			551 => 'cybercash',
			552 => 'devshr-nts',
			553 => 'pirp',
			554 => 'rtsp',
			555 => 'dsf',
			556 => 'remotefs',
			557 => 'openvms-sysipc',
			558 => 'sdnskmp',
			559 => 'teedtap',
			560 => 'rmonitor',
			561 => 'monitor',
			562 => 'chshell',
			563 => 'nntps',
			564 => '9pfs',
			565 => 'whoami',
			566 => 'streettalk',
			567 => 'banyan-rpc',
			568 => 'ms-shuttle',
			569 => 'ms-rome',
			570 => 'meter',
			571 => 'meter',
			572 => 'sonar',
			573 => 'banyan-vip',
			574 => 'ftp-agent',
			575 => 'vemmi',
			576 => 'ipcd',
			577 => 'vnas',
			578 => 'ipdd',
			580 => 'sntp-heartbeat',
			582 => 'scc-security',
			586 => 'password-chg',
			593 => 'http-rpc-epmap',
			596 => 'smsd',
			599 => 'acp',
			600 => 'ipcserver',
			601 => 'syslog-conn',
			602 => 'xmlrpc-beep',
			603 => 'idxp',
			604 => 'tunnel',
			605 => 'soap-beep',
			606 => 'urm',
			607 => 'nqs',
			608 => 'sift-uft',
			609 => 'npmp-trap',
			610 => 'npmp-local',
			611 => 'npmp-gui',
			620 => 'sco-websrvrmgr',
			634 => 'ginad',
			635 => 'rlzdbase',
			636 => 'ldaps',
			637 => 'lanserver',
			647 => 'dhcp-failover',
			648 => 'rrp',
			649 => 'cadview-3d',
			660 => 'mac-srvr-admin',
			661 => 'hap',
			662 => 'pftp',
			663 => 'purenoise',
			665 => 'sun-dr',
			666 => 'doom',
			667 => 'disclose',
			668 => 'mecomm',
			669 => 'meregister',
			670 => 'vacdsm-sws',
			671 => 'vacdsm-app',
			672 => 'vpps-qua',
			673 => 'cimplex',
			674 => 'acap',
			679 => 'mrm',
			682 => 'xfr',
			683 => 'corba-iiop',
			686 => 'hcp-wismar',
			688 => 'realm-rusd',
			689 => 'nmap',
			690 => 'vatp',
			693 => 'connendp',
			694 => 'ha-cluster',
			695 => 'ieee-mms-ssl',
			696 => 'rushd',
			697 => 'uuidgen',
			698 => 'olsr',
			699 => 'accessnetwork',
			700 => 'epp',
			701 => 'lmp',
			702 => 'iris-beep',
			704 => 'elcsd',
			705 => 'agentx',
			706 => 'silc',
			707 => 'borland-dsj',
			709 => 'entrust-kmsh',
			710 => 'entrust-ash',
			711 => 'cisco-tdp',
			712 => 'tbrpf',
			729 => 'netviewdm1',
			730 => 'netviewdm2',
			731 => 'netviewdm3',
			741 => 'netgw',
			742 => 'netrcs',
			744 => 'flexlm',
			747 => 'fujitsu-dev',
			748 => 'ris-cm',
			749 => 'kerberos-adm',
			751 => 'pump',
			752 => 'qrh',
			754 => 'tell',
			758 => 'nlogin',
			759 => 'con',
			760 => 'ns',
			761 => 'rxe',
			762 => 'quotad',
			763 => 'cycleserv',
			764 => 'omserv',
			765 => 'webster',
			767 => 'phonebook',
			769 => 'vid',
			770 => 'cadlock',
			772 => 'cycleserv2',
			773 => 'submit',
			774 => 'rpasswd',
			775 => 'entomb',
			776 => 'wpages',
			780 => 'wpgs',
			830 => 'netconf-ssh',
			831 => 'netconf-beep',
			832 => 'netconfsoaphttp',
			833 => 'netconfsoapbeep',
			847 => 'dhcp-failover2',
			848 => 'gdoi',
			860 => 'iscsi',
			861 => 'owamp-control',
			873 => 'rsync',
			886 => 'iclcnet-locate',
			887 => 'iclcnet_svinfo',
			888 => 'cddbp',
			900 => 'omginitialrefs',
			901 => 'smpnameres',
			902 => 'ideafarm-chat',
			903 => 'ideafarm-catch',
			910 => 'kink',
			911 => 'xact-backup',
			912 => 'apex-mesh',
			913 => 'apex-edge',
			995 => 'pop3s',
			996 => 'vsinet',

			// extra
			5060 => 'sip'
		);
		$this->udp = Array(
			// basic ports 0 - 1000
			1 => 'tcpmux',
			2 => 'compressnet',
			3 => 'compressnet',
			5 => 'rje',
			7 => 'echo',
			9 => 'discard',
			11 => 'systat',
			13 => 'daytime',
			17 => 'qotd',
			18 => 'msp',
			19 => 'chargen',
			20 => 'ftp-data',
			21 => 'ftp',
			22 => 'ssh',
			23 => 'telnet',
			25 => 'smtp',
			27 => 'nsw-fe',
			29 => 'msg-icp',
			31 => 'msg-auth',
			33 => 'dsp',
			37 => 'time',
			38 => 'rap',
			39 => 'rlp',
			41 => 'graphics',
			42 => 'nameserver',
			43 => 'nicname',
			44 => 'mpm-flags',
			45 => 'mpm',
			46 => 'mpm-snd',
			47 => 'ni-ftp',
			48 => 'auditd',
			49 => 'tacacs',
			50 => 're-mail-ck',
			51 => 'la-maint',
			52 => 'xns-time',
			53 => 'domain',
			54 => 'xns-ch',
			55 => 'isi-gl',
			56 => 'xns-auth',
			58 => 'xns-mail',
			61 => 'ni-mail',
			62 => 'acas',
			63 => 'whois++',
			64 => 'covia',
			65 => 'tacacs-ds',
			66 => 'sql*net',
			67 => 'bootps',
			68 => 'bootpc',
			69 => 'tftp',
			70 => 'gopher',
			71 => 'netrjs-1',
			72 => 'netrjs-2',
			73 => 'netrjs-3',
			74 => 'netrjs-4',
			76 => 'deos',
			78 => 'vettcp',
			79 => 'finger',
			80 => 'www-http',
			82 => 'xfer',
			83 => 'mit-ml-dev',
			84 => 'ctf',
			85 => 'mit-ml-dev',
			86 => 'mfcobol',
			88 => 'kerberos',
			89 => 'su-mit-tg',
			90 => 'dnsix',
			91 => 'mit-dov',
			92 => 'npp',
			93 => 'dcp',
			94 => 'objcall',
			95 => 'supdup',
			96 => 'dixie',
			97 => 'swift-rvf',
			98 => 'tacnews',
			99 => 'metagram',
			101 => 'hostname',
			102 => 'iso-tsap',
			103 => 'gppitnp',
			104 => 'acr-nema',
			105 => 'csnet-ns',
			106 => '3com-tsmux',
			107 => 'rtelnet',
			108 => 'snagas',
			109 => 'pop2',
			110 => 'pop3',
			111 => 'sunrpc',
			112 => 'mcidas',
			113 => 'auth',
			115 => 'sftp',
			116 => 'ansanotify',
			117 => 'uucp-path',
			118 => 'sqlserv',
			119 => 'nntp',
			120 => 'cfdptkt',
			121 => 'erpc',
			122 => 'smakynet',
			123 => 'ntp',
			124 => 'ansatrader',
			125 => 'locus-map',
			127 => 'locus-con',
			128 => 'gss-xlicen',
			129 => 'pwdgen',
			130 => 'cisco-fna',
			131 => 'cisco-tna',
			132 => 'cisco-sys',
			133 => 'statsrv',
			134 => 'ingres-net',
			135 => 'epmap',
			136 => 'profile',
			137 => 'netbios-ns',
			138 => 'netbios-dgm',
			139 => 'netbios-ssn',
			140 => 'emfis-data',
			141 => 'emfis-cntl',
			142 => 'bl-idm',
			143 => 'imap',
			145 => 'uaac',
			146 => 'iso-tp0',
			147 => 'iso-ip',
			148 => 'jargon',
			149 => 'aed-512',
			150 => 'sql-net',
			151 => 'hems',
			152 => 'bftp',
			153 => 'sgmp',
			154 => 'netsc-prod',
			155 => 'netsc-dev',
			156 => 'sqlsrv',
			157 => 'knet-cmp',
			158 => 'pcmail-srv',
			159 => 'nss-routing',
			160 => 'sgmp-traps',
			161 => 'snmp',
			162 => 'snmptrap',
			163 => 'cmip-man',
			164 => 'cmip-agent',
			165 => 'xns-courier',
			166 => 's-net',
			167 => 'namp',
			168 => 'rsvd',
			169 => 'send',
			170 => 'print-srv',
			171 => 'multiplex',
			173 => 'xyplex-mux',
			174 => 'mailq',
			175 => 'vmnet',
			176 => 'genrad-mux',
			177 => 'xdmcp',
			178 => 'nextstep',
			179 => 'bgp',
			180 => 'ris',
			181 => 'unify',
			182 => 'audit',
			183 => 'ocbinder',
			184 => 'ocserver',
			185 => 'remote-kis',
			186 => 'kis',
			187 => 'aci',
			189 => 'qft',
			190 => 'gacp',
			191 => 'prospero',
			192 => 'osu-nms',
			193 => 'srmp',
			194 => 'irc',
			195 => 'dn6-nlm-aud',
			196 => 'dn6-smm-red',
			197 => 'dls',
			198 => 'dls-mon',
			199 => 'smux',
			200 => 'src',
			201 => 'at-rtmp',
			202 => 'at-nbp',
			203 => 'at-3',
			204 => 'at-echo',
			205 => 'at-5',
			206 => 'at-zis',
			207 => 'at-7',
			208 => 'at-8',
			209 => 'qmtp',
			210 => 'z39.50',
			212 => 'anet',
			213 => 'ipx',
			214 => 'vmpwscs',
			215 => 'softpc',
			217 => 'dbase',
			218 => 'mpp',
			219 => 'uarps',
			220 => 'imap3',
			221 => 'fln-spx',
			222 => 'rsh-spx',
			223 => 'cdc',
			242 => 'direct',
			243 => 'sur-meas',
			244 => 'inbusiness',
			245 => 'link',
			246 => 'dsp3270',
			247 => 'subntbcst_tftp',
			256 => 'rap',
			257 => 'set',
			259 => 'esro-gen',
			260 => 'openport',
			266 => 'sst',
			267 => 'td-service',
			268 => 'td-replica',
			269 => 'manet',
			280 => 'http-mgmt',
			283 => 'rescap',
			284 => 'corerjd',
			286 => 'fxp',
			287 => 'k-block',
			309 => 'entrusttime',
			310 => 'bhmds',
			344 => 'pdap',
			345 => 'pawserv',
			346 => 'zserv',
			347 => 'fatserv',
			348 => 'csi-sgwp',
			349 => 'mftp',
			351 => 'matip-type-b',
			359 => 'nsrmp',
			371 => 'clearcase',
			372 => 'ulistproc',
			373 => 'legent-1',
			374 => 'legent-2',
			375 => 'hassle',
			376 => 'nip',
			377 => 'tnETOS',
			378 => 'dsETOS',
			379 => 'is99c',
			380 => 'is99s',
			381 => 'hp-collector',
			382 => 'hp-managed-node',
			383 => 'hp-alarm-mgr',
			384 => 'arns',
			385 => 'ibm-app',
			386 => 'asa',
			387 => 'aurp',
			388 => 'unidata-ldm',
			389 => 'ldap',
			390 => 'uis',
			391 => 'synotics-relay',
			392 => 'synotics-broker',
			393 => 'meta5',
			394 => 'embl-ndt',
			395 => 'netcp',
			396 => 'netware-ip',
			397 => 'mptn',
			398 => 'kryptolan',
			399 => 'iso-tsap-c2',
			400 => 'work-sol',
			401 => 'ups',
			402 => 'genie',
			403 => 'decap',
			404 => 'nced',
			405 => 'ncld',
			406 => 'imsp',
			407 => 'timbuktu',
			408 => 'prm-sm',
			409 => 'prm-nm',
			410 => 'decladebug',
			411 => 'rmt',
			412 => 'synoptics-trap',
			413 => 'smsp',
			414 => 'infoseek',
			415 => 'bnet',
			416 => 'silverplatter',
			417 => 'onmux',
			418 => 'hyper-g',
			419 => 'ariel1',
			420 => 'smpte',
			421 => 'ariel2',
			422 => 'ariel3',
			423 => 'opc-job-start',
			424 => 'opc-job-track',
			425 => 'icad-el',
			426 => 'smartsdp',
			427 => 'svrloc',
			428 => 'ocs_cmu',
			429 => 'ocs_amu',
			430 => 'utmpsd',
			431 => 'utmpcd',
			432 => 'iasd',
			433 => 'nnsp',
			434 => 'mobileip-agent',
			435 => 'mobilip-mn',
			436 => 'dna-cml',
			437 => 'comscm',
			438 => 'dsfgw',
			439 => 'dasp',
			440 => 'sgcp',
			441 => 'decvms-sysmgt',
			442 => 'cvc_hostd',
			443 => 'https',
			444 => 'snpp',
			445 => 'microsoft-ds',
			446 => 'ddm-rdb',
			447 => 'ddm-dfm',
			448 => 'ddm-ssl',
			449 => 'as-servermap',
			450 => 'tserver',
			451 => 'sfs-smp-net',
			453 => 'creativeserver',
			454 => 'contentserver',
			455 => 'creativepartnr',
			456 => 'macon-udp',
			457 => 'scohelp',
			458 => 'appleqtc',
			459 => 'ampr-rcmd',
			460 => 'skronk',
			461 => 'datasurfsrv',
			462 => 'datasurfsrvsec',
			463 => 'alpes',
			464 => 'kpasswd',
			465 => 'igmpv3lite',
			466 => 'digital-vrc',
			467 => 'mylex-mapd',
			468 => 'photuris',
			469 => 'rcp',
			470 => 'scx-proxy',
			471 => 'mondex',
			472 => 'ljk-login',
			473 => 'hybrid-pop',
			474 => 'tn-tl-w2',
			475 => 'tcpnethaspsrv',
			476 => 'tn-tl-fd1',
			477 => 'ss7ns',
			478 => 'spsc',
			479 => 'iafserver',
			480 => 'iafdbase',
			481 => 'ph',
			482 => 'bgs-nsi',
			483 => 'ulpnet',
			484 => 'integra-sme',
			485 => 'powerburst',
			486 => 'avian',
			487 => 'saft',
			488 => 'gss-http',
			489 => 'nest-protocol',
			490 => 'micom-pfs',
			491 => 'go-login',
			492 => 'ticf-1',
			493 => 'ticf-2',
			494 => 'pov-ray',
			495 => 'intecourier',
			496 => 'pim-rp-disc',
			497 => 'dantz',
			498 => 'siam',
			499 => 'iso-ill',
			500 => 'isakmp',
			501 => 'stmf',
			502 => 'asa-appl-proto',
			503 => 'intrinsa',
			504 => 'citadel',
			505 => 'mailbox-lm',
			506 => 'ohimsrv',
			507 => 'crs',
			508 => 'xvttp',
			509 => 'snare',
			510 => 'fcp',
			511 => 'passgo',
			512 => 'biff',
			514 => 'syslog',
			515 => 'printer',
			516 => 'videotex',
			517 => 'talk',
			518 => 'ntalk',
			519 => 'utime',
			520 => 'router',
			521 => 'ripng',
			522 => 'ulp',
			523 => 'ibm-db2',
			524 => 'ncp',
			525 => 'timed',
			526 => 'tempo',
			527 => 'stx',
			528 => 'custix',
			529 => 'irc-serv',
			530 => 'courier',
			531 => 'conference',
			532 => 'netnews',
			533 => 'netwall',
			535 => 'iiop',
			536 => 'opalis-rdv',
			537 => 'nmsp',
			538 => 'gdomap',
			539 => 'apertus-ldp',
			540 => 'uucp',
			541 => 'uucp-rlogin',
			542 => 'commerce',
			543 => 'klogin',
			545 => 'appleqtcsrvr',
			546 => 'dhcpv6-client',
			547 => 'dhcpv6-server',
			548 => 'afpovertcp',
			549 => 'idfp',
			550 => 'new-rwho',
			551 => 'cybercash',
			552 => 'devshr-nts',
			553 => 'pirp',
			554 => 'rtsp',
			555 => 'dsf',
			556 => 'remotefs',
			557 => 'openvms-sysipc',
			558 => 'sdnskmp',
			559 => 'teedtap',
			560 => 'rmonitor',
			561 => 'monitor',
			562 => 'chshell',
			563 => 'nntps',
			564 => '9pfs',
			565 => 'whoami',
			566 => 'streettalk',
			567 => 'banyan-rpc',
			568 => 'ms-shuttle',
			569 => 'ms-rome',
			570 => 'meter',
			571 => 'meter',
			572 => 'sonar',
			573 => 'banyan-vip',
			574 => 'ftp-agent',
			575 => 'vemmi',
			576 => 'ipcd',
			577 => 'vnas',
			578 => 'ipdd',
			580 => 'sntp-heartbeat',
			582 => 'scc-security',
			593 => 'http-rpc-epmap',
			596 => 'smsd',
			599 => 'acp',
			600 => 'ipcserver',
			601 => 'syslog-conn',
			602 => 'xmlrpc-beep',
			603 => 'idxp',
			604 => 'tunnel',
			605 => 'soap-beep',
			606 => 'urm',
			607 => 'nqs',
			608 => 'sift-uft',
			609 => 'npmp-trap',
			610 => 'npmp-local',
			611 => 'npmp-gui',
			614 => 'sshell',
			620 => 'sco-websrvrmgr',
			623 => 'asf-rmcp',
			634 => 'ginad',
			635 => 'rlzdbase',
			636 => 'ldaps',
			637 => 'lanserver',
			647 => 'dhcp-failover',
			648 => 'rrp',
			649 => 'cadview-3d',
			660 => 'mac-srvr-admin',
			661 => 'hap',
			662 => 'pftp',
			663 => 'purenoise',
			664 => 'asf-secure-rmcp',
			665 => 'sun-dr',
			666 => 'doom',
			667 => 'disclose',
			668 => 'mecomm',
			669 => 'meregister',
			670 => 'vacdsm-sws',
			671 => 'vacdsm-app',
			672 => 'vpps-qua',
			673 => 'cimplex',
			674 => 'acap',
			679 => 'mrm',
			682 => 'xfr',
			683 => 'corba-iiop',
			686 => 'hcp-wismar',
			688 => 'realm-rusd',
			689 => 'nmap',
			690 => 'vatp',
			693 => 'connendp',
			694 => 'ha-cluster',
			695 => 'ieee-mms-ssl',
			696 => 'rushd',
			697 => 'uuidgen',
			698 => 'olsr',
			699 => 'accessnetwork',
			700 => 'epp',
			701 => 'lmp',
			702 => 'iris-beep',
			704 => 'elcsd',
			705 => 'agentx',
			706 => 'silc',
			707 => 'borland-dsj',
			709 => 'entrust-kmsh',
			710 => 'entrust-ash',
			711 => 'cisco-tdp',
			712 => 'tbrpf',
			729 => 'netviewdm1',
			730 => 'netviewdm2',
			731 => 'netviewdm3',
			741 => 'netgw',
			742 => 'netrcs',
			744 => 'flexlm',
			747 => 'fujitsu-dev',
			748 => 'ris-cm',
			749 => 'kerberos-adm',
			750 => 'kerberos-iv',
			751 => 'pump',
			752 => 'qrh',
			753 => 'rrh',
			754 => 'tell',
			758 => 'nlogin',
			759 => 'con',
			760 => 'ns',
			761 => 'rxe',
			762 => 'quotad',
			763 => 'cycleserv',
			764 => 'omserv',
			765 => 'webster',
			767 => 'phonebook',
			769 => 'vid',
			770 => 'cadlock',
			772 => 'cycleserv2',
			773 => 'notify',
			774 => 'acmaint_dbd',
			776 => 'wpages',
			780 => 'wpgs',
			829 => 'pkix-3-ca-ra',
			830 => 'netconf-ssh',
			831 => 'netconf-beep',
			832 => 'netconfsoaphttp',
			833 => 'netconfsoapbeep',
			847 => 'dhcp-failover2',
			848 => 'gdoi',
			860 => 'iscsi',
			861 => 'owamp-control',
			873 => 'rsync',
			886 => 'iclcnet-locate',
			887 => 'iclcnet_svinfo',
			888 => 'accessbuilder',
			900 => 'omginitialrefs',
			901 => 'smpnameres',
			902 => 'ideafarm-chat',
			903 => 'ideafarm-catch',
			910 => 'kink',
			911 => 'xact-backup',
			912 => 'apex-mesh',
			913 => 'apex-edge',
			995 => 'pop3s',
			996 => 'vsinet'
		);
	}


	function tcp($port_name){
		if(isset($this->tcp[$port_name]))
			return $this->tcp[$port_name];
		else
			return null;
	}
	function udp($port_name){
		if(isset($this->udp[$port_name]))
			return $this->tcp[$port_name];
		else
			return null;
	}
}

?>
