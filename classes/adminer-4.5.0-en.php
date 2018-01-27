<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.5.0
*/error_reporting(6135);$Rc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Rc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$si=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($si)$$X=$si;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0Ñ\0\n @\0¥CÑË\"\0`E„Q∏‡ˇá?¿tvM'îJd¡d\\åb0\0ƒ\"ô¿f”à§Ós5õœÁ—AùXPaJì0Ñ•ë8Ñ#RäT©ëz`à#.©«cÌX√˛»Ä?¿-\0°Im?†.´M∂Ä\0»Ø(Ãâ˝¿/(%å\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ÃáìŸåﬁl7úáB1Ñ4vb0òÕfsëºÍn2BÃ—±Ÿòﬁn:á#(ºb.\rDc)»»a7EÑë§¬l¶√±îËi1Ãésò¥Á-4ôáf”	»Œi7Ü≥ÈÜÑéåF√©îvt2ûÇ”!ñr0œ„„£t~ΩUç'3MÄ…WÑB¶'cÕP¬:6T\rc£Aæzr_ÓWK∂\r-ºVNFS%~√c≤ŸÌ&õ\\^ r¿õ≠ÊuÇ≈é√ûÙŸã4'7k∂ËØ¬„Q‘Êhö'g\rFB\ryT7SS•P–1=«§cIË :çdî∫m>£S8LÜJÅút.M¢èä	œã`'C°º€–889§» éQÿ˝åÓ2ç#8–ê≠£íò6m˙≤Üjà¢h´<Öå∞´å9/ÎòÁ:êJÍ) Ç§\0d>!\0ZáàvÏªnÎæºo(⁄Û•…k‘7Ωès‡˘>åÓÜ!–R\"*nS˝\0@P\"¡Ëí(ã#[∂•£@gπo¸≠ízn˛9k§8Ünöô™1¥I*àÙ=Õn≤§™è∏Ë0´c(ˆ;æ√†–Ë!∞¸Î*cÏ˜>Œé¨E7DÒLJ©†1»‰∑„`¬8(·’3M®Û\"«39È?EÅe=“¨¸~˘æ≤Ù≈Ó”∏7;…Cƒ¡õÕE\rd!)¬a*Ø5ajo\0™#` 38∂\0 Ì]ìeåÍà∆2§	mk◊¯e]Ö¡≠AZs’StZïZ!)BR®G+Œ#Jv2(„†ˆÓcÖ4<∏#sBØ0È˙Ç6YL\r≤=£Öø[◊73∆<‘:£äbxîﬂJ=	m_ æœ≈f™lŸ◊tãÂI™ÉH⁄3èx*Äõ·6`t6æ√%ùU‘LÚeŸÇò<¥\0…AQ<P<:ö#u/§:T\\>†À-ÖxJàÕçQH\nj°L+j›zÛ∞7£ï´`›é≥\nkÉÉ'ìN”vX>ÓC-TÀ©∂ú∏êÜ4*Lî%Cj>7ﬂ®äﬁ®®Ë-éÉ»‡2áπp¬3å¢Óbñ‡Ÿ•∞®Áﬁv>Òúp\\≤å√Í6_Hà€ªCxÔWÜ1Oj˘AêwH7q£†\\…é#®“…Æ˝rå4v=ünÚv—Oâñ˜ù6ágWpﬂ◊˘'e⁄yØóü›˜°pÓ0è#z6=Ÿ÷Äu°∫\\_ƒ.¨‚£>H<rﬁ+cz%}Æw˜»VàA*Ä∏√óB>dR:\rÍâ\rúl\r’9¥j43ï∏qm\rPN	ÿA„˛`≈˚¡µxo√®m\r¡Ï8?‘¸√ı,	E∑,UËåÇ‚ÍÏÚü%zÆ õ¨5ıíàvç√ÏvE†86H0[CºLmj®2D®¢¶¡`pä—1?¡R¿Qé €MÊ≈xöûbÈu±Å≈&ò‚I-\"° ßû€V\"ÚÕpG\"WÜ±Ëé\$¶äìJ\$6ÜPÊP‹ƒu\"àT7CHÚ÷ñ{˜è∆ HŸÂ”Ù8FKïr#D@›YKKcp1ºàËëàY\r·áDí^X#™ñÄ¬Y¿5π\neÃ≤“ˆ\$Ü\"†SH\$∞{‡∏Å.©%»XF≥Ji@8L•if\riÒgBstDå§NÇSzmM¿À9'zmã\rxµ•ÈI¸çé•–û-È©–7:q\$3p«ÕQóf¨,ö§ÿ°Hb2]Ö\nÄ‡∑'Ãπ?P∆mC÷â•rI˘£4É¢XA›Pn®ˆÖ≈iCxpÖL£¨È˛ü‘\nÉDÙÇë™HÈ4.Aî;∑Úå‰Vq¡Of1¿2\"O…Ì>K…4≠s+CòqSFL´SPr â@ÄÙ’\"ÊüS*ÎLèµLÇÙK‰´EE±\n∆÷k)¿ôjíò4u\r©I7A±íÜ0Íè£a7pÏπÄÁ!sÚAò4áÉ(y—ÈÔ*o•®£fåÅ™.≠ÿ2•Z«û[ VGÓ\$ö◊Í¨^çn&1Eô) Ä-£\r%˜ZPﬁ»≤˙àQR#xZc,SÙ ÔÿØ“îÔl‘H.!i√78ÖeÖyr6ÑXãÄZÓ\\ÜlYB)\$·(ó\nì	•I\\Sx∏—Ω–*up´˚ß/¡\0pÄçE¨Îx 4<åUGvxéèYÌ=ˆÖXüÄ«Å •Ùú–L¿æÇÊ®ÍœÑò\$2Cˆc√êf!Œ\nùµπÇHA÷wŒ˙»Ë”Ìfâjl·å4ˆÈæ ∂ÂB‘bL	ñ\nO¥∞Ï¬ª7!¿# Àtê7DEz⁄&≤◊‚Óü&Tâ•Râji\\]g„v!ç√Üq…¨ÚCd Ñk´ÈÄì lô—≠ÓUP20ÂBq=´å8™3>˚Ø!í»∏Ÿuı+-è‰¬ÃmDÛ03s\"≤˜Ü˝£{πxë*+E≠0>Ç3è.`Qñ,Eê÷ñà^òMî˜¬5	e‘]+_ï>ü=Ã´•CúŸ)ô7€†\rüuø Ù8ùô≤z¡kÜ@¥€#™ZYíq≤ê·à5ó]àQ‘æ«ü˙Ä∑Ç=bnäbºƒ™±éê¨êèòiû°ÀEù‰Jëu~∞e√k˝ußÓÕƒ÷»0´√'Ãòn[wﬁƒÂåÛÇk€%›˜,›¢ΩgˆÚ)¥Là˝Ë‡W≤eôií‘≥à>Õ‹>){®Pt rÅ∞Ñ1£—Ua ñ\$Ú.I|ùˇ#Z≥örÂy&˘Ø2ì≤:H'Î∏›ì{*‰<Î€ó—óÆ;P¶Œ87Ù>IêèÍ‹∑Wı§≤ûÄv≤2p7{'Ù.[ÃÅk]9ª8]clÛı¸d˙Gï7~c…uÖƒ›õ¶æ—e∫ˇ\$tÆ˘ÒæWœ›ovÈO∞Üµ>ﬁ~2†gÁ=>Í^é˙ª?JQ!FùÕÍM˘!0>‡°°È¬‰∂⁄-1@‡4∞R˚å†∞˛¶È_ï¥¯sOlê˙,c•r`»∑?§uΩ)î…É0‡eØŸ∫ã¬\"∆€ÏÑ¸⁄N√õ; mê>≥ß+ŒÂaÌü∑˝C\"u4Ÿl∫Wæ˙ø?±Êˇ§˛œu°˜ Bm|IÆE¯\n‚˘˙¯Bøˆ¶	˜=KZkozÕO†¸œ¶ˇËêãe6úK]\0Âäêd†ÓµHÿµ§ƒA÷");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("\näÖB9îË 3NG89îÿe6ôM–s‰@sáLgCy» '#	∂.t9M∆x¯ÄÄrÉNF· ®M&aÒú|^\n3M—≥Iæhq9ä#¯‹tR =ÇÅ3§ hd7òŒ≥√†∏‚u2úè%8Õ4ÂJ≤«Bëÿ(˙\nÄ@†êa∞√FkÇ¨^”ñ»drY<¶WÅëI\$≈π¥‚uâ¢!îÃa:õá1s)Y≠‰p5J¥÷o9ùËÖS˙\rÈE£úÕñäe®X 1—éÜS¡“üQù§wìfpz §vë≠∂„uºÉüô˙’rŸR“L¯á2‹8Ê.á ŒÜÅ\0¥@1.€m˜a68ôûr˚KÊ`\$ú\$3ñ?lL∆µ†Ë—¶.–ú7≤¢`“Ü' Ñ¢(Œ@ÊÂ?3n‹¢nÉ~ÏA)§8›∑™Ú¿±,ç™: æ.ZÃÎΩh\n)D!\0¬ÑBm|*1æbT3°	†Ó4ºlË–2Ñs°C;B˙±p◊6ã“Ã™ªMl)!Hè ‡ò#êÏ2åí4À—“hƒµÔÄP3\r–˚Ç·§c;å#íH<Ö√‡8\rÉ»P73#co<…ÏÿR6CH∆2ÖãÆ©∆≥k`µ1.&ì•A–°C«—rhÁKèØR·•AJr˚q«ÚA!»ØêÑ°h;¯à∑cîl7M5Úi_I2]Ær≥	M(÷íM,Ö“€KjL,∆2Ã≥=í4Mm\\%*B≥Ä“¯O£<Á:™\nìÖcO3‹˚?‘t%\rD>5LùhRÓÕC”aDÛO^¢ÿ`…∏Û ⁄”ˆÿ›|‘µ8ÁUx}Z∑UÎêÇ9écHŒö8Cb¿Œ√êﬁìczeI≥£{;<†÷∞@'åCSôõg“76`ê®⁄4è	UMöçæ[óå≥∞Ãé”óò@5å®≤TãÂ√ï'Oö@∑™8f±¶k˙´“©-Òé<2M:Ç`6çÛ8@!äbõpªd¥«´ô≥˝Ê¬ÿƒ7ç„`ª†]	£·bà{¬íáC|púíå≠∫\$0åH|Ï4å‘‚O!¡p«…rÅè–Ùk∏Á…¢!raB4òQ‚(88P/Ç‡πUÑ·\0Wªı]dë·˜]Ê>ÅHN∂·8Hy˛<7sx@ÑÉ·ı9å^Ôüçcè`@*\r„8œÌ–x“1\r1Ë<Ô…G\0ê`KÁC√\n°>aƒ+b8˚àx(\r!ë;5\"Èê≥πo|@µ.Í!Ç\0¢<WJN8'\\ç∞â<∏	ﬁÂÑP, ÜÁŒàôó8°ïW>¢»∞ãmÄ&DÁ÷C+˘?ÏŸD–ƒXbπ\r·¡7\nõ°Ï?Ré©ë„nyUk≈;¨h∞n‡ÇJ‡Ä\"vßX|_™@ÉFXœÅpgç±ôJ˜á\"“ó+T»∫'	†ÑTdoXÉ≤ÚÌ»R‡∞R5CU`ãú\"≈i?C¿ÇJX…úÖ•Tï€˘áìÁı˝∞@√π4\n°H&¬Ôe,î®\0÷4I\$C0yít£â(Lô∑&J)òµE‡p\rÃ>à‰0…ÇTXB¸úd%É\0Nm‘≥jNp≈\$Éè‘k¢&—æs7§/3°÷á6µ!tÅ¿9É†^√º˘P3:M‚:¡|“6\0ºÀÛ#\"ﬁµ\"l>vF∂RÂ2´„É\nC›l:I§®\$VD=¢ÛuH6T|UÃ!\r¡æBï*§π…2\$XB\rÕÂ-ùtb5ê¿ÛLí=§/tÇ‡d\rHÖ:säq!¨âPÉÄo!Å5p!x‰0&Wd®¨yˆ*g\"h8Ü\"¬ß©}>¶Aëª-Jä0eß@&f÷\nƒ+!ªìN‰à≤\0√¶∫µärª©ÍvÁ´º˛%!ù´¬ªH'úıûÛÊØLŸ2XlPgzßàE–AÉ†c<áÄñ¶ÅË(¿¨Ç\\o’Ñè±|0©{;R¡E†¥VàLò•3'‰–†SR\n[†–œDÿ∂÷t0Ü†¬D√êÅŒìòòn.6ÎqN[¿\\µâ∂í…çBÊ\"W.Ôï& [Ô}€Äm5Ù\0íëÆÀœ_\$H25»\$\nßà¡éû“Ë…Kßs®eÀLcçI\0ÛÈN±Å·*‘:Â¥v•¥\\Í€c‡Xqæãñ‡‡»ÿmS@IYÒO?‹]Ç!£h^G&à!ã¢Zn;òªÜLdeC√gb'hbî–†gë)XqpÏpëP™<9á4Á\"i{ô+btê˘s\"\$7“8πKπ%\\ÈzáÅ†ª´Lªó»N>k©ÏÙiÁ)=¡ÿÑú]ñ1º[ÏÇOÁ˙‡‹,OSh<*W¯913‹\r8d¬0ÜX∆Ì≥∏·y‹Ωl˜!H\$∞ ú4Œß˙Lqª!ö_X◊˜çÅQÓ&R≥+V“.wyÉ=WÙíÂ3˛@—&Shc2pÙRd¥¯|ö7º#Ée´â◊då»ÈU‹‰ògN¡ﬁˇ§ç/V*–!“ö[pió@|ù8l™pâ†≥+}_ÈÕÑõÑé⁄¢i|+G LeÜ√¶Å€é(ã¸FÉ^ó”KîA\rxDˆˆóz\$¢u8≤¬„]R¶OF—q—`]Fˇ‡*^‹:ûâ5Y8ÄªóÜ–∂	—Ë'2|ÀóﬁmŒè:ü≈\rp~'ª7ÀƒêŒŒ36B9ÚÅ>(ÿŒNπ‘ÉeÓÁº√õÛêª–›í‚*±Ù´\0å˝OîEàÎ7‡≤”èí!‡ÑπaòW˜›ñ!“HW6\\D‡PdC}ˇ0@t\r¶Œõy}·5éÖmÛ>Gª©^è(D‰_ß^]ùê/Å˚R {ylº–^ﬁã›éﬁ…Á©xº à'ÇoZQw<Ù€\r‹!=úôœÁ(ﬁ\\\\:oh◊Û>u∂ÂÌD·Üò!E†ÆÇø Õû\$œÜ\r Æ÷E∆!∏D√XpÓúîƒ-«Î+Øﬂ/y∫√®bha“ÕﬁÔ‡˚Ä\\≠Ñ.s,|8Ô4¬O\$öÀñæ⁄Ω¶‘ n‡lÍl‰>´>åÀDW+¨MéœÃ‘n0&,¡‡ò‡Ï8·NˆT.}.\"œ¶öãènÓH bŒhÍ0*3f˙`Põi™¸O¥/Cæ</¿\rƒ¸ä–s•rçb\\\0Ë“Ó‰o‹–\\+\r†ÎÓJ‡\nMCø.aÊ ·ŒU	¿⁄˝†∫∂À‡m,\nnnUc‰e@Ó3ÜÆÜª\0áàd\0zPº{  L<\\Àπ¢Ö;áE¿ÇåÒ∞.¨2%/Px˚¨Üg\0êÇ˚Ô¬Ç∞å¸ÀpÁvw•Wp~yã[	mgÃtH2i´jBP¯§.w.86ÒY\nÎóCÜ\rPz\0‘˚Qf˚√≈ëÅ´9 Âëf`‘ÎÂÄ!ã¸~†»ÊÇK˛Åê¡∞\rG‘\n¢á\r¶B%gµÌòƒK∏Ê±¡œ‚câBí˜H(˜¢§Â.LM#éÜB0aƒ‚\$ﬂbÊ Ó‘,,ﬂ—Ó>e°ÎB\\âMb%©`ÔÆ‡œπ>ßk'¯F≤#—\0ñŒ†ÊXM5\"›–∂¢Ãv—\"vOn∂\r´^⁄‡Á&°o´Ò+!3∞ä¸´8∑]Põ\n–£\nm—'PÆtNTM\r%\0»¸ê¡\r(`4≤ù R9ÜÓÏL}l	¶\\#\n¬5R\$0á‡ Ä#&ÂÊ`Ï.1/nä‚  ÆÁ\"ÏDÌ-Ä÷ÉrÀ¶*ö´®‚ “ÆVÃ≤é@È0d‹S†\\AÓ¸>%#µ%qﬁ8Û“§ö Àd\"e.‹áÍ‹Õ‘n2‹Ok–ê›mæòëÄ¯ ¯˛@¯ÕM∏3K.ZﬁOËI\0BÑ0ºp`ˇ´:…`›p3z\r‡qÆƒtD{\$≤Á∑/qÚær¢ÎOpt/†Aår˛ê'>*êÊÊ%\0ÿrˆB¨‘!Ä¿8ÑqYëÃ≥¶:∞ÅÌ„≈Él?±è|ó“‚›Úï „è;ÕÂ*≥¨Ï„(ÁB(“çt1˙‡˛}&§o\0È\$`»-®l\\ÄÃÄ[<‰DÂS}\$+>3#^PÑê¡É`[,+¿Î,\nÔE»3í(·,€%m8Ûì.32™];∞i(À9>t\"Â´t<Äñj≤é\0CC5/ÇÍ.Ù3)q´œÌHg)\nèÃjRúÉt•K)LqÔ@p¥M' %¿∂œ–˝ë‡9MX˚ã˘é2bŒ7èk¿ÂJR£J‘5xX¿”'¥˛Rwr{/™˚è‘˚êÕo„\0¥ÑèKÇ\"∑ãqƒ~ªœÂMÇ84%p∆˛KŸ8´ÅU!SπJè‰Ú#èL‘”TëS¬Vª¿I∆\rq∂ΩÔ¸∑¥¸î’2B¡X3ãê“;dê≥ïmTu3Fß—‡@ﬂ§9Õ~Ì•è!ƒ0I@ñqŒÑ2¢IEífO€iÄ˘≥¥f*∞\r¿ƒÀ¢€#Ì¥ÔÒo6Í@Òq›>œr˜gáï[;Ú	˙ﬁé_èÄ¸¿;\rÈ]√+1`‹ìU≤Ñ M^UËÆ`˚Y÷t\"Ub√NÇ>ëºÏ ∏I5ﬁ™&BM∆l˘Õ®I\"∂Ìr‹◊¿ \n\n§HÉ`‚QX÷X˙Ê3á¥‹ÛÓ[Á„+‡¶~d}WoÕeí°B'˚eí\0Êd3≈òÿMàM\"DéQœkµÏV÷∂≥ïBÄ–&\0Ã6ˆ¬ss∫AÁ&	¿Qm2èn†+(ÕE∂ 2÷Il«≠mÍˇ7Cé/(‡Ml+–Sñ¬<£Œ)ËTùQΩ\r`à≠¢Ïj√wØ∂≥‚\$≤ª+‡À,-%–F⁄ÕókË†'ÄÍ	È9GÒ‹FÛ( ”-0◊Q?ÛP`«£5Ã∫Ä'™Ê@¬ü¿Ãœ	É,ÛÑmwWx ¿ÆÅdä¬◊s;6&Ì∑Üóä¶£»<¿bÆéÈ7ßqG…ËMp√F™`ßË÷n\"¬¿ÿï	‡~&C\0äud‚‰	I„rÜØtîhAIG.SwH	Ï9£Åä’|)9|óÃÑ#0#äZ=p÷í‰”*¡ì‘!¿»˜ÎF√O1ªåÅÄ§ï˝2LÚ¿gZì%Å√étj‚˘ƒÁ=q´yKË*XC¥ŒÇVõ¬¸6ÆœÇK¸Ä(Â8XÏhéT ≥Ãî‰¡ã#&±'—-à±âQë9'À›à≤ìR¯n9ë[(/>v%(‡∂ Z@∫Ä∂ı\0VÁ¢ÄL)‘8≠\n,ä»„yh#MÓû8Ò˛XíïñX“mP’’ä16¸x®ˇÔâäË>˚y(∞ïãØCå8«å∏œ)¯‘{∏ŸçÀmQRí‡g∆Ñ*ÁRπÎÛr˛¿OGìÅëOŸìÙ…:hg*6=6’%),ØîVMÜÖÕÁ]Øúøeë?LâR\0\n`ÆÈN\r¬0\$kDhÇÌÇh§;#“∆\$‘ö'\$jÌ[˜>4L·-Ø-Ã,ôò\r≤´†›uW	û\"`\\l¸◊Î gJôﬁ+πÂ]˘Íπ{¬çôf¥¥k`•<cp\rg,Âå7&L\r¢iK@√CÚLÇ5ÈM†KEÇ∞Iú83\$À°ãEú⁄ÉıZ0h«˛A˘z294Øå^9åb∆`Òé⁄.‘}à:+dD9„{r≈p,B2c†Èé\"9t˚tE7ß˙!F1@=Svz\"‚EôT‚w7jªPπèÔ©êQ(˚ZøQy›˙§\rÀ\\÷Põ¨˘?ÙΩ:Â\n9AëπRp∫ÄÇö¨|GJÀ(Q\ruÅG‘ÏÓß≠∏§C…Ü6º—ƒj“\0ÄHgúÇ”§ãE	:∞8o%Ü/∫4\r	‘Éª\0ÉYq2Jÿÿåw;V˘Z≈ê(+êc(\r;Yê—çëÇ8{VÇWRz◊4Û@“€W?öb¿£âûÊLJÃ¿Q∏∫aòBû±‘àˇ’},ıÄΩ“•UØ¨±€∑=∫Ø∏Ò´ñÚ!≈?1≥àxé´Íæ‡Np\\êÚfJ†D±∂≈i‚¥)&S3®}'’å·<`‰>F¿Sé¸\r®tYßIƒ*	ßb)‡ÓŒ≠2mõ9∂Y∫\"`˘™ó7Fr6V{%,‡›-”<ôÿ8˚GÁE<ô≥üXÄ√õ;ñ›9ÚÍTòj©È4îsúz\"ƒzï–Ï¢‰VCKü&g2Ïö‡Asúû%‰k©√UGH°2¶ë≈≤¶;\\vkºù∆à˙ù¿∆·Hk\rb…¬j/Ç,s»y®Xπí¬l*X‰”É°6pˇ 8\r˘π Zåñgƒ£KƒË-«ÄÛù)QùyÚ6Ï¶ûBåNŸÚ\nb8wÚˆ—i!À\\ùuÙÇSú¡0¿\\\rTb\r\0©œ)∆kù9S&ë‘ΩO’#{6kÍ˛ ÁÕ‹ùée∆˜ûñˇûÏ≥«}zõ÷ˇü“èv=F €í-3c’Rœ5ÙÈÆ≥¬<‡fÄbŒ(ë=^s\"eàu[“\"8òÔ˝Ÿ\"∫Êß√ù«}\rg‹Ω^Ê• ˇ/˜‹‹–kø˝¿±ı;k‡¥ÿ«5¨	ÏΩNa^nåJ∂©»∆BΩq<≥ŒX¿ßIsÕ.73F<G ˜ÚBΩ6«.K´=Õ”∑YÀ}3?Ë÷¸Y”<≈ûÉC¸q(˝ÒîÔ\$ˇÙHáÇÊ]êi£èöÍΩ›Òﬁ^FÑ æs(\rjÊ‡®\r\"\"e–öªöLbì÷ﬁuèø‘bç\0Ac¢∞\\\\ ‡Ó#†◊ﬁùÆ`÷º√µ+‚˝Z∫u¿∏ÇW„@>‹€Õ‡™/¡ ù√f´√º? m,›™*Mt%}ï<πUΩxjπÁÿÄ@ù±ÿ+ÿoÏ`q«(+Â]s”7´<_)q¯ï#oÛWÓÎ›]Z=uﬁOılyiTˇÒ˛=üÉèÙhNIC{i'2GËR{∂å(¥c˜÷ñ≥T‹⁄qﬂyÖ¿∑}?é˝ÛoI˜c4N8)Ï≥hÉâ˘ˇh%pœÛü´5_ØIˆ\0Â1®˘√πf÷qe∂w˘ñ\"˙0œ¸ìØ@Ò≥˝Â;_◊gI{‹¿S˚ˆ>o'¨8>â¬CÄ–§á1©-∆g2«_Ë‰∫t%Be?„œ∆ Ô»;¸FØH„–=¢·BE>ò∑ÊoÑ·É„|0¿«√∂¥ôè#ic∫4F∂I1|¬‹d»	€@<Û%·π£&†≈†,›ƒ\0td@T…˝U`ÆPÀ<ÅãUÄœ»'28√Ü±ÇjvŸXÿ+8PæF*§Nò: #Û2£kàÃ∆(¿ç¥çÑÇ¯ÎÇ æ(5È“\"î9m\0[MAÕ\n°y†˜L‘æµè2ípVÇ¬“~ÄB¡T±pçÑi‡íX∏1Aë` ÒEK™√¡‰ PmÉÏ‡˛\\¯9C\"ÑÃ `Ë_\0£»\0{w0˘O‰e±áâ\rÄpiTõ‹‰É~˝Ô\0'Ç∞JÉ‡<r\$<˛áwW\0a:‘–”öU\0ÄC^ÀG’Ô 'ñ.¡≥iÇ;ÑËòà}¯kH~Ë€åÃ\$ˇ√|--3€MLê}®nüöAµá`nÃå”b4¡Ì√Í``≥H∆√úîá@-x»ÚV«)¿•©Åcñ6√1	Ã&ª\nS¥∑≈v©›FßM\"	¥®Û‚5uNgcË€bMµ†eêäím¬£Q<ÀT(∑òÖı:H’\0 ˜É+°ÕŒ¢s%∞\nB§ßcK)‚ zx†û\n_‘lÄ°òÅRA§,U^–Q\nØ˘Îngp)”Ñê%Ö(W–òÿ¯fÑôÍ\0X	¡‚IÊ#HØ2'∆~{†ù˜A∂@VqddYÄ·ÅìÑj˝\\®è0êR\0Ö‰O¡˙àpÖKö\\ÚË∏\$Cb=Ï@÷Ex7Ü‹Ø•VÑs	bªí\r•¸©Òtã¥^òyGÖFpûQwå∫\n>PFh´¿A\n ô¿∞3‘¨q·Q¨\r|k£`±‹Å4RC*já¿]¿*P\n’+øb<Í•Fñ-J_¡sÄÈb3(≈≥«∫å89±º∑ì[Èa£´\0™á}d!aX∏˜@x€”Å°Ê;ÑrCÒqJ™∑“B\0Ì´Ò\\ ÈË(≈ÕWa¥w∆ª˝∂û7=ŸúB¿âºz,oXËwïûËˇGb@#´(\n»C r∫\0a0ãL\nd“Òêú\n\0OòÇp#ÅD√–W#ÇY:ÑÇ⁄Cëy#`#<¬éì4,#π;áB&ÿFöÆ(«E[®QÄ^ÄñPß5i0¬\$ê ÅíAÖÓëö\$k#sƒ%ú¢cπ¿d∞&ÄØ<f´çY„ïT0IT!áC'¢£Æ≤—7∂) zä´d‘Ÿ6Öé?Ôí¢ßê/\0…≠Ò¶ìπL#±rŒà>1çP§ù’VÓıSHF@„îycì!ŸCGÑÚíÖ!TYîWYÖQÁm≤¿Êáê∞å®QÌ≤ÛñR™¯™„»èî}ﬁ\\»¸G˛?Mym@ç•s!)^Hv°ê¡d>eUü˘Yíiì9ê‹¯7ùí\0íwH\0b˛ØÉ≈Ãl∑iRâÄî0'Å:+Ü]h\nDb¬wbQE…–ØÑl§_œ¶Ä1äLo0-ïÒs»nØêŸìN√˝ucLG®J:9Ñ^Éy#TÈoÀÑÚì	s/Z´)¡pJx#°\\P^FJ;ìÃErSùó,®MP∆ıB∏Dj¡Wñä√•∞Ø©mÜR\r„e+Õp+\0)ÅÑnNkdC81ï‘·‰äƒVçí¿#˘\"ŒP;‘[nÇsk≈≈ é&ób[£´4ò	ÃÁ—íèyù ÓßIµdºa«Ÿíèn'∑y ›&l0baıbRìêÔDµämªIaºÖxJû˝\nC•Ä`ËPá»)¶⁄O;LË	\0^î°—7/ú∑Qì\0G~ßˇ∆,î/îHúÄ>ê≠Äo„Õèˆ¿Ñéjo”ÄkÑ‡†∫˝ÄÈ£ŸM,¯XP_&∞ÓD‡ñ–™ß ‡P”¥J∞\$∏6SƒÊ\nQáê∏Y'Œº\nS±\\Ïœ\0˛eÜ‘z¶cIâ†à≥¡ÚŒÃ—«,Í≥#5πï\ru‘†o2‡â‘ô\"È#‰Í#±r¿Bıñ“oÛÅwê±\0– »#œfE¶ÚÅ»\nDÆAg≥8…ˆÙLÌPúøâÜ]π:L≥ì'\rôŒ#ù&ı±&Y≥î¸≈&„íÆ=‘ J,5¿–·rLÏG”;†ÃˆÑE…@ÆA∑oÄ„´@àÏ°P6Ômn–⁄# 5Ÿ™J…ÖÌÜÑä›q\"0D¿Qí∑ŒÍë÷⁄ôur!ùvpç‡&≤f§˛A∑í‚ÀDïÚíòÕJ„p∏L≈r‰∫ j|aBhw’:>àÅΩ\rΩ@‹©˜ë#·ë8£Î_^ôáÿ¥ù≈oüy	ñ]êçVË£eÁß‹vk¨…∆=Z;7]ŒÊ]ömd®\"Z°\"å‘hR(çC‡&“-Weıî1G∞¸¥j P@à¸Z¶Dñeì—5∫p4ñÉ¶ï\rÙG≥¿§…g\rŸ¬ÖL\$≤¶ èÁñâÚNYê7\rÅùRs6”„ZNÚƒdπ08ÛgÃ\0‡œÃ8@7J:wîì\0•'M‘±#ãÄY∫hÊ7–'ÄÈ4Àv…u'}¿!òC2™ë∂JL¨V<ã#=)\0ÿ≤j6Ï™Sn,HIjı›ûû-ÊßD9€÷8µ*SÙÕR=+–tCßOŸJJÑ°à\0`	L◊å–G\nå–!25N¬Áâz@4¢c±áêﬂ∏˝<@1°(ö:äÄ∏pnH!zXZWQ\\¨\r\0+(úOïZf©∂ï{äüÕia±|çn=ÑTi'T8ÕiÂÔdÍ\0*íA\n§“\$˙êDe@\0Í\0ö TcŸ`i–(¯9>Ö^*ÛÅ!Ü†}`Û8\n†LcÏ™©?∏‰R§+™,ö…g•Ob´ì|4W´†ƒÈVG@)7µﬂmÌ®ö¯áÿ≥Äï%±5ò¬G⁄∆–/…5^\0ÀD–„÷Y\0 u §àÈX6Ä ∞¢ga¬•CQR€VZ¥Gáf†+x\0÷∂¥¢»bK{Kl≥˙Ã∑∂¥FjâjÑjN©J”∞|»¸F¨Qã¯Ã%W RÁá¨‡›Ë\$E˜Ph®U®®\\‡ƒ2‹'¶ôUb¢àê(ßzGG8Â‡õ®0∑°‰\0òÇìπ¨Ï'dW¿T\"\ns∑,¿dœ	Ù\$LB\\î\rÚ√â÷ÄÛWÍbR†Ç∞UB≈ä˘N*©éµ∞ôà cäÍ¡n¡ôPŸK™êÿG@ECZïÖ†œW⁄÷úX™Iˇ´î=CaSöÀ6˙Ønc∞¿Qâ≈J¿2÷5©¨ ‹œZ—‹…ƒ\$êÌM m¿Z™6‡zÀ,±£\raÍƒ5∆è®	é~I\0D”Eö!æXQπÉà≥2\$\r\\NÑ”°•⁄˜!cK¬^P'àPÉ©s\rc¶…dÕJL+∆Ù¡\"ﬁâÂlZcgÒxÜºÉ⁄j≈Däx≠‹s∂}¥√◊sI™·YÃGÈˇ¥¬ Ìc`2¬ä\rÑg!Ÿòﬂ/…Z\nÄΩ†ˇëdÒ€ÚïQV•r#;+p:<vœ‘Î	≈T(1éÿˇ‘%DlQE\\x§⁄§AÄy.]vmTÅì\0»HñÒ˛Àxºó˜ßj—Î‚ÆAmSâ)ÊWùo«¥P\$>Ê4M˙”b∂[·ãº?–Æxu=V.áhz‡GñœA∞QwŒ…C@π:Xâs!‡ò»ñW˘\"∏§¡ŒÄó£•].¯⁄c’Õ“Ï∆∑∏ÌÚ:\$‹eK[∑Õí-†„±!¿B? ïé¨ñ¬Ωæf1{≈@—A≤ê(s™Ê¿fÇ/\\äNùŒnkà\0ffÇ(W0Œyπ‚\n?r&ü0i”e3Ç∆Æ∏-–|†1PZnÜãä\"›\rÎu9TSWfSs•B\\˚%\"âU–Z–€ñµvÊW4?›tn>T&p◊%ïßÓ©≤7aÄ≠{é\\ûÊ≤Æïs.Ò£ñéPr±†®º‡™‹ŒÂ^π≈ÿUTŒ—NO~r¬DMyàÂ9ÑŒ ÷pÑú¯¬ÿÂ+±\r\${∞ÖQ˜&ÇﬂÚ€÷ÚKÎ∑¨{tpÑ ›Ëkª·PÉ(kíÑw)tïæó<£Véƒ1t7w?ïÂﬁ≤éÎ’√‰´ÄDΩBä.∏\$AS(‘ÂàHΩX¬4qÒ«*Â—π\"ä*º¨Ü¥‰V‡∏ıŒ/Nu]®ˇs¶Ωm‚£àÜºl&áÚΩYÔqrã›\"˜óÿ’Ô–õdˇﬂ¸«F]ÚoW|ÀﬁÜiqóg;;Ñ/rÓ!\nº`M!}v”5•œwW¡9Uú≤¢Ì¯ì’~´¸¶Â<m›`§©P¶Ã›Ûn7ï∞2N:©)A%Ê5H‡¢i)81È¥µ?‡Â†\0sËìÕöÍâ9d,¢]Wl\rì«Ó†}„ úB’ºÊö’)â¿Ù«@<H»FßÚeÕº◊&¯¨§öπ}‹ÂŒhA^Oú√É›\n0	∆l-…ß^<ÆÈ%û‡l˘dÊh≠™nWö+π^JÃ≥Ûá\rÅë√q^ l3ã!ö%Ú!ò´.o\"3\rt¥WêÜ!á≠ár+3;\rgá›\rC,êH\0äÂ«4¯Q“˜<\nIÈOL+”¢yK⁄± åŒì7ë’∫@£‰n“.·ƒxÒÄùl…»6ÿ»2“\r>f ƒ€”p∑(†6J1Ïc9ÎæÖYBπóÖ ¢JYQØÏùwäŒ_já7’*3ÎÄÖò„b^å(S\nñô áV`Êx‹+\nûJf,ÖòûúbE<`¨¶÷ò0#∏.«F91‡’‹yå8Ä2¡ãYúaqëc¬mM∫ò@j{åwánÓô\rœÇiêö¸\nrPFúÿ9êôñ?∆p¯ˆ»Q˚≤2Aå\rÄ˝Ë‹n›÷Ó˜szÈ„Ö¿\"≥«	\rbú~î|…“ò	ízΩ‡Ójx¿ÜE6rk©\ri(=¡∏k∞ßÅ N;|{˙úÜêÉ›Ñ1jºÍÛ+úÀ'PÅT¬≈Û,®T˛Pú@º·]R,Æ‰Ï<ÅπŒ\0ƒê\0∑¥È\$ó,ΩòLºl0ÑÅé®¬—≤Uì.êâó>Ìó_ªt∫pÆK4ıH¡0Eéß∏ZdÇñ“1≤◊\"“‰¿@]óDZÓÕf.Œ® ÃÅ†S‘±y\0æ¥∞5âÏx.ÊCÀ—BÌKêEp\rày)Yﬁ&Q°#2´»jìÜØô¬aënpÙï…3p‡ô±ßª0]V‡∆sëÙ›ü‹ñl´,ÓqëÉN‹„‰âX 	pYH≠ ¨<Ád:\0j» ∞¿mf/[b>aY‡¿⁄E†8Å≤π„÷Ã‡êS6gIhX¿£V’SgÄÙ9Â#ÿÛ P©ÒG=Äsœàı≥Êû'ıÅ–·0û}’án‘‚`Ù≥6hh*Íq—(ƒ#ÄmÃ¯J≥CõÁSËW8(‹ÃÊ5(9A„K5Ï2•Å°a˘›6'®ëR…,Ëé±ZfÆ¢»î`ÕE∫æ\rÁ'ÙPé¸4m‚Øﬂ£∆π«ÚQû˛àîÑ∫?%úh‚zE’Åêê-ÚÔdöÊ∑•†Âÿt∞¨©eP∂˙Ar5—ï’∏Ë£>÷x>\$ìä∞önX¬…üÕ@\r≥CÀ˘Ï∏m\\Jﬁœ«5a…Ä&§s\0€∑T'Iëô\"D“5p\$Å˚@8.⁄\rídﬂ! MÎ†sz¯Æﬁ≈6M\$›¨®ñwñ\r¶÷öaN;°í\r®XZóVÔ√üd-XZcƒØ	8∞÷Ë!ùÇÍºD2∞∏yÔ+VÑœ⁄=Öc∫Ÿy-…πÄÍµr`pM›\0Çv	@Eã8:B∑<AË|\\!Èi´p9ÎqÇ∑HXÁÑÏæ¿Åò :ÁS 8˚ƒêÃˆh•∫=b‡f5b`d¸¶÷Äú÷#Ì◊6ç-DfΩL5éÍol«¸⁄u=êMg‰tÎÍPXq≈‘'-rÑ?»≠…¸ÚÉiPÀÈÊ¡˛¨Û,í5 2â··mÿ¿ôåó7‚	Ïc{Åƒò¢WÑ_L\"≈6kï–à<,´¥<x Á`Q{@ØOE‹ÿÀàüKHsc/?SÁ©∞X[lyò˚!‹\r∆x(+ù)áÊÿŒ«÷é£¶Øy√biIô±,…œDs)hõúîXJa\"_{gX\rŸÊ∆û‚“b‹m\r<ç+˚–üZ|”=}qL^ÛºØVƒ4mŸÌ5√´é∆ì»î}™Ì-+˚Yif÷Ú™ÆCÌJo/@^Ûy∑≤\r≈Ì9ΩJ‹∆÷6úA\r®¡Jm\nCl2E|qA#á D·‘ÒL[\0≠Cÿÿ‰*‡o/ΩsMò3O±H¨7é}≥∑…y@3‘.ò©(ë1ÛQß0>ï‘ï©ª´dÎ)‹ÊŒøï≠J\0(!Ò3VëØ\"≈µ.ñÒ‡––ÉÏéŸºDê§¬ÿ¢D3,*}f¥Î≈âÀme]3óº2¡{ÊsC⁄∏}ëËﬂ_[œ«˚5ˇΩ6\"§«˚Ò’Vãö8^Ü÷x∆(0ar∆§\\bN6&∞-cCÄ∏“◊n¿≈3sT⁄•ê\\bﬁRW8Èß≈(ÓÇ„ 2c»\"[~êŒ¨©ñ:©·àz	ﬂs°XAXjù‡Ä’˜júñæ4@3éªû˙	@ñP>H≤)¿7ºDπ–\nrﬁgí‚ppÖò¯%(\$pjC±≥ípû÷€ﬂ%πa´ûdd•ﬁ!Ù>`\r<›0ñ›	π@√A'÷–Ôñ∞5º·bb‰)È-Ê§ôê¿˘ñGr@ Ëh¿F¿˘†±ó¿‚Ø( C…‡ïNT+f©ﬁÛC¥ñ\0ûLcF‚^’Ygxrá3Ö⁄9∑xf=÷ápÿΩÖ∏„ùìçƒñem°…GÊ˘\$Bc èïæ‰∑\"pUó£ÒNsÊY©`∑Ω»ç◊¯≈áèóölò÷†\nØéõËúNu”Ç›p0∑gè≠-«*@‡XiêÛj¸Äìı‡y∏π^#ÛÉâ\\ß„Æ˛πXçÃíRVd>–\nXá@A‹îØàÂÅGHO\"p©Ì¿Ä\në]P∑Ø(íù¯ÛjÉÅäó√•˚F_ñûcew÷,PÅàWbG4ÁI¨‡Á%˚m‡’c¡Ä˝ÄÚyYfhñ[Èﬁù∫{«¡é≈	nÈq˛¬¬PØâ»d¢ãtÑæƒjìi“à‹y\0_ ßJ∏ÂÀ«uH/äT·◊VG¨.1Àåå˛◊õ›Œñ2W¢x}`ÿòJ6+åêÅÅ∫ÇÇQ^`=ã:Øº\"fƒ¿1›fã.£YnˆÄd7\\Ñxe‡•u8Vaﬂüh¿¡–0ÄÖÍ÷Ω‰úrÚèlﬁ’˛Œ“@¯Üåúx—#´Vlµ§%u¥,‡0E«j[ï∞Û\0ﬂÖ”„/ÉY©§@êõMÇÎ~±–d=¶‰üƒL\rÜpT¡d‚ë”,X‘´ëSíõ\"6\"0»ÄÍïÙÖ36Õ„TﬂÎP\0@ÅÇ¶‹Ø~^ÂvΩØñŸ7tî‰L—È@Z“CTÁÉ§-Qk\0¡ﬂTTã∏∂û]¿C¬äm'à7.ODy†KÓ‰©ÿÁˆÓêÉÕD”ôuvùΩÏÊÇHÈΩzüˆ4µ}èüöQ’.B–p»≥n”Gπ≤zDDYÀC⁄∞Êv€«C°4áöﬁ—ç»Eª¿@0+\rH‹Îá:9‘ç«÷\\[ª%«F˚˚∫—pƒGÔÚAH ¥∑éW 9˙b¯Ìµ,Ñ\\!Û ìÓï€˜ÃÖ«ÿF\n%ëY6†5p!3C‡wü¬j©üŸ±]Wù/öÃ≥‘S∏ÅÀ©\0uÍP|<≤ÄC¡Ô˚ã>x/û¸˙LF∂˘¸s\\ı@≤;íæ5äÉL	¡∏â[<p4´«€ÂÄ:Æ|-ÈÛw	ép¯a?ß‡Ω‹&Ó˜k¯OgîjuÒ®YK∆6÷ù«˝‘(¿ª˜≥òx—w;@#ˆ0z\0(ÓÔô“Lî˛ÉpÃhH˘\n[„°¶·«·à¬÷˜‰†…ès¢»’ÌWø%∑ÄÚﬁ€ü£©„H†R#pÜàÔπ…Qé,r0™)eû3ﬁ¸Ç”^ŸËÛHãﬂü´Ò¯ìML„˙Íæıﬁì\"T%Ô¶FJ˜ﬁø	ñµÿ¿\0Ä‰¿]cHmíÜzÄ…)>£á{´¥®«#∑√‹…ı˜ÆÚTËy¸g‰—\$˘GªÒ–´?èœ„CÀ¢BÍ8Hø¸´l©Äù\$\0Ñ`éë◊ΩM¯è>\nÑwQi#Toí9¡á\0ﬁïR¨+úõ.s>3ﬂ ∑ÄÄÁ¯C^_\0VXÈã‡‚z¯◊“¸ŸÒÛØ±r@ô·E\0¬æ#Ò2÷2g‚Ì¡»ì∫Xªƒ0Kë„+\n‡/ö§TŒw·KîG’‚c`Áµ#qˇv≈˛˛ÌÔ~Ì<ŸFO·ê±ı˛rÍ¨æY–˛aCé–ˆçÓ#CÉKMÎlØûÿoÁ˝òäWª˛ZUÎ)?SÈ{ôZ)q˘ˇ_ÑØÙMÌÑ\0+Ø-/mèÑ\$÷˝!*:4:•¿cÏ*÷•§=\\¿ËÈ¬À]>ö\\∫˝qeˇ]ﬂÉ≥∆⁄˝»ˇöæ&Å›≥Qï,Ù@'¥s\r›ˆﬂnΩπÅøñÿ¿Ê3|Søô‰Kò%˙eâH“»aà•˝“ˇR#çâ0ä@	r,â‡)XIBù?îﬂŸZƒØ‰Û[˙Ωø§rÇÀ∆⁄Ç` 0fOÁ‡E¬˙1¢ãÿæe‘Yå®æ%ﬁ™^\"™ø≤öC˚a[?ª\0r∆&\nÿZŒ  ò\nW`€®†Ω÷MùNmÄN≤ê·OŸVjÊ%0HöÖ®\nûe„ı :?V˙ı†;àÆPΩ¡Ó?JáF0 ° /p|Ø“¿Ä6ºA @¨*|·@¬Bê:-~%4∞%≠íXöè\$j2VŸ¿`ıî.R≤¢x\nZp(Äc2∂∆y=Õ˛ÇÏ\"Äj\0°B»‡ê\"€[◊Æœ¢˙Æ“5ﬁ8£V•iÑßä¡.∏H)Ëˇ-ä;X’†À–Mº\0ŒŸ©:·cñi¡æ\0‡∂é·&¬IìËÏÇñsQ¡Äﬁ†÷èªt@h9;|Ç°;†Üürq¿ëÄ¯†{\0±9Hú	CFü8E«Pc°çRo…¿™pª(bÏë@\\∏\r© Ç\rZs∞fß>J<b\"¡º\rÙØ¡=√IiÂ>≤âõè,b\r‰…zi!Ö˙òƒ\$Aƒ¡˙ÃN#Æh/ßj ˚T¢\rAx¸kÒÊ˝A»\rxØ°Æ¬\0üsÆ⁄ò\$4Cöµê®{†-¬/—•D*üËP#Ï\r˝πÿgpﬁP]µ·°–AÉa˘+˙@\$¢§2,\n{bÄ‰£ËÄ>Aπ<”AØ nPìB0oå¬*Ñ—	bB§B^y5Bà[	°PÄ∂\r‰3´ú¬âúÇ∞?»!Ôøæ!–¯t¬}\\(\\¬	‹# £\0æ¨‡çP§ô\nR˘\$—Bú!(6ÈÔ¬B`\$†8>¸#§.Ô»¬»võ>≠âZ?¿P`ééû#T.‡ãæ¢@†\0lpØ±0-\n –¥Ä‹¸p# ›¬‹Ñ%–∏¬öêA¨	Ôª¥,ç1‡Ö“ÖÚö™ÎÄ\n\0‰KÃ‡Œ5\n	Äêô≈häÓ≤≈êN–Œ≤ï‹6cì¬Í⁄Íã!9¶ú&–iAíµ‰,CY†Ü1AáÊ∑~*™@‰é9Z¿\"¢»àßºò)Sgø¥€d«ƒÄŒÀˆ«\0(“ﬁÖƒˇ¡ \n‹'êÊö‚û)π ~¿∞ú8å\0B¢ß.–#¶Äª@c{ºç‡8Ñ∆\"!\rˆå@2P\ry\0Vì{Œ^á∏)ﬁey∫‹∫#åy;`è˜	Æ:X‡*ÜQÓ∆àQÒ,„ö§@É>zÒåE0Ù@Á\0X!@A‡Ér\$®#aBûÄÆ*÷Ê`¢íÌ\0∂∆\0@≤Ñ\0¬∏@C¥Ôä◊\0(≠Ë	\0‹ïxÆq&ø~ı[ ï#˚§Ç¡πf∞Ï\"T!>íŒ›¡GÇVÀ¸∞Iºad\r‚á∆áA2NÆêπQ;fƒ ‹A∞©™Ü¯§B	¿ƒ%ÃEnXdÕÉ5!·ƒ(Ïj®c÷†z<ÛÌc–ƒ@™+6ƒKä®J¢nÕÑFÒáA&™DJ%9ƒ®G·{—Qƒ°\08Æ&ú–ü9·°cA2+’∆∂Ωhöh¡»g±∂Ê‚fúÙ	®wf—äÛÍª@íYÖä±˙mõza∏¯47–òßB˘‰3\0RÊò\0.á£ú4\$ß/FQ}√_õÓõÒÒÜN\\¨&#TKs˚±pÄ øZı0ı0*Ñ∞ìJåÉ»D≤ƒ™π)(§‡6EÏÚÑ£öáû9ªÒËÏø/	Û._∑˝Î¸G~Én^§K\n(ÜTé‚€P-14ﬁ	œ@ÿ\0ÑxÛm‰wF(\rÇK>êê '\$R·©πØ¢xË#/à)-¿µR<dfÄéu‹4:∆8–\r—íÑê2…•TæB¬Dfp∏B°,g 7\0Zµ¨gêô¬ÎlhAK√PÖÏ5dÄ!˙ıîiØW√m—]ëéÇå˝⁄∆f¨¢(˜ä\"Ôˇ¢Ö‚yè“√Ù£ƒNfı¢d)‘mP≠jf)j@¢∫)™3¢ûﬁ0ÀH™`áÏ!c;0\"™dQåkp·ëΩÇˇYÜÄ¬ìì&,P¿hBÆ∆–™#Ω‘C›éâ8\r´ﬁ…·?_[Äã™∏ÑG¡à‚¸öW±◊¡EcÑËÄbcaçÒŸ>8c´:ƒ∆Î5eı-lä:π•∞ú„’±¬è∂2@\\≈ôà·pGi4o≠X™Ú™0ª±ÀΩ‹#ÑÍ(±ÀIb(çGÄ~ª\"¢D˜Îﬁiê«RIÃudû5>†Åè≥èìÌJ†ß›ã?∆Kæ*d—ç±‹«‚:¸woiµ¯cª-x∑îı|u⁄0kd}Êµ¢aÅÜÕÎGgƒ~Êõ¿c1çô6é‘ÅÒ=™‡\0Lw·ã¢áo‚ò¸H¥è#Ø«!X…qî¥¯! <Gú‹zn{ãüFu»`!ƒˆöÏfŸ\rNπ¯˛Ô{Æèí\$ã•∂»+êÆåˆ[D|0G∆ííyÄ«‘m£êX¶Ù˚¨[\rˇ3¸·p.@>“[ºë¡PntåK≤4¨™ôMÆ_H|ùYIN®⁄Ùõï¶Ì∆l:„˝±⁄'‚ÅË≠H\"ÌÛ√¨»vi∏xr7Ä‘û°ùnôCXáÈ±CÈ∏è!pt≤A»g\rº<ÉmG`dá%∑ñÕ!·´/Û(÷LëÇ|ò~wDOQ˙æ‡¸èaË»˙MÃê	Ôâ9¶¡OÑ749·J8*‹x@\$Äú †,3Rnbr\0öÃáX».‚Ωƒk¥ò2Xê™YÉ G&±õÓ∑¸U\${∆DÙat|≠¯«Œ˜ºXàGPõ<òq“H¥b´ÅQ˘«˛Cõÿ°◊%3Ìé»0d¡çq˛ãm%x∆ëGy ±==R’ì`—üÑÂ√¥íñ—\$€Óbœ.ö¡QNRö€&˚GHïèâ'ÅÕYΩ1 {˜®3ò∞∞9í2\nDd¥É2xô8¡Í\rZπåúy7ËO¨ycÖø˛aà„r*HJäL°o˚˜'⁄\"Q¡⁄ƒXﬂ∆(Æ,XéCä18{…ü!õ@Ç,kÉN”îl˝‹8˚m‰DhÙS Cö∑|9Å NXÇ6Âô›\nÿäÓ9“¯o§ê¢|ëõµ\\ßÆ ßñÙ´2± ñM\$ê23<÷ÍôØ“Zπh9πÈbLã4C;¨.±èf9© RºêögQ‡é,ñ∏„Ó¥øÅT&¨©Òÿ±Òû∑È*´å‡*Ä†  *5xŒ…ûﬁEêŒã…\0\r∏,∞ s≥ 'ıØÆÇí !#àtX†b®\0—* ◊ ∫1Vã˘eë†6h∑‚ıÒ1¥Û\$®ƒàÅ\0¬qùKÄ8ˆqŸ3Üfáπ. \\Üfßí,K\0xÍg¯åÀ<› ‚\"äÿ<»¶©Ú1w≈ê¡å∫¢ &…qÌöb¨´åá’Äî·úÜvQysK~.Ó.§µRﬂó4¥Ñ∏GQK: ´j\r»†§©»!Âà7/∫Âƒ0í:@/-·7¯tº¿j≈À≠/q^LÉ»∆ﬂ¢Dm{µ¢37ÏïxﬂÆ\0\"¶»cy∆⁄ø{\"-iX“J@FTÃ\nI·p3ò,Òµo}ë‚BÄÑ<ö¸îlÕ'm˘)\"[2JJZLr®éÊ€Z \\B≠ä\$˙\$!ø)[ã<[—\0ƒD◊‘»ƒ§≠÷+€2“ä•2§ƒ‰(ÃÆò|Ø(Lbˇ¡óÂÊî∑ô<@à(VÛ\0ΩÖó~\\\08‡πöÂp˙™5LxBå…∆Äº[0Œ¸\0Z-\\ÉRè∏ÜëÑ §(ò\\‹|Ãrl9}0ì8CZ#2Ç‚L∏ ˘@2Œ(ú]¯)ÂÈ3ß3ºÄÕ Ñ—Ö¿ê*L”sBéæäE\0øÇŒÉÈ∂–¿®qz\"	3xêìR3Ω3qCÏq*#4àh–OÕ>1lŒM2<‘†;+W4ÒwÛP~¢l‘`6£ÏÑÃsT«5Qµ”Våπ\0¶åûMg5Ã÷≥gHÈ¡J\"gào1£#S[ÉÜïz:sLl¥”Ñ≈ë´3–[>ãVLœÒG¢[0\rÄ92c∑ÃÈëd\"\\—”Lã2Î`rÌÄÈ/D¬sM7¯qNm¨ÿ≈·LŒ{ƒÕ3Ö3Ö4\$‡ì2ﬁŒL—18ïxtºŸäÃÕ*ˆ¥ª\"%≥¶\0JU·√6òESUõ_6º’‚†®8 Ñ◊a@ïÊ4‡Úàñ«‰€≥g∫\0ÑÂ*ÜÕ>@4”··ÕBü§÷≈SNÉ\0¡Ä„Œk4ë“ÒNA:D€ÃÔL84‹Ñ∏⁄Êt'{À;pçs°ÇÎ6LŸ¢πÉ∆#4Ï\ry∏W8xÛ§µ¡ åÂ%>_∂Á:~%ærﬂD¨·G‚+ÄƒÃ¥Ï‡Éìw/È\\“ˇΩBC‰ s¿√¨O‹mÛ≈ë™-†lO(`¨åºÄÛL%8®Ò”+00)Ûäº¿¯ƒøs¬ ¢WC»Ã—\nÊÕ™ds-3t?3â∫Í†z«áê–Çìö¶rñ| S-≤DP2`ÅùÆ™¡ÿ ëœÄv¿yﬂá≠=∞Ô„\0œr‰˜nO}>Û†ÛœÜÄ%…◊+⁄ù⁄Ω·%\0˚€°KL6Ò[B	KËÅåL–ﬁÕ⁄KAÇÍ–Ù˝/˜B¶Î‚è/Làπﬂ	ñ9¿∏ 9\0ø? bF:TØ†z“\0f{i<1∞ÂÇ«D9ÆΩ@∏•\rA‡Äâ¯p\0\$ÜF˙,dÇi-òIß8‰ò†£,PÇ†É–8%8öAˇ9™H(¬Ä¥å,0äØ†–J\\tUp‘NÍ°Ô.û%Œlíà*Ñ+4¯d#_∫›8Hhøì–‚√vÏKA\rAƒEÒŒ£ÕA•ﬂç«íù>£à≈äúÕº5H_ãæ„x©ääº†±I‡√Q@∞•cN≤A9'˛=@Å‡Æf<ç\rD?‘ﬂ\rB’j‡≠Z§7§04J…CDÍº°C£Ü‚˜FhD5®¬ûﬂ¥‚°ùL0¢%rÑ~NP2!#pﬂ≤‘\nΩ5Ó@F≤J\"C\nÜŒö‚’BÍE˚8@xtFŒ‘\\@)E˜è)DEìâ(ÍÙ“Ïù_35nÃäA>äâ°Ú–ÒE¬K\"°º®˙§\"˜QC6D¿DQJ)0p†6K∫^S_Ö9BIÓQ84^√ÀQ`Ö›EÁ*/-Ùl*EÂg·Qä’`nt.ôù@†F∆äJ|≈Ò c∫úE-√fÚ›(πh€T&4ƒÛ&`–‡H|w¥3–.4‰ +ÿ3í£z±DH+ñ]cåOG\0X:4ßPÖà_Ï°tCä¨CY√\\Ù\n›H¨5b.Q°-…Be\n|í9Ü8");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0Å\0001ÓÓÓ\0\0Äôôô\0\0\0!˘\0\0\0,\0\0\0\0\0\0!Ñè©ÀÌMÒÃ*)æo˙Ø) qï°eàµÓ#ƒÚLÀ\0;";break;case"cross.gif":echo"GIF89a\0\0Å\0001ÓÓÓ\0\0Äôôô\0\0\0!˘\0\0\0,\0\0\0\0\0\0#Ñè©ÀÌ#\na÷Fo~y√.Å_waî·1Á±JÓG¬L◊6]\0\0;";break;case"up.gif":echo"GIF89a\0\0Å\0001ÓÓÓ\0\0Äôôô\0\0\0!˘\0\0\0,\0\0\0\0\0\0 Ñè©ÀÌMQN\nÔ}Ùûa8äyöa≈∂Æ\0«Ú\0;";break;case"down.gif":echo"GIF89a\0\0Å\0001ÓÓÓ\0\0Äôôô\0\0\0!˘\0\0\0,\0\0\0\0\0\0 Ñè©ÀÌMÒÃ*)æ[W˛\\¢«L&Ÿú∆∂ï\0«Ú\0;";break;case"arrow.gif":echo"GIF89a\0\n\0Ä\0\0ÄÄÄˇˇˇ!˘\0\0\0,\0\0\0\0\0\n\0\0Çiñ±ãûî™”≤ﬁª\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($v){$fe=substr($v,-1);return
str_replace($fe.$fe,$fe,substr($v,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($cg,$Rc=false){if(get_magic_quotes_gpc()){while(list($z,$X)=each($cg)){foreach($X
as$Vd=>$W){unset($cg[$z][$Vd]);if(is_array($W)){$cg[$z][stripslashes($Vd)]=$W;$cg[]=&$cg[$z][stripslashes($Vd)];}else$cg[$z][stripslashes($Vd)]=($Rc?$W:stripslashes($W));}}}}function
bracket_escape($v,$Na=false){static$ci=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($v,($Na?array_flip($ci):$ci));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
script($hh,$bi="\n"){return"<script".nonce().">$hh</script>$bi";}function
script_src($xi){return"<script src='".h($xi)."'".nonce()."></script>\n";}function
nonce(){return' nonce="'.get_nonce().'"';}function
target_blank(){return' target="_blank" rel="noopener"';}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($D,$Y,$eb,$ce="",$ff="",$jb="",$de=""){$J="<input type='checkbox' name='$D' value='".h($Y)."'".($eb?" checked":"").($de?" aria-labelledby='$de'":"").">".($ff?script("qsl('input').onclick = function () { $ff };",""):"");return($ce!=""||$jb?"<label".($jb?" class='$jb'":"").">$J".h($ce)."</label>":$J);}function
optionlist($lf,$Sg=null,$Ai=false){$J="";foreach($lf
as$Vd=>$W){$mf=array($Vd=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Vd).'">';$mf=$W;}foreach($mf
as$z=>$X)$J.='<option'.($Ai||is_string($z)?' value="'.h($z).'"':'').(($Ai||is_string($z)?(string)$z:$X)===$Sg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($D,$lf,$Y="",$ef=true,$de=""){if($ef)return"<select name='".h($D)."'".($de?" aria-labelledby='$de'":"").">".optionlist($lf,$Y)."</select>".(is_string($ef)?script("qsl('select').onchange = function () { $ef };",""):"");$J="";foreach($lf
as$z=>$X)$J.="<label><input type='radio' name='".h($D)."' value='".h($z)."'".($z==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ja,$lf,$Y="",$ef="",$Of=""){$Gh=($lf?"select":"input");return"<$Gh$Ja".($lf?"><option value=''>$Of".optionlist($lf,$Y,true)."</select>":" size='10' value='".h($Y)."' placeholder='$Of'>").($ef?script("qsl('$Gh').onchange = $ef;",""):"");}function
confirm($Ae="",$Tg="qsl('input')"){return
script("$Tg.onclick = function () { return confirm('".($Ae?js_escape($Ae):'Are you sure?')."'); };","");}function
print_fieldset($u,$ke,$Li=false){echo"<fieldset><legend>","<a href='#fieldset-$u'>$ke</a>",script("qsl('a').onclick = partial(toggle, 'fieldset-$u');",""),"</legend>","<div id='fieldset-$u'".($Li?"":" class='hidden'").">\n";}function
bold($Va,$jb=""){return($Va?" class='active $jb'":($jb?" class='$jb'":""));}function
odd($J=' class="odd"'){static$t=0;if(!$J)$t=-1;return($t++%2?$J:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($z,$X=null){static$Sc=true;if($Sc)echo"{";if($z!=""){echo($Sc?"":",")."\n\t\"".addcslashes($z,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Sc=false;}else{echo"\n}\n";$Sc=true;}}function
ini_bool($Hd){$X=ini_get($Hd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($Hi,$N,$V,$G){$_SESSION["pwds"][$Hi][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($Q){global$g;return$g->quote($Q);}function
get_vals($H,$e=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$h=null,$Ph=0,$bh=true){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$Ph;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row()){if($bh)$J[$K[0]]=$K[1];else$J[]=$K[0];}}return$J;}function
get_rows($H,$h=null,$n="<p class='error'>"){global$g;$wb=(is_object($h)?$h:$g);$J=array();$I=$wb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
unique_array($K,$x){foreach($x
as$w){if(preg_match("~PRIMARY|UNIQUE~",$w["type"])){$J=array();foreach($w["columns"]as$z){if(!isset($K[$z]))continue
2;$J[$z]=$K[$z];}return$J;}}}function
escape_key($z){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$z,$C))return$C[1].idf_escape(idf_unescape($C[2])).$C[3];return
idf_escape($z);}function
where($Z,$p=array()){global$g,$y;$J=array();foreach((array)$Z["where"]as$z=>$X){$z=bracket_escape($z,1);$e=escape_key($z);$J[]=$e.($y=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($y=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($p[$z],q($X))));if($y=="sql"&&preg_match('~char|text~',$p[$z]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$e = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$z)$J[]=escape_key($z)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$p=array()){parse_str($X,$cb);remove_slashes(array(&$cb));return
where($cb,$p);}function
where_link($t,$e,$Y,$hf="="){return"&where%5B$t%5D%5Bcol%5D=".urlencode($e)."&where%5B$t%5D%5Bop%5D=".urlencode(($Y!==null?$hf:"IS NULL"))."&where%5B$t%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$p,$M=array()){$J="";foreach($f
as$z=>$X){if($M&&!in_array(idf_escape($z),$M))continue;$Ga=convert_field($p[$z]);if($Ga)$J.=", $Ga AS ".idf_escape($z);}return$J;}function
cookiem($D,$Y,$ne=2592000){global$ba;return
header("Set-Cookie: $D=".urlencode($Y).($ne?"; expires=".gmdate("D, d M Y H:i:s",time()+$ne)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($z){return$_SESSION[$z][DRIVER][SERVER][$_GET["username"]];}function
set_session($z,$X){$_SESSION[$z][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Hi,$N,$V,$m=null){global$cc;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($cc))."|username|".($m!==null?"db|":"").session_name()),$C);return"$C[1]?".(sid()?SID."&":"").($Hi!="server"||$N!=""?urlencode($Hi)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($C[2]?"&$C[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirectm($B,$Ae=null){if($Ae!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($B!==null?$B:$_SERVER["REQUEST_URI"]))][]=$Ae;}if($B!==null){if($B=="")$B=".";header("Location: $B");exit;}}function
query_redirect($H,$B,$Ae,$pg=true,$Ac=true,$Kc=false,$Oh=""){global$g,$n,$b;if($Ac){$oh=microtime(true);$Kc=!$g->query($H);$Oh=format_time($oh);}$lh="";if($H)$lh=$b->messageQuery($H,$Oh);if($Kc){$n=error().$lh.script("messagesPrint();");return
false;}if($pg)redirectm($B,$Ae.$lh);return
true;}function
queries($H){global$g;static$ig=array();static$oh;if(!$oh)$oh=microtime(true);if($H===null)return
array(implode("\n",$ig),format_time($oh));$ig[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$g->query($H);}function
apply_queries($H,$T,$xc='table'){foreach($T
as$R){if(!queries("$H ".$xc($R)))return
false;}return
true;}function
queries_redirect($B,$Ae,$pg){list($ig,$Oh)=queries(null);return
query_redirect($ig,$B,$Ae,$pg,false,!$pg,$Oh);}function
format_time($oh){return
sprintf('%.3f s',max(0,microtime(true)-$oh));}function
remove_from_uri($_f=""){return
substr(preg_replace("~(?<=[?&])($_f".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$Hb){return" ".($F==$Hb?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($F+1)."</a>");}function
get_file($z,$Pb=false){$Qc=$_FILES[$z];if(!$Qc)return
null;foreach($Qc
as$z=>$X)$Qc[$z]=(array)$X;$J='';foreach($Qc["error"]as$z=>$n){if($n)return$n;$D=$Qc["name"][$z];$Wh=$Qc["tmp_name"][$z];$yb=file_get_contents($Pb&&preg_match('~\\.gz$~',$D)?"compress.zlib://$Wh":$Wh);if($Pb){$oh=substr($yb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$oh,$vg))$yb=iconv("utf-16","utf-8",$yb);elseif($oh=="\xEF\xBB\xBF")$yb=substr($yb,3);$J.=$yb."\n\n";}else$J.=$yb;}return$J;}function
upload_error($n){$ye=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?'Unable to upload a file.'.($ye?" ".sprintf('Maximum allowed file size is %sB.',$ye):""):'File does not exist.');}function
repeat_pattern($Mf,$le){return
str_repeat("$Mf{0,65535}",$le/65535)."$Mf{0,".($le%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$le=80,$vh=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$le).")($)?)u",$Q,$C))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$le).")($)?)",$Q,$C);return
h($C[1]).$vh.(isset($C[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",','),preg_split('~~u','0123456789',-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($cg,$yd=array()){while(list($z,$X)=each($cg)){if(!in_array($z,$yd)){if(is_array($X)){foreach($X
as$Vd=>$W)$cg[$z."[$Vd]"]=$W;}else
echo'<input type="hidden" name="'.h($z).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Lc=false){$J=table_status($R,$Lc);return($J?$J:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$r){foreach($r["source"]as$X)$J[$X][]=$r;}return$J;}function
enum_input($U,$Ja,$o,$Y,$rc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$te);$J=($rc!==null?"<label><input type='$U'$Ja value='$rc'".((is_array($Y)?in_array($rc,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($te[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$eb=(is_int($Y)?$Y==$t+1:(is_array($Y)?in_array($t+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ja value='".($t+1)."'".($eb?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
inputm($o,$Y,$s){global$g,$ni,$b,$y;$D=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$s){$Ea=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ea[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ea);$s="json";}$zg=($y=="mssql"&&$o["auto_increment"]);if($zg&&!$_POST["save"])$s=null;$gd=(isset($_GET["select"])||$zg?array("orig"=>'original'):array())+$b->editFunctions($o);$Ja=" name='fields[$D]'";if($o["type"]=="enum")echo
nbsp($gd[""])."<td>".$b->editInput($_GET["edit"],$o,$Ja,$Y);else{$od=(in_array($s,$gd)||isset($gd[$s]));echo(count($gd)>1?"<select name='function[$D]'>".optionlist($gd,$s===null||$od?$s:"")."</select>".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).script("qsl('select').onchange = functionChange;",""):nbsp(reset($gd))).'<td>';$Jd=$b->editInput($_GET["edit"],$o,$Ja,$Y);if($Jd!="")echo$Jd;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ja value='0'>"."<input type='checkbox'".(preg_match('~^(1|t|true|y|yes|on)$~i',$Y)?" checked='checked'":"")."$Ja value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$te);foreach($te[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$eb=(is_int($Y)?($Y>>$t)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$D][$t]' value='".(1<<$t)."'".($eb?' checked':'').">".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'>";elseif(($Mh=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($Mh&&$y!="sqlite")$Ja.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ja.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ja>".h($Y).'</textarea>';}elseif($s=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ja cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$_e=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$C)?((preg_match("~binary~",$o["type"])?2:1)*$C[1]+($C[3]?1:0)+($C[2]&&!$o["unsigned"]?1:0)):($ni[$o["type"]]?$ni[$o["type"]]+($o["unsigned"]?0:1):0));if($y=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$o["type"]))$_e+=7;echo"<input".((!$od||$s==="")&&preg_match('~(?<!o)int~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($_e?" data-maxlength='$_e'":"").(preg_match('~char|binary~',$o["type"])&&$_e>20?" size='40'":"")."$Ja>";}echo$b->editHint($_GET["edit"],$o,$Y);$Sc=0;foreach($gd
as$z=>$X){if($z===""||!$X)break;$Sc++;}if($Sc)echo
script("mixin(qsl('td'), {onchange: partial(skipOriginal, $Sc), oninput: function () { this.onchange(); }});");}}function
process_input($o){global$b;$v=bracket_escape($o["field"]);$s=$_POST["function"][$v];$Y=$_POST["fields"][$v];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($s=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($s=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($s=="json"){$s="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Qc=get_file("fields-$v");if(!is_string($Qc))return
false;return
q($Qc);}return$b->processInput($o,$Y,$s);}function
fields_from_edit(){global$bc;$J=array();foreach((array)$_POST["field_keys"]as$z=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$z];$_POST["fields"][$X]=$_POST["field_vals"][$z];}}foreach((array)$_POST["fields"]as$z=>$X){$D=bracket_escape($z,1);$J[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($z==$bc->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["val"]=$_POST["query"];$bd=false;foreach(table_status('',true)as$R=>$S){$D=$b->tableName($S);if(isset($S["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){if(!$bd){echo"<ul>\n";$bd=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($bd?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($wd,$Je=false){global$b;$J=$b->dumpHeaders($wd,$Je);$yf=$_POST["output"];if($yf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($wd).".$J".($yf!="file"&&!preg_match('~[^0-9a-z]~',$yf)?".$yf":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$z=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$z]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($s,$e){return($s?($s=="unixepoch"?"DATETIME($e, '$s')":($s=="count distinct"?"COUNT(DISTINCT ":strtoupper("$s("))."$e)"):$e);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$q=@tempnam("","");if(!$q)return
false;$J=dirname($q);unlink($q);}}return$J;}function
file_open_lock($q){$dd=@fopen($q,"r+");if(!$dd){$dd=@fopen($q,"w");if(!$dd)return;chmod($q,0660);}flock($dd,LOCK_EX);return$dd;}function
file_write_unlock($dd,$Jb){rewind($dd);fwrite($dd,$Jb);ftruncate($dd,strlen($Jb));flock($dd,LOCK_UN);fclose($dd);}function
password_file($i){$q=get_temp_dir()."/adminer.key";$J=@file_get_contents($q);if($J||!$i)return$J;$dd=@fopen($q,"w");if($dd){chmod($q,0660);$J=rand_string();fwrite($dd,$J);fclose($dd);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$A,$o,$Nh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Vd=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Vd):"")."<td>".select_value($W,$A,$o,$Nh);return"<table cellspacing='0'>$J</table>";}if(!$A)$A=$b->selectLink($X,$o);if($A===null){if(is_mail($X))$A="mailto:$X";if($fg=is_url($X))$A=(($fg=="http"&&$ba)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$o);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($Nh!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$Nh));else$J=h($J);}return$b->selectVal($J,$A,$o,$X);}function
is_mail($oc){$Ha='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$ac='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Mf="$Ha+(\\.$Ha+)*@($ac?\\.)+$ac";return
is_string($oc)&&preg_match("(^$Mf(,\\s*$Mf)*\$)i",$oc);}function
is_url($Q){$ac='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($ac?\\.)+$ac(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$C)?strtolower($C[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea~',$o["type"]);}function
count_rows($R,$Z,$Pd,$jd){global$y;$H=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Pd&&($y=="sql"||count($jd)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$jd).")$H":"SELECT COUNT(*)".($Pd?" FROM (SELECT 1$H$kd) x":$H));}function
slow_query($H){global$b,$Yh;$m=$b->database();$Ph=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($m==""||$h->select_db($m))){$ae=$h->result(connection_id());echo'<script',nonce(),'>
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'kill=',$ae,'&token=',$Yh,'\');
}, ',1000*$Ph,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$Ph,false);if($h){echo
script("clearTimeout(timeout);");ob_flush();flush();}return$J;}function
get_token(){$lg=rand(1,1e6);return($lg^$_SESSION["token"]).":$lg";}function
verify_token(){list($Yh,$lg)=explode(":",$_POST["token"]);return($lg^$_SESSION["token"])==$Yh;}function
lzw_decompress($Ra){$Wb=256;$Sa=8;$lb=array();$Ag=0;$Bg=0;for($t=0;$t<strlen($Ra);$t++){$Ag=($Ag<<8)+ord($Ra[$t]);$Bg+=8;if($Bg>=$Sa){$Bg-=$Sa;$lb[]=$Ag>>$Bg;$Ag&=(1<<$Bg)-1;$Wb++;if($Wb>>$Sa)$Sa++;}}$Vb=range("\0","\xFF");$J="";foreach($lb
as$t=>$kb){$nc=$Vb[$kb];if(!isset($nc))$nc=$Ui.$Ui[0];$J.=$nc;if($t)$Vb[]=$Ui.$nc[0];$Ui=$nc;}return$J;}function
on_help($rb,$ch=0){return
script("mixin(qsl('select, input'), {onmouseover: function (event) { helpMouseover.call(this, event, $rb, $ch) }, onmouseout: helpMouseout});","");}function
edit_form($a,$p,$K,$vi){global$b,$y,$Yh,$n;$_h=$b->tableName(table_status1($a,true));page_header(($vi?'Edit':'Insert'),$n,array("select"=>array($a,$_h)),$_h);if($K===false)echo"<p class='error'>".'No rows.'."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0'>".script("qsl('table').onkeydown = editingKeydown;");foreach($p
as$D=>$o){echo"<tr><th>".$b->fieldName($o);$Qb=$_GET["set"][bracket_escape($D)];if($Qb===null){$Qb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Qb,$vg))$Qb=$vg[1];}$Y=($K!==null?($K[$D]!=""&&$y=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$D])?array_sum($K[$D]):+$K[$D]):$K[$D]):(!$vi&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Qb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$s=($_POST["save"]?(string)$_POST["function"][$D]:($vi&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$s="now";}inputm($o,$Y,$s);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]'>".script("qsl('input').oninput = fieldChange;")."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($vi?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n",($vi?script("qsl('input').onclick = function () { return !ajaxForm(this.form, '".'Saving'."...', this); };"):"");}}echo($vi?"<input type='submit' name='delete' value='".'Delete'."'>".confirm()."\n":($_POST||!$p?"":script("focus(qsa('td', qs('#form'))[1].firstChild);")));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Yh,'">
</form>
';}global$b,$g,$cc,$kc,$uc,$n,$gd,$ld,$ba,$Id,$y,$ca,$ee,$df,$Nf,$sh,$pd,$Yh,$ei,$ni,$ui,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_cache_limiter("");session_name("adminer_sid");$Af=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Af[]=true;call_user_func_array('session_set_cookie_params',$Af);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Rc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",17);function
get_lang(){return'en';}function
lang($di,$Ue=null){if(is_array($di)){$Qf=($Ue==1?0:1);$di=$di[$Qf];}$di=str_replace("%d","%s",$di);$Ue=format_number($Ue);return
sprintf($di,$Ue);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Qf=array_search("SQL",$b->operators);if($Qf!==false)unset($b->operators[$Qf]);}function
dsn($hc,$V,$G){try{parent::__construct($hc,$V,$G);}catch(Exception$zc){auth_error(h($zc->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($H,$oi=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$cc=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($R,$M,$Z,$jd,$nf=array(),$_=1,$F=0,$Yf=false){global$b,$y;$Pd=(count($jd)<count($M));$H=$b->selectQueryBuild($M,$Z,$jd,$nf,$_,$F);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&$_!=""&&$jd&&$Pd&&$y=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($jd&&$Pd?"\nGROUP BY ".implode(", ",$jd):"").($nf?"\nORDER BY ".implode(", ",$nf):""),($_!=""?+$_:null),($F?$_*$F:0),"\n");$oh=microtime(true);$J=$this->_conn->query($H);if($Yf)echo$b->selectQuery($H,format_time($oh));return$J;}function
delete($R,$jg,$_=0){$H="FROM ".table($R);return
queries("DELETE".($_?limit1($H,$jg):" $H$jg"));}function
update($R,$O,$jg,$_=0,$Vg="\n"){$Fi=array();foreach($O
as$z=>$X)$Fi[]="$z = $X";$H=table($R)." SET$Vg".implode(",$Vg",$Fi);return
queries("UPDATE".($_?limit1($H,$jg):" $H$jg"));}function
insert($R,$O){return
queries("INSERT INTO ".table($R).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($R,$L,$Wf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$cc["sqlite"]="SQLite 3";$cc["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Tf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($q){$this->_link=new
SQLite3($q);$Ii=$this->_link->version();$this->server_info=$Ii["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($q){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($q);}function
query($H,$oi=false){$Ge=($oi?"unbufferedQuery":"query");$I=@$this->_link->$Ge($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$z=>$X)$J[($z[0]=='"'?idf_unescape($z):$z)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$D=$this->_result->fieldName($this->_offset++);$Mf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Mf\\.)?$Mf\$~",$D,$C)){$R=($C[3]!=""?$C[3]:idf_unescape($C[2]));$D=($C[5]!=""?$C[5]:idf_unescape($C[4]));}return(object)array("name"=>$D,"orgname"=>$D,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($q){$this->dsn(DRIVER.":$q","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");$this->query("PRAGMA foreign_keys = 1");}function
select_db($q){if(is_readable($q)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$q)?$q:dirname($_SERVER["SCRIPT_FILENAME"])."/$q")." AS a")){parent::__construct($q);$this->query("PRAGMA foreign_keys = 1");return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Wf){$Fi=array();foreach($L
as$O)$Fi[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$Fi));}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$_,$E=0,$Vg=" "){return" $H$Z".($_!==null?$Vg."LIMIT $_".($E?" OFFSET $E":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($m,$ob){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($D=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($D!=""?$J[$D]:$J);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$g;$J=array();$Wf="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$K){$D=$K["name"];$U=strtolower($K["type"]);$Qb=$K["dflt_value"];$J[$D]=array("field"=>$D,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Qb,$C)?str_replace("''","'",$C[1]):($Qb=="NULL"?null:$Qb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($Wf!="")$J[$Wf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$D]["auto_increment"]=true;$Wf=$D;}}$lh=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$lh,$te,PREG_SET_ORDER);foreach($te
as$C){$D=str_replace('""','"',preg_replace('~^"|"$~','',$C[1]));if($J[$D])$J[$D]["collation"]=trim($C[3],"'");}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$lh=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$lh,$C)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$C[1],$te,PREG_SET_ORDER);foreach($te
as$C){$J[""]["columns"][]=idf_unescape($C[2]).$C[4];$J[""]["descs"][]=(preg_match('~DESC~i',$C[5])?'1':null);}}if(!$J){foreach(fields($R)as$D=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($D),"lengths"=>array(),"descs"=>array(null));}}$nh=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$h);foreach(get_rows("PRAGMA index_list(".table($R).")",$h)as$K){$D=$K["name"];$w=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$w["lengths"]=array();$w["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($D).")",$h)as$Kg){$w["columns"][]=$Kg["name"];$w["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($D).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$nh[$D],$vg)){preg_match_all('/("[^"]*+")+( DESC)?/',$vg[2],$te);foreach($te[2]as$z=>$X){if($X)$w["descs"][$z]='1';}}if(!$J[""]||$w["type"]!="UNIQUE"||$w["columns"]!=$J[""]["columns"]||$w["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$D))$J[$D]=$w;}return$J;}function
foreign_keys($R){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$K){$r=&$J[$K["id"]];if(!$r)$r=$K;$r["source"][]=$K["from"];$r["target"][]=$K["to"];}return$J;}function
viewm($D){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($D))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($D){global$g;$Ic="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Ic)\$~",$D)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$Ic));return
false;}return
true;}function
create_database($m,$d){global$g;if(file_exists($m)){$g->error='File exists.';return
false;}if(!check_sqlite_name($m))return
false;try{$A=new
Min_SQLite($m);}catch(Exception$zc){$g->error=$zc->getMessage();return
false;}$A->query('PRAGMA encoding = "UTF-8"');$A->query('CREATE TABLE adminer (i)');$A->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$g;$g->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($D,$d){global$g;if(!check_sqlite_name($D))return
false;$g->__construct(":memory:");$g->error='File exists.';return@rename(DB,$D);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$D,$p,$Xc,$tb,$sc,$d,$La,$Gf){$_i=($R==""||$Xc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$_i=true;break;}}$c=array();$wf=array();foreach($p
as$o){if($o[1]){$c[]=($_i?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$wf[$o[0]]=$o[1][0];}}if(!$_i){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$D&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)))return
false;}elseif(!recreate_table($R,$D,$c,$wf,$Xc))return
false;if($La)queries("UPDATE sqlite_sequence SET seq = $La WHERE name = ".q($D));return
true;}function
recreate_table($R,$D,$p,$wf,$Xc,$x=array()){if($R!=""){if(!$p){foreach(fields($R)as$z=>$o){$p[]=process_field($o,$o);$wf[$z]=idf_escape($z);}}$Xf=false;foreach($p
as$o){if($o[6])$Xf=true;}$fc=array();foreach($x
as$z=>$X){if($X[2]=="DROP"){$fc[$X[1]]=true;unset($x[$z]);}}foreach(indexes($R)as$Yd=>$w){$f=array();foreach($w["columns"]as$z=>$e){if(!$wf[$e])continue
2;$f[]=$wf[$e].($w["descs"][$z]?" DESC":"");}if(!$fc[$Yd]){if($w["type"]!="PRIMARY"||!$Xf)$x[]=array($w["type"],$Yd,$f);}}foreach($x
as$z=>$X){if($X[0]=="PRIMARY"){unset($x[$z]);$Xc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Yd=>$r){foreach($r["source"]as$z=>$e){if(!$wf[$e])continue
2;$r["source"][$z]=idf_unescape($wf[$e]);}if(!isset($Xc[" $Yd"]))$Xc[]=" ".format_foreign_key($r);}queries("BEGIN");}foreach($p
as$z=>$o)$p[$z]="  ".implode($o);$p=array_merge($p,array_filter($Xc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$D":$D)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($wf&&!queries("INSERT INTO ".table("adminer_$D")." (".implode(", ",$wf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($wf)))." FROM ".table($R)))return
false;$ki=array();foreach(triggers($R)as$ii=>$Qh){$hi=trigger($ii);$ki[]="CREATE TRIGGER ".idf_escape($ii)." ".implode(" ",$Qh)." ON ".table($D)."\n$hi[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$D")." RENAME TO ".table($D));if(!alter_indexes($D,$x))return
false;foreach($ki
as$hi){if(!queries($hi))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$D,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($D!=""?$D:uniqid($R."_"))." ON ".table($R)." $f";}function
alter_indexes($R,$c){foreach($c
as$Wf){if($Wf[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($Ki){return
apply_queries("DROP VIEW",$Ki);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$Ki,$Hh){return
false;}function
trigger($D){global$g;if($D=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$v='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$ji=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$v\\s*(".implode("|",$ji["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($v))?\\s+ON\\s*$v\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($D)),$C);$We=$C[3];return
array("Timing"=>strtoupper($C[1]),"Event"=>strtoupper($C[2]).($We?" OF":""),"Of"=>($We[0]=='`'||$We[0]=='"'?idf_unescape($We):$We),"Trigger"=>$D,"Statement"=>$C[4],);}function
triggers($R){$J=array();$ji=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$ji["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$C);$J[$K["name"]]=array($C[1],$C[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN QUERY PLAN $H");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Og){return
true;}function
create_sql($R,$La,$th){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$D=>$w){if($D=='')continue;$J.=";\n\n".index_sql($R,$w['type'],$D,"(".implode(", ",array_map('idf_escape',$w['columns'])).")");}return$J;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$z)$J[$z]=$g->result("PRAGMA $z");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$kf){list($z,$X)=explode("=",$kf,2);$J[$z]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Mc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Mc);}$y="sqlite";$ni=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$sh=array_keys($ni);$ui=array();$if=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$gd=array("hex","length","lower","round","unixepoch","upper");$ld=array("avg","count","count distinct","group_concat","max","min","sum");$kc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$cc["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Tf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($vc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Ii=pg_version($this->_link);$this->server_info=$Ii["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$oi=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$e);$J->name=pg_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$e);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Wf){global$g;foreach($L
as$O){$vi=array();$Z=array();foreach($O
as$z=>$X){$vi[]="$z = $X";if(isset($Wf[idf_unescape($z)]))$Z[]="$z = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$vi)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$b,$ni,$sh;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if($g->server_info>=9){$g->query("SET application_name = 'Adminer'");if($g->server_info>=9.2){$sh['Strings'][]="json";$ni["json"]=4294967295;if($g->server_info>=9.4){$sh['Strings'][]="jsonb";$ni["jsonb"]=4294967295;}}}return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($H,$Z,$_,$E=0,$Vg=" "){return" $H$Z".($_!==null?$Vg."LIMIT $_".($E?" OFFSET $E":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$ob){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$H="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$H.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$H.="
ORDER BY 1";return
get_key_vals($H);}function
count_tables($l){return
array();}function
table_status($D=""){$J=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", c.relhasoids::int AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v', 'f')
".($D!=""?"AND relname = ".q($D):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($D!=""?$J[$D]:$J);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$J=array();$Ca=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$C);list(,$U,$le,$K["length"],$wa,$Fa)=$C;$K["length"].=$Fa;$db=$U.$wa;if(isset($Ca[$db])){$K["type"]=$Ca[$db];$K["full_type"]=$K["type"].$le.$Fa;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$le.$wa.$Fa;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$C))$K["default"]=($C[1]=="NULL"?null:(($C[1][0]=="'"?idf_unescape($C[1]):$C[1]).$C[2]));$J[$K["field"]]=$K;}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Ah=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ah AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $Ah AND ci.oid = i.indexrelid",$h)as$K){$wg=$K["relname"];$J[$wg]["type"]=($K["indispartial"]?"INDEX":($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX")));$J[$wg]["columns"]=array();foreach(explode(" ",$K["indkey"])as$Ed)$J[$wg]["columns"][]=$f[$Ed];$J[$wg]["descs"]=array();foreach(explode(" ",$K["indoption"])as$Fd)$J[$wg]["descs"][]=($Fd&1?'1':null);$J[$wg]["lengths"]=array();}return$J;}function
foreign_keys($R){global$df;$J=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$C)){$K['source']=array_map('trim',explode(',',$C[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$C[2],$se)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$se[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$se[4]));}$K['target']=array_map('trim',explode(',',$C[3]));$K['on_delete']=(preg_match("~ON DELETE ($df)~",$C[4],$se)?$se[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($df)~",$C[4],$se)?$se[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
viewm($D){global$g;return
array("select"=>trim($g->result("SELECT pg_get_viewdef(".q($D).")")));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$C))$J=$C[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($C[3]).'})(.*)~','\\1<b>\\2</b>',$C[2]).$C[4];return
nl_br($J);}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($l){global$g;$g->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($D,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($D));}function
auto_increment(){return"";}function
alter_table($R,$D,$p,$Xc,$tb,$sc,$d,$La,$Gf){$c=array();$ig=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $e";else{$Ei=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$ig[]="ALTER TABLE ".table($R)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Ei!="")$ig[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Ei!=""?substr($Ei,9):"''");}}$c=array_merge($c,$Xc);if($R=="")array_unshift($ig,"CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($ig,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$D)$ig[]="ALTER TABLE ".table($R)." RENAME TO ".table($D);if($R!=""||$tb!="")$ig[]="COMMENT ON TABLE ".table($D)." IS ".q($tb);if($La!=""){}foreach($ig
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($R,$c){$i=array();$dc=array();$ig=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$dc[]=idf_escape($X[1]);else$ig[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($i)array_unshift($ig,"ALTER TABLE ".table($R).implode(",",$i));if($dc)array_unshift($ig,"DROP INDEX ".implode(", ",$dc));foreach($ig
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($Ki){return
drop_tables($Ki);}function
drop_tables($T){foreach($T
as$R){$P=table_status($R);if(!queries("DROP ".strtoupper($P["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$Ki,$Hh){foreach(array_merge($T,$Ki)as$R){$P=table_status($R);if(!queries("ALTER ".strtoupper($P["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($Hh)))return
false;}return
true;}function
trigger($D,$R=null){if($D=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$L=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($D));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$K)$J[$K["trigger_name"]]=array($K["action_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($S,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$vg))return$vg[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Ng){global$g,$ni,$sh;$J=$g->query("SET search_path TO ".idf_escape($Ng));foreach(types()as$U){if(!isset($ni[$U])){$ni[$U]=0;$sh['User types'][]=$U;}}return$J;}function
create_sql($R,$La,$th){global$g;$J='';$Dg=array();$Xg=array();$P=table_status($R);$p=fields($R);$x=indexes($R);ksort($x);$Vc=foreign_keys($R);ksort($Vc);if(!$P||empty($p))return
false;$J="CREATE TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." (\n    ";foreach($p
as$Oc=>$o){$Df=idf_escape($o['field']).' '.$o['full_type'].(is_null($o['default'])?"":" DEFAULT $o[default]").($o['attnotnull']?" NOT NULL":"");$Dg[]=$Df;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$te)){$Wg=$te[1];$kh=reset(get_rows("SELECT * FROM $Wg"));$Xg[]=($th=="DROP+CREATE"?"DROP SEQUENCE $Wg;\n":"")."CREATE SEQUENCE $Wg INCREMENT $kh[increment_by] MINVALUE $kh[min_value] MAXVALUE $kh[max_value] START ".($La?$kh['last_value']:1)." CACHE $kh[cache_value];";}}if(!empty($Xg))$J=implode("\n\n",$Xg)."\n\n$J";foreach($x
as$_d=>$w){switch($w['type']){case'UNIQUE':$Dg[]="CONSTRAINT ".idf_escape($_d)." UNIQUE (".implode(', ',array_map('idf_escape',$w['columns'])).")";break;case'PRIMARY':$Dg[]="CONSTRAINT ".idf_escape($_d)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$w['columns'])).")";break;}}foreach($Vc
as$Uc=>$Tc)$Dg[]="CONSTRAINT ".idf_escape($Uc)." $Tc[definition] ".($Tc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$J.=implode(",\n    ",$Dg)."\n) WITH (oids = ".($P['Oid']?'true':'false').");";foreach($x
as$_d=>$w){if($w['type']=='INDEX')$J.="\n\nCREATE INDEX ".idf_escape($_d)." ON ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." USING btree (".implode(', ',array_map('idf_escape',$w['columns'])).");";}if($P['Comment'])$J.="\n\nCOMMENT ON TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." IS ".q($P['Comment']).";";foreach($p
as$Oc=>$o){if($o['comment'])$J.="\n\nCOMMENT ON COLUMN ".idf_escape($P['nspname']).".".idf_escape($P['Name']).".".idf_escape($Oc)." IS ".q($o['comment']).";";}return
rtrim($J,';');}function
trigger_sql($R){$P=table_status($R);$J="";foreach(triggers($R)as$gi=>$fi){$hi=trigger($gi,$P['Name']);$J.="\nCREATE TRIGGER ".idf_escape($hi['Trigger'])." $hi[Timing] $hi[Events] ON ".idf_escape($P["nspname"]).".".idf_escape($P['Name'])." $hi[Type] $hi[Statement];;\n";}return$J;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Mc){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Mc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$y="pgsql";$ni=array();$sh=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$z=>$X){$ni+=$X;$sh[$z]=array_keys($X);}$ui=array();$if=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$gd=array("char_length","lower","round","to_hex","to_timestamp","upper");$ld=array("avg","count","count distinct","max","min","sum");$kc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$cc["oracle"]="Oracle";if(isset($_GET["oracle"])){$Tf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($vc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($H,$oi=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$z=>$X){if(is_a($X,'OCI-Lob'))$K[$z]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$e);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$_,$E=0,$Vg=" "){return($E?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($_+$E).") WHERE rnum > $E":($_!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($_+$E):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$ob){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($D=""){$J=array();$Pg=q($D);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($D!=""?" AND table_name = $Pg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($D!=""?" WHERE view_name = $Pg":"")."
ORDER BY 1")as$K){if($D!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$le="$K[DATA_PRECISION],$K[DATA_SCALE]";if($le==",")$le=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($le?"($le)":""),"type"=>strtolower($U),"length"=>$le,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$_d=$K["INDEX_NAME"];$J[$_d]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$_d]["columns"][]=$K["COLUMN_NAME"];$J[$_d]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$_d]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
viewm($D){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($D));return
reset($L);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$D,$p,$Xc,$tb,$sc,$d,$La,$Gf){$c=$dc=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$dc[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$dc||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$dc).")"))&&($R==$D||queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)));}function
foreign_keys($R){$J=array();$H="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($H)as$K)$J[$K['NAME']]=array("db"=>$K['DEST_DB'],"table"=>$K['DEST_TABLE'],"source"=>array($K['SRC_COLUMN']),"target"=>array($K['DEST_COLUMN']),"on_delete"=>$K['ON_DELETE'],"on_update"=>null,);return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Ki){return
apply_queries("DROP VIEW",$Ki);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Og){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Og));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Mc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Mc);}$y="oracle";$ni=array();$sh=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$z=>$X){$ni+=$X;$sh[$z]=array_keys($X);}$ui=array();$if=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$gd=array("length","lower","round","upper");$ld=array("avg","count","count distinct","max","min","sum");$kc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$cc["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Tf=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$Gd=sqlsrv_server_info($this->_link);$this->server_info=$Gd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$oi=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(!$I)return
false;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$z=>$X){if(is_a($X,'DateTime'))$K[$z]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$o["Name"];$J->orgname=$o["Name"];$J->type=($o["Type"]==1?254:0);return$J;}function
seek($E){for($t=0;$t<$E;$t++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($H,$oi=false){$I=@mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($E){mssql_data_seek($this->_result,$E);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($N,$V,$G){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Wf){foreach($L
as$O){$vi=array();$Z=array();foreach($O
as$z=>$X){$vi[]="$z = $X";if(isset($Wf[idf_unescape($z)]))$Z[]="$z = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$vi)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($v){return"[".str_replace("]","]]",$v)."]";}function
table($v){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($v);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($H,$Z,$_,$E=0,$Vg=" "){return($_!==null?" TOP (".($_+$E).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name = ".q($m));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$g;$J=array();foreach($l
as$m){$g->select_db($m);$J[$m]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($D=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$K){if($D!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT c.max_length, c.precision, c.scale, c.name, c.is_nullable, c.is_identity, c.collation_name, t.name type, CAST(d.definition as text) [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$K){$U=$K["type"];$le=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($le?"($le)":""),"type"=>$U,"length"=>$le,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$h)as$K){$D=$K["name"];$J[$D]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$D]["lengths"]=array();$J[$D]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$D]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
viewm($D){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($D))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$J[preg_replace('~_.*~','',$d)][]=$d;return$J;}function
information_schema($m){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($D,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($D));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$D,$p,$Xc,$tb,$sc,$d,$La,$Gf){$c=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($Xc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($R).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($D)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$D)queries("EXEC sp_rename ".q(table($R)).", ".q($D));if($Xc)$c[""]=$Xc;foreach($c
as$z=>$X){if(!queries("ALTER TABLE ".idf_escape($D)." $z".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$w=array();$dc=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$dc[]=idf_escape($X[1]);else$w[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$dc||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$dc)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($S,$Z){}function
foreign_keys($R){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$K){$r=&$J[$K["FK_NAME"]];$r["table"]=$K["PKTABLE_NAME"];$r["source"][]=$K["FKCOLUMN_NAME"];$r["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Ki){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ki)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Ki,$Hh){return
apply_queries("ALTER SCHEMA ".idf_escape($Hh)." TRANSFER",array_merge($T,$Ki));}function
trigger($D){if($D=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($D));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($R){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Ng){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Mc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Mc);}$y="mssql";$ni=array();$sh=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$z=>$X){$ni+=$X;$sh[$z]=array_keys($X);}$ui=array();$if=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$gd=array("len","lower","round","upper");$ld=array("avg","count","count distinct","max","min","sum");$kc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$cc['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Tf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$yi=explode(':',$N);$this->service_link=ibase_service_attach($yi[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return($k=="domain");}function
query($H,$oi=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($I===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases($Wc){return
array("domain");}function
limit($H,$Z,$_,$E=0,$Vg=" "){$J='';$J.=($_!==null?$Vg."FIRST $_".($E?" SKIP $E":""):"");$J.=" $H$Z";return$J;}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$g;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($g->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($l){return
array();}function
table_status($D="",$Lc=false){global$g;$J=array();$Jb=tables_list();foreach($Jb
as$w=>$X){$w=trim($w);$J[$w]=array('Name'=>$w,'Engine'=>'standard',);if($D==$w)return$J[$w];}return$J;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$g;$J=array();$H='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($R).'
ORDER BY r.RDB$FIELD_POSITION';$I=ibase_query($g->_link,$H);while($K=ibase_fetch_assoc($I))$J[trim($K['FIELD_NAME'])]=array("field"=>trim($K["FIELD_NAME"]),"full_type"=>trim($K["FIELD_TYPE"]),"type"=>trim($K["FIELD_SUB_TYPE"]),"default"=>trim($K['FIELD_DEFAULT_VALUE']),"null"=>(trim($K["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($K["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($K["FIELD_DESCRIPTION"]),);return$J;}function
indexes($R,$h=null){$J=array();return$J;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ng){return
true;}function
support($Mc){return
preg_match("~^(columns|sql|status|table)$~",$Mc);}$y="firebird";$if=array("=");$gd=array();$ld=array();$kc=array();}$cc["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Tf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($H,$oi=false){$Af=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$Af['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$Af,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$wh=0;foreach($I
as$Td)$wh+=$Td->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$wh,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($I){foreach($I
as$Td){$K=array();if($Td->Name!='')$K['itemName()']=(string)$Td->Name;foreach($Td->Attribute
as$Ia){$D=$this->_processValue($Ia->Name);$Y=$this->_processValue($Ia->Value);if(isset($K[$D])){$K[$D]=(array)$K[$D];$K[$D][]=$Y;}else$K[$D]=$Y;}$this->_rows[]=$K;foreach($K
as$z=>$X){if(!isset($this->_rows[0][$z]))$this->_rows[0][$z]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($nc){return(is_object($nc)&&$nc['encoding']=='base64'?base64_decode($nc):(string)$nc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$z=>$X)$J[$z]=$K[$z];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Zd=array_keys($this->_rows[0]);return(object)array('name'=>$Zd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Wf="itemName()";function
_chunkRequest($xd,$va,$Af,$Cc=array()){global$g;foreach(array_chunk($xd,25)as$hb){$Bf=$Af;foreach($hb
as$t=>$u){$Bf["Item.$t.ItemName"]=$u;foreach($Cc
as$z=>$X)$Bf["Item.$t.$z"]=$X;}if(!sdb_request($va,$Bf))return
false;}$g->affected_rows=count($xd);return
true;}function
_extractIds($R,$jg,$_){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$jg,$te))$J=array_map('idf_unescape',$te[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$jg.($_?" LIMIT 1":"")))as$Td)$J[]=$Td->Name;}return$J;}function
select($R,$M,$Z,$jd,$nf=array(),$_=1,$F=0,$Yf=false){global$g;$g->next=$_GET["next"];$J=parent::select($R,$M,$Z,$jd,$nf,$_,$F,$Yf);$g->next=0;return$J;}function
delete($R,$jg,$_=0){return$this->_chunkRequest($this->_extractIds($R,$jg,$_),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$O,$jg,$_=0,$Vg="\n"){$Rb=array();$Kd=array();$t=0;$xd=$this->_extractIds($R,$jg,$_);$u=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$z=>$X){$z=idf_unescape($z);if($X=="NULL"||($u!=""&&array($u)!=$xd))$Rb["Attribute.".count($Rb).".Name"]=$z;if($X!="NULL"){foreach((array)$X
as$Vd=>$W){$Kd["Attribute.$t.Name"]=$z;$Kd["Attribute.$t.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Vd)$Kd["Attribute.$t.Replace"]="true";$t++;}}}$Af=array('DomainName'=>$R);return(!$Kd||$this->_chunkRequest(($u!=""?array($u):$xd),'BatchPutAttributes',$Af,$Kd))&&(!$Rb||$this->_chunkRequest($xd,'BatchDeleteAttributes',$Af,$Rb));}function
insert($R,$O){$Af=array("DomainName"=>$R);$t=0;foreach($O
as$D=>$Y){if($Y!="NULL"){$D=idf_unescape($D);if($D=="itemName()")$Af["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$Af["Attribute.$t.Name"]=$D;$Af["Attribute.$t.Value"]=(is_array($Y)?$X:idf_unescape($Y));$t++;}}}}return
sdb_request('PutAttributes',$Af);}function
insertUpdate($R,$L,$Wf){foreach($L
as$O){if(!$this->update($R,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Mc){return
preg_match('~sql~',$Mc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$ob){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$J[(string)$R]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($D="",$Lc=false){$J=array();foreach(($D!=""?array($D=>true):tables_list())as$R=>$U){$K=array("Name"=>$R,"Auto_increment"=>"");if(!$Lc){$Fe=sdb_request('DomainMetadata',array('DomainName'=>$R));if($Fe){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$z=>$X)$K[$z]=(string)$Fe->$X;}}if($D!="")return$K;$J[$R]=$K;}return$J;}function
explain($g,$H){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($v){return
idf_escape($v);}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
limit($H,$Z,$_,$E=0,$Vg=" "){return" $H$Z".($_!==null?$Vg."LIMIT $_":"");}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$D,$p,$Xc,$tb,$sc,$d,$La,$Gf){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$D)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Ba,$Jb,$z,$ng=false){$Ua=64;if(strlen($z)>$Ua)$z=pack("H*",$Ba($z));$z=str_pad($z,$Ua,"\0");$Wd=$z^str_repeat("\x36",$Ua);$Xd=$z^str_repeat("\x5C",$Ua);$J=$Ba($Xd.pack("H*",$Ba($Wd.$Jb)));if($ng)$J=pack("H*",$J);return$J;}function
sdb_request($va,$Af=array()){global$b,$g;list($ud,$Af['AWSAccessKeyId'],$Qg)=$b->credentials();$Af['Action']=$va;$Af['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$Af['Version']='2009-04-15';$Af['SignatureVersion']=2;$Af['SignatureMethod']='HmacSHA1';ksort($Af);$H='';foreach($Af
as$z=>$X)$H.='&'.rawurlencode($z).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$ud)."\n/\n$H",$Qg,true)));@ini_set('track_errors',1);$Qc=@file_get_contents((preg_match('~^https?://~',$ud)?$ud:"http://$ud"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Qc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Vi=simplexml_load_string($Qc);if(!$Vi){$n=libxml_get_last_error();$g->error=$n->message;return
false;}if($Vi->Errors){$n=$Vi->Errors->Error;$g->error="$n->Message ($n->Code)";return
false;}$g->error='';$Gh=$va."Result";return($Vi->$Gh?$Vi->$Gh:true);}function
sdb_request_all($va,$Gh,$Af=array(),$Ph=0){$J=array();$oh=($Ph?microtime(true):0);$_=(preg_match('~LIMIT\s+(\d+)\s*$~i',$Af['SelectExpression'],$C)?$C[1]:0);do{$Vi=sdb_request($va,$Af);if(!$Vi)break;foreach($Vi->$Gh
as$nc)$J[]=$nc;if($_&&count($J)>=$_){$_GET["next"]=$Vi->NextToken;break;}if($Ph&&microtime(true)-$oh>$Ph)return
false;$Af['NextToken']=$Vi->NextToken;if($_)$Af['SelectExpression']=preg_replace('~\d+\s*$~',$_-count($J),$Af['SelectExpression']);}while($Vi->NextToken);return$J;}$y="simpledb";$if=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$gd=array();$ld=array("count");$kc=array(array("json"));}$cc["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Tf=array("mongo","mongodb");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$m=$b->database();$lf=array();if($V!=""){$lf["username"]=$V;$lf["password"]=$G;}if($m!="")$lf["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$lf);return
true;}catch(Exception$zc){$this->error=$zc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$zc){$this->error=$zc->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$Td){$K=array();foreach($Td
as$z=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$z]=63;$K[$z]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$z=>$X){if(!isset($this->_rows[0][$z]))$this->_rows[0][$z]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$z=>$X)$J[$z]=$K[$z];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Zd=array_keys($this->_rows[0]);$D=$Zd[$this->_offset++];return(object)array('name'=>$D,'charsetnr'=>$this->_charset[$D],);}}class
Min_Driver
extends
Min_SQL{public$Wf="_id";function
select($R,$M,$Z,$jd,$nf=array(),$_=1,$F=0,$Yf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$gh=array();foreach($nf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Cb);$gh[$X]=($Cb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$M)->sort($gh)->limit($_!=""?+$_:0)->skip($F*$_));}function
insert($R,$O){try{$J=$this->_conn->_db->selectCollection($R)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$zc){$this->_conn->error=$zc->getMessage();return
false;}}}function
get_databases($Wc){global$g;$J=array();$Ob=$g->_link->listDBs();foreach($Ob['databases']as$m)$J[]=$m['name'];return$J;}function
count_tables($l){global$g;$J=array();foreach($l
as$m)$J[$m]=count($g->_link->selectDB($m)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
drop_databases($l){global$g;foreach($l
as$m){$_g=$g->_link->selectDB($m)->drop();if(!$_g['ok'])return
false;}return
true;}function
indexes($R,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($R)->getIndexInfo()as$w){$Ub=array();foreach($w["key"]as$e=>$U)$Ub[]=($U==-1?'1':null);$J[$w["name"]]=array("type"=>($w["name"]=="_id_"?"PRIMARY":($w["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($w["key"]),"lengths"=>array(),"descs"=>$Ub,);}return$J;}function
fields($R){return
fields_from_edit();}function
found_rows($S,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}$if=array("=");}elseif(class_exists('MongoDB\Driver\Manager')){class
Min_DB{var$extension="MongoDB",$error,$last_id;var$_link;var$_db,$_db_name;function
connect($N,$V,$G){global$b;$m=$b->database();$lf=array();if($V!=""){$lf["username"]=$V;$lf["password"]=$G;}if($m!="")$lf["db"]=$m;try{$jb='MongoDB\Driver\Manager';$this->_link=new$jb("mongodb://$N",$lf);return
true;}catch(Exception$zc){$this->error=$zc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($k){try{$this->_db_name=$k;return
true;}catch(Exception$zc){$this->error=$zc->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$Td){$K=array();foreach($Td
as$z=>$X){if(is_a($X,'MongoDB\BSON\Binary'))$this->_charset[$z]=63;$K[$z]=(is_a($X,'MongoDB\BSON\ObjectID')?'MongoDB\BSON\ObjectID("'.strval($X).'")':(is_a($X,'MongoDB\BSON\UTCDatetime')?$X->toDateTime()->format('Y-m-d H:i:s'):(is_a($X,'MongoDB\BSON\Binary')?$X->bin:(is_a($X,'MongoDB\BSON\Regex')?strval($X):(is_object($X)?json_encode($X,256):$X)))));}$this->_rows[]=$K;foreach($K
as$z=>$X){if(!isset($this->_rows[0][$z]))$this->_rows[0][$z]=null;}}$this->num_rows=$I->count;}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$z=>$X)$J[$z]=$K[$z];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Zd=array_keys($this->_rows[0]);$D=$Zd[$this->_offset++];return(object)array('name'=>$D,'charsetnr'=>$this->_charset[$D],);}}class
Min_Driver
extends
Min_SQL{public$Wf="_id";function
select($R,$M,$Z,$jd,$nf=array(),$_=1,$F=0,$Yf=false){global$g;$M=($M==array("*")?array():array_fill_keys($M,1));if(count($M)&&!isset($M['_id']))$M['_id']=0;$Z=where_to_query($Z);$gh=array();foreach($nf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Cb);$gh[$X]=($Cb?-1:1);}if(isset($_GET['limit'])&&is_numeric($_GET['limit'])&&$_GET['limit']>0)$_=$_GET['limit'];$_=min(200,max(1,(int)$_));$eh=$F*$_;$jb='MongoDB\Driver\Query';$H=new$jb($Z,array('projection'=>$M,'limit'=>$_,'skip'=>$eh,'sort'=>$gh));$Cg=$g->_link->executeQuery("$g->_db_name.$R",$H);return
new
Min_Result($Cg);}function
update($R,$O,$jg,$_=0,$Vg="\n"){global$g;$m=$g->_db_name;$Z=sql_query_where_parser($jg);$jb='MongoDB\Driver\BulkWrite';$Ya=new$jb(array());if(isset($O['_id']))unset($O['_id']);$xg=array();foreach($O
as$z=>$Y){if($Y=='NULL'){$xg[$z]=1;unset($O[$z]);}}$vi=array('$set'=>$O);if(count($xg))$vi['$unset']=$xg;$Ya->update($Z,$vi,array('upsert'=>false));$Cg=$g->_link->executeBulkWrite("$m.$R",$Ya);$g->affected_rows=$Cg->getModifiedCount();return
true;}function
delete($R,$jg,$_=0){global$g;$m=$g->_db_name;$Z=sql_query_where_parser($jg);$jb='MongoDB\Driver\BulkWrite';$Ya=new$jb(array());$Ya->delete($Z,array('limit'=>$_));$Cg=$g->_link->executeBulkWrite("$m.$R",$Ya);$g->affected_rows=$Cg->getDeletedCount();return
true;}function
insert($R,$O){global$g;$m=$g->_db_name;$jb='MongoDB\Driver\BulkWrite';$Ya=new$jb(array());if(isset($O['_id'])&&empty($O['_id']))unset($O['_id']);$Ya->insert($O);$Cg=$g->_link->executeBulkWrite("$m.$R",$Ya);$g->affected_rows=$Cg->getInsertedCount();return
true;}}function
get_databases($Wc){global$g;$J=array();$jb='MongoDB\Driver\Command';$rb=new$jb(array('listDatabases'=>1));$Cg=$g->_link->executeCommand('admin',$rb);foreach($Cg
as$Ob){foreach($Ob->databases
as$m)$J[]=$m->name;}return$J;}function
count_tables($l){$J=array();return$J;}function
tables_list(){global$g;$jb='MongoDB\Driver\Command';$rb=new$jb(array('listCollections'=>1));$Cg=$g->_link->executeCommand($g->_db_name,$rb);$pb=array();foreach($Cg
as$I)$pb[$I->name]='table';return$pb;}function
drop_databases($l){return
false;}function
indexes($R,$h=null){global$g;$J=array();$jb='MongoDB\Driver\Command';$rb=new$jb(array('listIndexes'=>$R));$Cg=$g->_link->executeCommand($g->_db_name,$rb);foreach($Cg
as$w){$Ub=array();$f=array();foreach(get_object_vars($w->key)as$e=>$U){$Ub[]=($U==-1?'1':null);$f[]=$e;}$J[$w->name]=array("type"=>($w->name=="_id_"?"PRIMARY":(isset($w->unique)?"UNIQUE":"INDEX")),"columns"=>$f,"lengths"=>array(),"descs"=>$Ub,);}return$J;}function
fields($R){$p=fields_from_edit();if(!count($p)){global$bc;$I=$bc->select($R,array("*"),null,null,array(),10);while($K=$I->fetch_assoc()){foreach($K
as$z=>$X){$K[$z]=null;$p[$z]=array("field"=>$z,"type"=>"string","null"=>($z!=$bc->primary),"auto_increment"=>($z==$bc->primary),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1,),);}}}return$p;}function
found_rows($S,$Z){global$g;$Z=where_to_query($Z);$jb='MongoDB\Driver\Command';$rb=new$jb(array('count'=>$S['Name'],'query'=>$Z));$Cg=$g->_link->executeCommand($g->_db_name,$rb);$Xh=$Cg->toArray();return$Xh[0]->n;}function
sql_query_where_parser($jg){$jg=trim(preg_replace('/WHERE[\s]?[(]?\(?/','',$jg));$jg=preg_replace('/\)\)\)$/',')',$jg);$Si=explode(' AND ',$jg);$Ti=explode(') OR (',$jg);$Z=array();foreach($Si
as$Qi)$Z[]=trim($Qi);if(count($Ti)==1)$Ti=array();elseif(count($Ti)>1)$Z=array();return
where_to_query($Z,$Ti);}function
where_to_query($Oi=array(),$Pi=array()){global$if;$Jb=array();foreach(array('and'=>$Oi,'or'=>$Pi)as$U=>$Z){if(is_array($Z)){foreach($Z
as$Fc){list($mb,$gf,$X)=explode(" ",$Fc,3);if($mb=="_id"){$X=str_replace('MongoDB\BSON\ObjectID("',"",$X);$X=str_replace('")',"",$X);$jb='MongoDB\BSON\ObjectID';$X=new$jb($X);}if(!in_array($gf,$if))continue;if(preg_match('~^\(f\)(.+)~',$gf,$C)){$X=(float)$X;$gf=$C[1];}elseif(preg_match('~^\(date\)(.+)~',$gf,$C)){$Lb=new
DateTime($X);$jb='MongoDB\BSON\UTCDatetime';$X=new$jb($Lb->getTimestamp()*1000);$gf=$C[1];}switch($gf){case'=':$gf='$eq';break;case'!=':$gf='$ne';break;case'>':$gf='$gt';break;case'<':$gf='$lt';break;case'>=':$gf='$gte';break;case'<=':$gf='$lte';break;case'regex':$gf='$regex';break;default:continue;}if($U=='and')$Jb['$and'][]=array($mb=>array($gf=>$X));elseif($U=='or')$Jb['$or'][]=array($mb=>array($gf=>$X));}}}return$Jb;}$if=array("=","!=",">","<",">=","<=","regex","(f)=","(f)!=","(f)>","(f)<","(f)>=","(f)<=","(date)=","(date)!=","(date)>","(date)<","(date)>=","(date)<=",);}function
table($v){return$v;}function
idf_escape($v){return$v;}function
table_status($D="",$Lc=false){$J=array();foreach(tables_list()as$R=>$U){$J[$R]=array("Name"=>$R);if($D==$R)return$J[$R];}return$J;}function
last_id(){global$g;return$g->last_id;}function
error(){global$g;return
h($g->error);}function
collations(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
alter_indexes($R,$c){global$g;foreach($c
as$X){list($U,$D,$O)=$X;if($O=="DROP")$J=$g->_db->command(array("deleteIndexes"=>$R,"index"=>$D));else{$f=array();foreach($O
as$e){$e=preg_replace('~ DESC$~','',$e,1,$Cb);$f[$e]=($Cb?-1:1);}$J=$g->_db->selectCollection($R)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$D,));}if($J['errmsg']){$g->error=$J['errmsg'];return
false;}}return
true;}function
support($Mc){return
preg_match("~database|indexes~",$Mc);}function
db_collation($m,$ob){}function
information_schema(){}function
is_view($S){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$D,$p,$Xc,$tb,$sc,$d,$La,$Gf){global$g;if($R==""){$g->_db->createCollection($D);return
true;}}function
drop_tables($T){global$g;foreach($T
as$R){$_g=$g->_db->selectCollection($R)->drop();if(!$_g['ok'])return
false;}return
true;}function
truncate_tables($T){global$g;foreach($T
as$R){$_g=$g->_db->selectCollection($R)->remove();if(!$_g['ok'])return
false;}return
true;}$y="mongo";$gd=array();$ld=array();$kc=array(array("json"));}$cc["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Tf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($Kf,$yb=array(),$Ge='GET'){@ini_set('track_errors',1);$Qc=@file_get_contents("$this->_url/".ltrim($Kf,'/'),false,stream_context_create(array('http'=>array('method'=>$Ge,'content'=>$yb===null?$yb:json_encode($yb),'header'=>'Content-Type: application/json','ignore_errors'=>1,))));if(!$Qc){$this->error=$php_errormsg;return$Qc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Qc;return
false;}$J=json_decode($Qc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$xb=get_defined_constants(true);foreach($xb['json']as$D=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$D)){$this->error=$D;break;}}}}return$J;}function
query($Kf,$yb=array(),$Ge='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Kf,'/'),$yb,$Ge);}function
connect($N,$V,$G){preg_match('~^(https?://)?(.*)~',$N,$C);$this->_url=($C[1]?$C[1]:"http://")."$V:$G@$C[2]";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$M,$Z,$jd,$nf=array(),$_=1,$F=0,$Yf=false){global$b;$Jb=array();$H="$R/_search";if($M!=array("*"))$Jb["fields"]=$M;if($nf){$gh=array();foreach($nf
as$mb){$mb=preg_replace('~ DESC$~','',$mb,1,$Cb);$gh[]=($Cb?array($mb=>"desc"):$mb);}$Jb["sort"]=$gh;}if($_){$Jb["size"]=+$_;if($F)$Jb["from"]=($F*$_);}foreach($Z
as$X){list($mb,$gf,$X)=explode(" ",$X,3);if($mb=="_id")$Jb["query"]["ids"]["values"][]=$X;elseif($mb.$X!=""){$Kh=array("term"=>array(($mb!=""?$mb:"_all")=>$X));if($gf=="=")$Jb["query"]["filtered"]["filter"]["and"][]=$Kh;else$Jb["query"]["filtered"]["query"]["bool"]["must"][]=$Kh;}}if($Jb["query"]&&!$Jb["query"]["filtered"]["query"]&&!$Jb["query"]["ids"])$Jb["query"]["filtered"]["query"]=array("match_all"=>array());$oh=microtime(true);$Pg=$this->_conn->query($H,$Jb);if($Yf)echo$b->selectQuery("$H: ".print_r($Jb,true),format_time($oh));if(!$Pg)return
false;$J=array();foreach($Pg['hits']['hits']as$td){$K=array();if($M==array("*"))$K["_id"]=$td["_id"];$p=$td['_source'];if($M!=array("*")){$p=array();foreach($M
as$z)$p[$z]=$td['fields'][$z];}foreach($p
as$z=>$X){if($Jb["fields"])$X=$X[0];$K[$z]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}function
update($U,$og,$jg){$If=preg_split('~ *= *~',$jg);if(count($If)==2){$u=trim($If[1]);$H="$U/$u";return$this->_conn->query($H,$og,'POST');}return
false;}function
insert($U,$og){$u="";$H="$U/$u";$_g=$this->_conn->query($H,$og,'POST');$this->_conn->last_id=$_g['_id'];return$_g['created'];}function
delete($U,$jg){$xd=array();if(is_array($_GET["where"])&&$_GET["where"]["_id"])$xd[]=$_GET["where"]["_id"];if(is_array($_POST['check'])){foreach($_POST['check']as$cb){$If=preg_split('~ *= *~',$cb);if(count($If)==2)$xd[]=trim($If[1]);}}$this->_conn->affected_rows=0;foreach($xd
as$u){$H="{$U}/{$u}";$_g=$this->_conn->query($H,'{}','DELETE');if(is_array($_g)&&$_g['found']==true)$this->_conn->affected_rows++;}return$this->_conn->affected_rows;}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Mc){return
preg_match("~database|table|columns~",$Mc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($m,$ob){}function
engines(){return
array();}function
count_tables($l){global$g;$J=array();$I=$g->query('_stats');if($I&&$I['indices']){$Dd=$I['indices'];foreach($Dd
as$Cd=>$ph){$Bd=$ph['total']['indexing'];$J[$Cd]=$Bd['index_total'];}}return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$g->_db]["mappings"]),'table');return$J;}function
table_status($D="",$Lc=false){global$g;$Pg=$g->query("_search",array("size"=>0,"aggregations"=>array("count_by_type"=>array("terms"=>array("field"=>"_type")))),"POST");$J=array();if($Pg){$T=$Pg["aggregations"]["count_by_type"]["buckets"];foreach($T
as$R){$J[$R["key"]]=array("Name"=>$R["key"],"Engine"=>"table","Rows"=>$R["doc_count"],);if($D!=""&&$D==$R["key"])return$J[$D];}}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$g;$I=$g->query("$R/_mapping");$J=array();if($I){$re=$I[$R]['properties'];if(!$re)$re=$I[$g->_db]['mappings'][$R]['properties'];if($re){foreach($re
as$D=>$o){$J[$D]=array("field"=>$D,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($J[$D]["privileges"]["insert"]);unset($J[$D]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($R){return
array();}function
table($v){return$v;}function
idf_escape($v){return$v;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$g;return$g->rootQuery(urlencode($m),null,'PUT');}function
drop_databases($l){global$g;return$g->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
alter_table($R,$D,$p,$Xc,$tb,$sc,$d,$La,$Gf){global$g;$eg=array();foreach($p
as$Jc){$Oc=trim($Jc[1][0]);$Pc=trim($Jc[1][1]?:"text");$eg[$Oc]=array('type'=>$Pc);}if(!empty($eg))$eg=array('properties'=>$eg);return$g->query("_mapping/{$D}",$eg,'PUT');}function
drop_tables($T){global$g;$J=true;foreach($T
as$R)$J=$J&&$g->query(urlencode($R),array(),'DELETE');return$J;}function
last_id(){global$g;return$g->last_id;}$y="elastic";$if=array("=","query");$gd=array();$ld=array();$kc=array(array("json"));$ni=array();$sh=array();foreach(array('Numbers'=>array("long"=>3,"integer"=>5,"short"=>8,"byte"=>10,"double"=>20,"float"=>66,"half_float"=>12,"scaled_float"=>21),'Date and time'=>array("date"=>10),'Strings'=>array("string"=>65535,"text"=>65535),'Binary'=>array("binary"=>255),)as$z=>$X){$ni+=$X;$sh[$z]=array_keys($X);}}$cc=array("server"=>"MySQL")+$cc;if(!defined("DRIVER")){$Tf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$G="",$k=null,$Pf=null,$fh=null){mysqli_report(MYSQLI_REPORT_OFF);list($ud,$Pf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$ud:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),$k,(is_numeric($Pf)?$Pf:ini_get("mysqli.default_port")),(!is_numeric($Pf)?$Pf:$fh));return$J;}function
set_charset($bb){if(parent::set_charset($bb))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $bb");}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($bb){if(function_exists('mysql_set_charset')){if(mysql_set_charset($bb,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $bb");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($H,$oi=false){$I=@($oi?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
set_charset($bb){$this->query("SET NAMES $bb");}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$oi=false){$this->setAttribute(1000,!$oi);return
parent::query($H,$oi);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$O){return($O?parent::insert($R,$O):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$L,$Wf){$f=array_keys(reset($L));$Uf="INSERT INTO ".table($R)." (".implode(", ",$f).") VALUES\n";$Fi=array();foreach($f
as$z)$Fi[$z]="$z = VALUES($z)";$vh="\nON DUPLICATE KEY UPDATE ".implode(", ",$Fi);$Fi=array();$le=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($Fi&&(strlen($Uf)+$le+strlen($Y)+strlen($vh)>1e6)){if(!queries($Uf.implode(",\n",$Fi).$vh))return
false;$Fi=array();$le=0;}$Fi[]=$Y;$le+=strlen($Y)+2;}return
queries($Uf.implode(",\n",$Fi).$vh);}}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
table($v){return
idf_escape($v);}function
connect(){global$b,$ni,$sh;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($g->server_info,'5.7.8')>=0){$sh['Strings'][]="json";$ni["json"]=4294967295;}return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($Lg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$Lg;return$J;}function
get_databases($Wc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Wc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$_,$E=0,$Vg=" "){return" $H$Z".($_!==null?$Vg."LIMIT $_".($E?" OFFSET $E":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){global$g;$J=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$C))$J=$C[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$C))$J=$ob[$C[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$J=array();foreach($l
as$m)$J[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$J;}function
table_status($D="",$Lc=false){global$g;$J=array();foreach(get_rows($Lc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($D!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$C);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$C[1],"length"=>$C[2],"unsigned"=>ltrim($C[3].$C[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$C[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$C)?$C[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$D=$K["Key_name"];$J[$D]["type"]=($D=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?($K["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$J[$D]["columns"][]=$K["Column_name"];$J[$D]["lengths"][]=($K["Index_type"]=="SPATIAL"?null:$K["Sub_part"]);$J[$D]["descs"][]=null;}return$J;}function
foreign_keys($R){global$g,$df;static$Mf='`(?:[^`]|``)+`';$J=array();$Db=$g->result("SHOW CREATE TABLE ".table($R),1);if($Db){preg_match_all("~CONSTRAINT ($Mf) FOREIGN KEY ?\\(((?:$Mf,? ?)+)\\) REFERENCES ($Mf)(?:\\.($Mf))? \\(((?:$Mf,? ?)+)\\)(?: ON DELETE ($df))?(?: ON UPDATE ($df))?~",$Db,$te,PREG_SET_ORDER);foreach($te
as$C){preg_match_all("~$Mf~",$C[2],$hh);preg_match_all("~$Mf~",$C[5],$Hh);$J[idf_unescape($C[1])]=array("db"=>idf_unescape($C[4]!=""?$C[3]:$C[4]),"table"=>idf_unescape($C[4]!=""?$C[4]:$C[3]),"source"=>array_map('idf_unescape',$hh[0]),"target"=>array_map('idf_unescape',$Hh[0]),"on_delete"=>($C[6]?$C[6]:"RESTRICT"),"on_update"=>($C[7]?$C[7]:"RESTRICT"),);}}return$J;}function
viewm($D){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$z=>$X)asort($J[$z]);return$J;}function
information_schema($m){global$g;return($g->server_info>=5&&$m=="information_schema")||($g->server_info>=5.5&&$m=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" COLLATE ".q($d):""));}function
drop_databases($l){$J=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($D,$d){$J=false;if(create_database($D,$d)){$yg=array();foreach(tables_list()as$R=>$U)$yg[]=table($R)." TO ".idf_escape($D).".".table($R);$J=(!$yg||queries("RENAME TABLE ".implode(", ",$yg)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$Ma=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$Ma="";break;}if($w["type"]=="PRIMARY")$Ma=" UNIQUE";}}return" AUTO_INCREMENT$Ma";}function
alter_table($R,$D,$p,$Xc,$tb,$sc,$d,$La,$Gf){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Xc);$P=($tb!==null?" COMMENT=".q($tb):"").($sc?" ENGINE=".q($sc):"").($d?" COLLATE ".q($d):"").($La!=""?" AUTO_INCREMENT=$La":"");if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)$P$Gf");if($R!=$D)$c[]="RENAME TO ".table($D);if($P)$c[]=ltrim($P);return($c||$Gf?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$Gf):true);}function
alter_indexes($R,$c){foreach($c
as$z=>$X)$c[$z]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Ki){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ki)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Ki,$Hh){$yg=array();foreach(array_merge($T,$Ki)as$R)$yg[]=table($R)." TO ".idf_escape($Hh).".".table($R);return
queries("RENAME TABLE ".implode(", ",$yg));}function
copy_tables($T,$Ki,$Hh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$D=($Hh==DB?table("copy_$R"):idf_escape($Hh).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($R))||!queries("INSERT INTO $D SELECT * FROM ".table($R)))return
false;}foreach($Ki
as$R){$D=($Hh==DB?table("copy_$R"):idf_escape($Hh).".".table($R));$Ji=viewm($R);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $Ji[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){global$g,$uc,$Id,$ni;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$ih="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$mi="((".implode("|",array_merge(array_keys($ni),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$uc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Mf="$ih*(".($U=="FUNCTION"?"":$Id).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$mi";$i=$g->result("SHOW CREATE $U ".idf_escape($D),2);preg_match("~\\(((?:$Mf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$mi\\s+":"")."(.*)~is",$i,$C);$p=array();preg_match_all("~$Mf\\s*,?~is",$C[1],$te,PREG_SET_ORDER);foreach($te
as$_f){$D=str_replace("``","`",$_f[2]).$_f[3];$p[]=array("field"=>$D,"type"=>strtolower($_f[5]),"length"=>preg_replace_callback("~$uc~s",'normalize_enum',$_f[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$_f[8] $_f[7]"))),"null"=>1,"full_type"=>$_f[4],"inout"=>strtoupper($_f[1]),"collation"=>strtolower($_f[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$C[11]);return
array("fields"=>$p,"returns"=>array("type"=>$C[12],"length"=>$C[13],"unsigned"=>$C[15],"collation"=>$C[16]),"definition"=>$C[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ng){return
true;}function
create_sql($R,$La,$th){global$g;$J=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$La)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$K)$J.="\nCREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){global$g;if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return($g->server_info>=8?"ST_":"")."AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J="GeomFromText($J)";return$J;}function
support($Mc){global$g;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Mc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$y="sql";$ni=array();$sh=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$z=>$X){$ni+=$X;$sh[$z]=array_keys($X);}$ui=array("unsigned","zerofill","unsigned zerofill");$if=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$gd=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$ld=array("avg","count","count distinct","group_concat","max","min","sum");$kc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.5.0";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/'".target_blank()." id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Wc=true){return
get_databases($Wc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){}function
csp(){return
csp();}function
head(){return
true;}function
css(){$J=array();$q="adminer.css";if(file_exists($q))$J[]=$q;return$J;}function
loginForm(){global$cc;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("auth[driver]",$cc,DRIVER)."\n",'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>Username<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
<tr><th>Database<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
',script("focus(qs('#username'));"),"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($pe,$G){global$y;if($y=="sqlite")return
sprintf('<a href="https://www.adminer.org/en/extension/"%s>Implement</a> %s method to use SQLite.',target_blank(),'<code>login()</code>');return
true;}function
tableName($zh){return
h($zh["Name"]);}function
fieldName($o,$nf=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($zh,$O=""){echo'<p class="links">';$oe=array("select"=>'Select data');if(support("table")||support("indexes"))$oe["table"]='Show structure';if(support("table")){if(is_view($zh))$oe["view"]='Alter view';else$oe["create"]='Alter table';}if($O!==null)$oe["edit"]='New item';foreach($oe
as$z=>$X)echo" <a href='".h(ME)."$z=".urlencode($zh["Name"]).($z=="edit"?$O:"")."'".bold(isset($_GET[$z])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$yh){return
array();}function
backwardKeysPrint($Oa,$K){}function
selectQuery($H,$Oh){global$y;return"<p><code class='jush-$y'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($Oh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>":"")."</p>";}function
sqlCommandQuery($H){return
shorten_utf8(trim($H),1000);}function
rowDescription($R){return"";}function
rowDescriptions($L,$Yc){return$L;}function
selectLink($X,$o){}function
selectVal($X,$A,$o,$vf){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary|boolean~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$J="<i>".lang(array('%d byte','%d bytes'),strlen($vf))."</i>";if(preg_match('~json~',$o["type"]))$J="<code class='jush-js'>$J</code>";return($A?"<a href='".h($A)."'".(is_url($A)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$o){return$X;}function
tableStructurePrint($p){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($o["default"])?" <span title='".'Default value'."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($x){echo"<table cellspacing='0'>\n";foreach($x
as$D=>$w){ksort($w["columns"]);$Yf=array();foreach($w["columns"]as$z=>$X)$Yf[]="<i>".h($X)."</i>".($w["lengths"][$z]?"(".$w["lengths"][$z].")":"").($w["descs"][$z]?" DESC":"");echo"<tr title='".h($D)."'><th>$w[type]<td>".implode(", ",$Yf)."\n";}echo"</table>\n";}function
selectColumnsPrint($M,$f){global$gd,$ld;print_fieldset("select",'Select',$M);$t=0;$M[""]=array();foreach($M
as$z=>$X){$X=$_GET["columns"][$z];$e=select_input(" name='columns[$t][col]'",$f,$X["col"],($z!==""?"selectFieldChange":"selectAddRow"));echo"<div>".($gd||$ld?"<select name='columns[$t][fun]'>".optionlist(array(-1=>"")+array_filter(array('Functions'=>$gd,'Aggregation'=>$ld)),$X["fun"])."</select>".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).script("qsl('select').onchange = function () { helpClose();".($z!==""?"":" qsl('select, input', this.parentNode).onchange();")." };","")."($e)":$e)."</div>\n";$t++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$x){print_fieldset("search",'Search',$Z);foreach($x
as$t=>$w){if($w["type"]=="FULLTEXT"){echo"<div>(<i>".implode("</i>, <i>",array_map('h',$w["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$t]' value='".h($_GET["fulltext"][$t])."'>",script("qsl('input').oninput = selectFieldChange;",""),checkbox("boolean[$t]",1,isset($_GET["boolean"][$t]),"BOOL"),"</div>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$ab="this.parentNode.firstChild.onchange();";for($t=0;$t<=count($_GET["where"]);$t++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$t][col]'",$f,$X["col"],($X?"selectFieldChange":"selectAddRow"),"(".'anywhere'.")"),html_select("where[$t][op]",$this->operators,$X["op"],$ab),"<input type='search' name='where[$t][val]' value='".h($X["val"])."'>",script("mixin(qsl('input'), {oninput: function () { $ab }, onkeydown: selectSearchKeydown, onsearch: selectSearchSearch});",""),"</div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($nf,$f,$x){print_fieldset("sort",'Sort',$nf);$t=0;foreach((array)$_GET["order"]as$z=>$X){if($X!=""){echo"<div>".select_input(" name='order[$t]'",$f,$X,"selectFieldChange"),checkbox("desc[$t]",1,isset($_GET["desc"][$z]),'descending')."</div>\n";$t++;}}echo"<div>".select_input(" name='order[$t]'",$f,"","selectAddRow"),checkbox("desc[$t]",1,false,'descending')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($_){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($_)."'>",script("qsl('input').oninput = selectFieldChange;",""),"</div></fieldset>\n";}function
selectLengthPrint($Nh){if($Nh!==null){echo"<fieldset><legend>".'Text length'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Nh)."'>","</div></fieldset>\n";}}function
selectActionPrint($x){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script".nonce().">\n","var indexColumns = ";$f=array();foreach($x
as$w){$Ib=reset($w["columns"]);if($w["type"]!="FULLTEXT"&&$Ib)$f[$Ib]=1;}$f[""]=1;foreach($f
as$z=>$X)json_row($z);echo";\n","selectFieldChange.call(qs('#form')['select']);\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($pc,$f){}function
selectColumnsProcess($f,$x){global$gd,$ld;$M=array();$jd=array();foreach((array)$_GET["columns"]as$z=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$gd)||in_array($X["fun"],$ld)))){$M[$z]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$ld))$jd[]=$M[$z];}}return
array($M,$jd);}function
selectSearchProcess($p,$x){global$g,$y;$J=array();foreach($x
as$t=>$w){if($w["type"]=="FULLTEXT"&&$_GET["fulltext"][$t]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$w["columns"])).") AGAINST (".q($_GET["fulltext"][$t]).(isset($_GET["boolean"][$t])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if($X["op"]=="")$X["op"]="LIKE %%";if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$vb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$zd=process_length($X["val"]);$vb.=" ".($zd!=""?$zd:"(NULL)");}elseif($X["op"]=="SQL")$vb=" $X[val]";elseif($X["op"]=="LIKE %%")$vb=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$vb=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$vb.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$vb;else{$qb=array();foreach($p
as$D=>$o){$Rd=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Rd)){$D=idf_escape($D);$qb[]=($y=="sql"&&$Rd&&!preg_match("~^utf8~",$o["collation"])?"CONVERT($D USING ".charset($g).")":$D);}}$J[]=($qb?"(".implode("$vb OR ",$qb)."$vb)":"0");}}}return$J;}function
selectOrderProcess($p,$x){$J=array();foreach((array)$_GET["order"]as$z=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$z])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Yc){return
false;}function
selectQueryBuild($M,$Z,$jd,$nf,$_,$F){return"";}function
messageQuery($H,$Oh){global$y;restart_session();$rd=&get_session("queries");if(!$rd[$_GET["db"]])$rd[$_GET["db"]]=array();$u="sql-".count($rd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$rd[$_GET["db"]][]=array($H,time(),$Oh);return" <span class='time'>".@date("H:i:s")."</span>"." <a href='#$u' class='toggle'>".'SQL command'."</a>"."<div id='$u' class='hidden'><pre><code class='jush-$y'>".shorten_utf8($H,1000).'</code></pre>'.($Oh?" <span class='time'>($Oh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($rd[$_GET["db"]])-1)).'">'.'Edit'.'</a>':'').'</div>';}function
editFunctions($o){global$kc;$J=($o["null"]?"NULL/":"");foreach($kc
as$z=>$gd){if(!$z||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($gd
as$Mf=>$X){if(!$Mf||preg_match("~$Mf~",$o["type"]))$J.="/$X";}if($z&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$J.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J='Auto Increment';return
explode("/",$J);}function
editInput($R,$o,$Ja,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ja value='-1' checked><i>".'original'."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ja value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ja,$o,$Y,0);return"";}function
editHint($R,$o,$Y){return"";}function
processInput($o,$Y,$s=""){if($s=="SQL")return$Y;$D=$o["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$s))$J="$s()";elseif(preg_match('~^current_(date|timestamp)$~',$s))$J=$s;elseif(preg_match('~^([+-]|\\|\\|)$~',$s))$J=idf_escape($D)." $s $J";elseif(preg_match('~^[+-] interval$~',$s))$J=idf_escape($D)." $s ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+\$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$s))$J="$s(".idf_escape($D).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$s))$J="$s($J)";return
unconvert_field($o,$J);}function
dumpOutput(){$J=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($R,$th,$Sd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($th)dump_csv(array_keys(fields($R)));}else{if($Sd==2){$p=array();foreach(fields($R)as$D=>$o)$p[]=idf_escape($D)." $o[full_type]";$i="CREATE TABLE ".table($R)." (".implode(", ",$p).")";}else$i=create_sql($R,$_POST["auto_increment"],$th);set_utf8mb4($i);if($th&&$i){if($th=="DROP+CREATE"||$Sd==1)echo"DROP ".($Sd==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Sd==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($R,$th,$H){global$g,$y;$ve=($y=="sqlite"?0:1048576);if($th){if($_POST["format"]=="sql"){if($th=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$p=fields($R);}$I=$g->query($H,1);if($I){$Kd="";$Xa="";$Zd=array();$vh="";$Nc=($R!=''?'fetch_assoc':'fetch_row');while($K=$I->$Nc()){if(!$Zd){$Fi=array();foreach($K
as$X){$o=$I->fetch_field();$Zd[]=$o->name;$z=idf_escape($o->name);$Fi[]="$z = VALUES($z)";}$vh=($th=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Fi):"").";\n";}if($_POST["format"]!="sql"){if($th=="table"){dump_csv($Zd);$th="INSERT";}dump_csv($K);}else{if(!$Kd)$Kd="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$Zd)).") VALUES";foreach($K
as$z=>$X){$o=$p[$z];$K[$z]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$Lg=($ve?"\n":" ")."(".implode(",\t",$K).")";if(!$Xa)$Xa=$Kd.$Lg;elseif(strlen($Xa)+4+strlen($Lg)+strlen($vh)<$ve)$Xa.=",$Lg";else{echo$Xa.$vh;$Xa=$Kd.$Lg;}}}if($Xa)echo$Xa.$vh;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($wd){return
friendly_url($wd!=""?$wd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($wd,$Je=false){$yf=$_POST["output"];$Gc=(preg_match('~sql~',$_POST["format"])?"sql":($Je?"tar":"csv"));header("Content-Type: ".($yf=="gz"?"application/x-gzip":($Gc=="tar"?"application/x-tar":($Gc=="sql"||$yf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($yf=="gz")ob_start('ob_gzencode',1e6);return$Gc;}function
importServerPath(){return"adminer.sql";}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($Ie){global$ia,$y,$cc,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download"',target_blank(),' id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ie=="auth"){$Sc=true;foreach((array)$_SESSION["pwds"]as$Hi=>$Zg){foreach($Zg
as$N=>$Ci){foreach($Ci
as$V=>$G){if($G!==null){if($Sc){echo"<p id='logins'>".script("mixin(qs('#logins'), {onmouseover: menuOver, onmouseout: menuOut});");$Sc=false;}$Ob=$_SESSION["db"][$Hi][$N][$V];foreach(($Ob?array_keys($Ob):array(""))as$m)echo"<a href='".h(auth_url($Hi,$N,$V,$m))."'>($cc[$Hi]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$Ie&&DB!=""){$g->select_db(DB);$T=table_status('',true);}echo
script_src(preg_replace("~\\?.*~","",ME)."?file=jush.js&version=4.5.0");if(support("sql")){echo'<script',nonce(),'>
';if($T){$oe=array();foreach($T
as$R=>$U)$oe[]=preg_quote($R,'/');echo"var jushLinks = { $y: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$oe).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$y;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($Ie);if(DB==""||!$Ie){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".'SQL command'."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".'Import'."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}if($_GET["ns"]!==""&&!$Ie&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create table'."</a>\n";if(!$T)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($T);}}}function
databasesPrint($Ie){global$b,$g;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Mb=script("mixin(qsl('select'), {onmousedown: dbMouseDown, onchange: dbChange});","");echo"<span title='".'database'."'>DB</span>: ".($l?"<select name='db'>".optionlist(array(""=>"")+$l,DB)."</select>$Mb":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".'Use'."'".($l?" class='hidden'":"").">\n";if($Ie!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".'Schema'.": <select name='ns'>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>$Mb";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<ul id='tables'>".script("mixin(qs('#tables'), {onmouseover: menuOver, onmouseout: menuOut});");foreach($T
as$R=>$P){echo'<li><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".'select'."</a> ";$D=$this->tableName($P);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($P)?"view":"structure"))." title='".'Show structure'."'>$D</a>":"<span>$D</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$if;function
page_header($Rh,$n="",$Wa=array(),$Sh=""){global$ca,$ia,$b,$cc,$y;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$Th=$Rh.($Sh!=""?": $Sh":"");$Uh=strip_tags($Th.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<title>',$Uh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME)."?file=default.css&version=4.5.0"),'">
',script_src(preg_replace("~\\?.*~","",ME)."?file=functions.js&version=4.5.0");if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.5.0"),'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.5.0"),'">
';foreach($b->css()as$Gb){echo'<link rel="stylesheet" type="text/css" href="',h($Gb),'">
';}}echo'
<body class="ltr nojs">
';$q=get_temp_dir()."/adminer.version";if(!$_COOKIE["adminer_version"]&&function_exists('openssl_verify')&&file_exists($q)&&filemtime($q)+86400>time()){$Ii=unserialize(file_get_contents($q));$gg="-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwqWOVuF5uw7/+Z70djoK
RlHIZFZPO0uYRezq90+7Amk+FDNd7KkL5eDve+vHRJBLAszF/7XKXe11xwliIsFs
DFWQlsABVZB3oisKCBEuI71J4kPH8dKGEWR9jDHFw3cWmoH3PmqImX6FISWbG3B8
h7FIx3jEaw5ckVPVTeo5JRm/1DZzJxjyDenXvBQ/6o9DgZKeNDgxwKzH+sw9/YCO
jHnq1cFpOIISzARlrHMa/43YfeNRAm/tsBXjSxembBPo7aQZLAWHmaj5+K19H10B
nCpz9Y++cipkVEiKRGih4ZEvjoFysEOdRLj6WiD/uUNky4xGeA6LaJqh5XpkFkcQ
fQIDAQAB
-----END PUBLIC KEY-----
";if(openssl_verify($Ii["version"],base64_decode($Ii["signature"]),$gg)==1)$_COOKIE["adminer_version"]=$Ii["version"];}echo'<script',nonce(),'>
mixin(document.body, {onkeydown: bodyKeydown, onclick: bodyClick',(isset($_COOKIE["adminer_version"])?"":", onload: partial(verifyVersion, '$ia', '".js_escape(ME)."', '".get_token()."')");?>});
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape('You are offline.'),'\';
</script>

<div id="help" class="jush-',$y,' jsonly hidden"></div>
',script("mixin(qs('#help'), {onmouseover: function () { helpOpen = 1; }, onmouseout: helpMouseout});"),'
<div id="content">
';if($Wa!==null){$A=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($A?$A:".").'">'.$cc[DRIVER].'</a> &raquo; ';$A=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($Wa===false)echo"$N\n";else{echo"<a href='".($A?h($A):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wa)))echo'<a href="'.h($A."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Wa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Wa
as$z=>$X){$Tb=(is_array($X)?$X[1]:h($X));if($Tb!="")echo"<a href='".h(ME."$z=").urlencode(is_array($X)?$X[0]:$X)."'>$Tb</a> &raquo; ";}}echo"$Rh\n";}}echo"<h2>$Th</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");header("X-Frame-Options: deny");header("X-XSS-Protection: 0");header("X-Content-Type-Options: nosniff");header("Referrer-Policy: origin-when-cross-origin");foreach($b->csp()as$Fb){$qd=array();foreach($Fb
as$z=>$X)$qd[]="$z $X";header("Content-Security-Policy: ".implode("; ",$qd));}$b->headers();}function
csp(){return
array(array("script-src"=>"'self' 'unsafe-inline' 'nonce-".get_nonce()."' 'strict-dynamic'","connect-src"=>"'self'","frame-src"=>"https://www.adminer.org","object-src"=>"'none'","base-uri"=>"'none'","form-action"=>"'self'",),);}function
get_nonce(){static$Se;if(!$Se)$Se=base64_encode(rand_string());return$Se;}function
page_messages($n){$wi=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ee=$_SESSION["messages"][$wi];if($Ee){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ee)."</div>".script("messagesPrint();");unset($_SESSION["messages"][$wi]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($Ie=""){global$b,$Yh;echo'</div>

';if($Ie!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$Yh,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Ie);echo'</div>
',script("setupSubmitHighlight(document);");}function
int32($Le){while($Le>=2147483648)$Le-=4294967296;while($Le<=-2147483649)$Le+=4294967296;return(int)$Le;}function
long2str($W,$Mi){$Lg='';foreach($W
as$X)$Lg.=pack('V',$X);if($Mi)return
substr($Lg,0,end($W));return$Lg;}function
str2long($Lg,$Mi){$W=array_values(unpack('V*',str_pad($Lg,4*ceil(strlen($Lg)/4),"\0")));if($Mi)$W[]=strlen($Lg);return$W;}function
xxtea_mx($Xi,$Wi,$wh,$Vd){return
int32((($Xi>>5&0x7FFFFFF)^$Wi<<2)+(($Wi>>3&0x1FFFFFFF)^$Xi<<4))^int32(($wh^$Wi)+($Vd^$Xi));}function
encrypt_string($rh,$z){if($rh=="")return"";$z=array_values(unpack("V*",pack("H*",md5($z))));$W=str2long($rh,true);$Le=count($W)-1;$Xi=$W[$Le];$Wi=$W[0];$hg=floor(6+52/($Le+1));$wh=0;while($hg-->0){$wh=int32($wh+0x9E3779B9);$jc=$wh>>2&3;for($zf=0;$zf<$Le;$zf++){$Wi=$W[$zf+1];$Ke=xxtea_mx($Xi,$Wi,$wh,$z[$zf&3^$jc]);$Xi=int32($W[$zf]+$Ke);$W[$zf]=$Xi;}$Wi=$W[0];$Ke=xxtea_mx($Xi,$Wi,$wh,$z[$zf&3^$jc]);$Xi=int32($W[$Le]+$Ke);$W[$Le]=$Xi;}return
long2str($W,false);}function
decrypt_string($rh,$z){if($rh=="")return"";if(!$z)return
false;$z=array_values(unpack("V*",pack("H*",md5($z))));$W=str2long($rh,false);$Le=count($W)-1;$Xi=$W[$Le];$Wi=$W[0];$hg=floor(6+52/($Le+1));$wh=int32($hg*0x9E3779B9);while($wh){$jc=$wh>>2&3;for($zf=$Le;$zf>0;$zf--){$Xi=$W[$zf-1];$Ke=xxtea_mx($Xi,$Wi,$wh,$z[$zf&3^$jc]);$Wi=int32($W[$zf]-$Ke);$W[$zf]=$Wi;}$Xi=$W[$Le];$Ke=xxtea_mx($Xi,$Wi,$wh,$z[$zf&3^$jc]);$Wi=int32($W[0]-$Ke);$W[0]=$Wi;$wh=int32($wh-0x9E3779B9);}return
long2str($W,true);}$g='';$pd=$_SESSION["token"];if(!$pd)$_SESSION["token"]=rand(1,1e6);$Yh=get_token();$Nf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($z)=explode(":",$X);$Nf[$z]=$X;}}function
add_invalid_login(){global$b;$dd=file_open_lock(get_temp_dir()."/adminer.invalid");if(!$dd)return;$Nd=unserialize(stream_get_contents($dd));$Oh=time();if($Nd){foreach($Nd
as$Od=>$X){if($X[0]<$Oh)unset($Nd[$Od]);}}$Md=&$Nd[$b->bruteForceKey()];if(!$Md)$Md=array($Oh+30*60,0);$Md[1]++;file_write_unlock($dd,serialize($Nd));}function
check_invalid_login(){global$b;$Nd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Md=$Nd[$b->bruteForceKey()];$Re=($Md[1]>29?$Md[0]-time():0);if($Re>0)auth_error(lang(array('Too many unsuccessful logins, try again in %d minute.','Too many unsuccessful logins, try again in %d minutes.'),ceil($Re/60)));}$Ka=$_POST["auth"];if($Ka){session_regenerate_id();$Hi=$Ka["driver"];$N=$Ka["server"];$V=$Ka["username"];$G=(string)$Ka["password"];$m=$Ka["db"];set_password($Hi,$N,$V,$G);$_SESSION["db"][$Hi][$N][$V][$m]=true;if($Ka["permanent"]){$z=base64_encode($Hi)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$Zf=$b->permanentLogin(true);$Nf[$z]="$z:".base64_encode($Zf?encrypt_string($G,$Zf):"");cookiem("adminer_permanent",implode(" ",$Nf));}if(count($_POST)==1||DRIVER!=$Hi||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)redirectm(auth_url($Hi,$N,$V,$m));}elseif($_POST["logout"]){if($pd&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$z)set_session($z,null);unset_permanent();redirectm(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.'.' '.sprintf('Thanks for using Adminer, consider <a href="%s">donating</a>.','https://sourceforge.net/donate/index.php?group_id=264133'));}}elseif($Nf&&!$_SESSION["pwds"]){session_regenerate_id();$Zf=$b->permanentLogin();foreach($Nf
as$z=>$X){list(,$ib)=explode(":",$X);list($Hi,$N,$V,$m)=array_map('base64_decode',explode("-",$z));set_password($Hi,$N,$V,decrypt_string(base64_decode($ib),$Zf));$_SESSION["db"][$Hi][$N][$V][$m]=true;}}function
unset_permanent(){global$Nf;foreach($Nf
as$z=>$X){list($Hi,$N,$V,$m)=array_map('base64_decode',explode("-",$z));if($Hi==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($Nf[$z]);}cookiem("adminer_permanent",implode(" ",$Nf));}function
auth_error($n){global$b,$pd;$ah=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$ah]||$_GET[$ah])&&!$pd)$n='Session expired, please login again.';else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.sprintf('Master password expired. <a href="https://www.adminer.org/en/extension/"%s>Implement</a> %s method to make it permanent.',target_blank(),'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$ah]&&$_GET[$ah]&&ini_bool("session.use_only_cookies"))$n='Session support must be enabled.';$Af=session_get_cookie_params();cookiem("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$Af["lifetime"]);page_header('Login',$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$Tf)),false);page_footer("auth");exit;}list($ud,$Pf)=explode(":",SERVER,2);if(is_numeric($Pf)&&$Pf<1024)auth_error('Connecting to privileged ports is not allowed.');check_invalid_login();$g=connect();$bc=new
Min_Driver($g);}if(!is_object($g)||($pe=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?h($g):(is_string($pe)?$pe:'Invalid credentials.')));if($Ka&&$_POST["token"])$_POST["token"]=$Yh;$n='';if($_POST){if(!verify_token()){$Hd="max_input_vars";$ze=ini_get($Hd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$z){$X=ini_get($z);if($X&&(!$ze||$X<$ze)){$Hd=$z;$ze=$X;}}}$n=(!$_POST["token"]&&$ze?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$Hd'"):'Invalid CSRF token. Send the form again.'.' '.'If you did not send this request from Adminer then close this page.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$h=null,$qf=array(),$_=0){global$y;$oe=array();$x=array();$f=array();$Ta=array();$ni=array();$J=array();odd('');for($t=0;(!$_||$t<$_)&&($K=$I->fetch_row());$t++){if(!$t){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Ud=0;$Ud<count($K);$Ud++){$o=$I->fetch_field();$D=$o->name;$pf=$o->orgtable;$of=$o->orgname;$J[$o->table]=$pf;if($qf&&$y=="sql")$oe[$Ud]=($D=="table"?"table=":($D=="possible_keys"?"indexes=":null));elseif($pf!=""){if(!isset($x[$pf])){$x[$pf]=array();foreach(indexes($pf,$h)as$w){if($w["type"]=="PRIMARY"){$x[$pf]=array_flip($w["columns"]);break;}}$f[$pf]=$x[$pf];}if(isset($f[$pf][$of])){unset($f[$pf][$of]);$x[$pf][$of]=$Ud;$oe[$Ud]=$pf;}}if($o->charsetnr==63)$Ta[$Ud]=true;$ni[$Ud]=$o->type;echo"<th".($pf!=""||$o->name!=$of?" title='".h(($pf!=""?"$pf.":"").$of)."'":"").">".h($D).($qf?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($D))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$z=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ta[$z]&&!is_utf8($X))$X="<i>".lang(array('%d byte','%d bytes'),strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($ni[$z]==254)$X="<code>$X</code>";}if(isset($oe[$z])&&!$f[$oe[$z]]){if($qf&&$y=="sql"){$R=$K[array_search("table=",$oe)];$A=$oe[$z].urlencode($qf[$R]!=""?$qf[$R]:$R);}else{$A="edit=".urlencode($oe[$z]);foreach($x[$oe[$z]]as$mb=>$Ud)$A.="&where".urlencode("[".bracket_escape($mb)."]")."=".urlencode($K[$Ud]);}$X="<a href='".h(ME.$A)."'>$X</a>";}echo"<td>$X";}}echo($t?"</table>":"<p class='message'>".'No rows.')."\n";return$J;}function
referencable_primary($Ug){$J=array();foreach(table_status('',true)as$_h=>$R){if($_h!=$Ug&&fk_support($R)){foreach(fields($_h)as$o){if($o["primary"]){if($J[$_h]){unset($J[$_h]);break;}$J[$_h]=$o;}}}}return$J;}function
textarea($D,$Y,$L=10,$qb=80){global$y;echo"<textarea name='$D' rows='$L' cols='$qb' class='sqlarea jush-$y' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($z,$o,$ob,$Zc=array()){global$sh,$ni,$ui,$df;$U=$o["type"];echo'<td><select name="',h($z),'[type]" class="type" aria-labelledby="label-type">';if($U&&!isset($ni[$U])&&!isset($Zc[$U]))array_unshift($sh,$U);if($Zc)$sh['Foreign keys']=$Zc;echo
optionlist($sh,$U),'</select>
',on_help("getTarget(event).value",1),script("mixin(qsl('select'), {onfocus: function () { lastType = selectValue(this); }, onchange: editingTypeChange});",""),'<td><input name="',h($z),'[length]" value="',h($o["length"]),'" size="3"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' aria-labelledby="label-length">',script("mixin(qsl('input'), {onfocus: editingLengthFocus, oninput: editingLengthChange});",""),'<td class="options">';echo"<select name='".h($z)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($ob,$o["collation"]).'</select>',($ui?"<select name='".h($z)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($ui,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($z)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".'ON UPDATE'.")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Zc?"<select name='".h($z)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$df),$o["on_delete"])."</select> ":" ");}function
process_length($le){global$uc;return(preg_match("~^\\s*\\(?\\s*$uc(?:\\s*,\\s*$uc)*+\\s*\\)?\\s*\$~",$le)&&preg_match_all("~$uc~",$le,$te)?"(".implode(",",$te[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$le)));}function
process_type($o,$nb="COLLATE"){global$ui;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$ui)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $nb ".q($o["collation"]):"");}function
process_field($o,$li){global$y;$Qb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($li),($o["null"]?" NULL":" NOT NULL"),(isset($Qb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP(\(\))?$~i',$Qb))||($y=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Qb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Qb))||($y=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Qb))?$Qb:q($Qb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$z=>$X){if(preg_match("~$z|$X~",$U))return" class='$z'";}}function
edit_fields($p,$ob,$U="TABLE",$Zc=array(),$ub=false){global$g,$Id;$p=array_values($p);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($U=="TABLE"?'Column name':'Parameter name'),'<td id="label-type">Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;"></textarea>',script("qs('#enum-edit').onblur = editingLengthBlur;"),'<td id="label-length">Length
<td>','Options';if($U=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="Auto Increment">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">Default value
',(support("comment")?"<td id='label-comment'".($ub?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.5.0")."' alt='+' title='".'Add next'."'>".script("row_count = ".count($p).";"),'</thead>
<tbody>
',script("qsl('tbody').onkeydown = editingKeydown;");foreach($p
as$t=>$o){$t++;$rf=$o[($_POST?"orig":"field")];$Xb=(isset($_POST["add"][$t-1])||(isset($o["field"])&&!$_POST["drop_col"][$t]))&&(support("drop_col")||$rf=="");echo'<tr',($Xb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$t][inout]",explode("|",$Id),$o["inout"]):""),'<th>';if($Xb){echo'<input name="fields[',$t,'][field]" value="',h($o["field"]),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">',script("qsl('input').oninput = function () { editingNameChange.call(this);".($o["field"]!=""||count($p)>1?"":" editingAddRow.call(this);")." };","");}echo'<input type="hidden" name="fields[',$t,'][orig]" value="',h($rf),'">
';edit_type("fields[$t]",$o,$ob,$Zc);if($U=="TABLE"){echo'<td>',checkbox("fields[$t][null]",1,$o["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$t,'"';if($o["auto_increment"]){echo' checked';}echo' aria-labelledby="label-ai">',script("qsl('input').onclick = function () { var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.oninput(); } }"),'</label><td>',checkbox("fields[$t][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$t,'][default]" value="',h($o["default"]),'" aria-labelledby="label-default">',script("qsl('input').oninput = function () { this.previousSibling.checked = true; }",""),(support("comment")?"<td".($ub?"":" class='hidden'")."><input name='fields[$t][comment]' value='".h($o["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$t]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.5.0")."' alt='+' title='".'Add next'."'>&nbsp;".script("qsl('input').onclick = partial(editingAddRow, 1);","")."<input type='image' class='icon' name='up[$t]' src='".h(preg_replace("~\\?.*~","",ME)."?file=up.gif&version=4.5.0")."' alt='^' title='".'Move up'."'>&nbsp;".script("qsl('input').onclick = partial(editingMoveRow, 1);","")."<input type='image' class='icon' name='down[$t]' src='".h(preg_replace("~\\?.*~","",ME)."?file=down.gif&version=4.5.0")."' alt='v' title='".'Move down'."'>&nbsp;".script("qsl('input').onclick = partial(editingMoveRow, 0);",""):""),($rf==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$t]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.5.0")."' alt='x' title='".'Remove'."'>".script("qsl('input').onclick = partial(editingRemoveRow, 'fields\$1[field]');"):"");}}function
process_fields(&$p){$E=0;if($_POST["up"]){$fe=0;foreach($p
as$z=>$o){if(key($_POST["up"])==$z){unset($p[$z]);array_splice($p,$fe,0,array($o));break;}if(isset($o["field"]))$fe=$E;$E++;}}elseif($_POST["down"]){$bd=false;foreach($p
as$z=>$o){if(isset($o["field"])&&$bd){unset($p[key($_POST["down"])]);array_splice($p,$E,0,array($bd));break;}if(key($_POST["down"])==$z)$bd=$o;$E++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($C){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($C[0][0].$C[0][0],$C[0][0],substr($C[0],1,-1))),'\\'))."'";}function
grant($hd,$bg,$f,$cf){if(!$bg)return
true;if($bg==array("ALL PRIVILEGES","GRANT OPTION"))return($hd=="GRANT"?queries("$hd ALL PRIVILEGES$cf WITH GRANT OPTION"):queries("$hd ALL PRIVILEGES$cf")&&queries("$hd GRANT OPTION$cf"));return
queries("$hd ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$bg).$f).$cf);}function
drop_create($dc,$i,$ec,$Lh,$gc,$B,$De,$Be,$Ce,$Ze,$Oe){if($_POST["drop"])query_redirect($dc,$B,$De);elseif($Ze=="")query_redirect($i,$B,$Ce);elseif($Ze!=$Oe){$Eb=queries($i);queries_redirect($B,$Be,$Eb&&queries($dc));if($Eb)queries($ec);}else
queries_redirect($B,$Be,queries($Lh)&&queries($gc)&&queries($dc)&&queries($i));}function
create_trigger($cf,$K){global$y;$Qh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($y=="mssql"?$cf.$Qh:$Qh.$cf).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($Hg,$K){global$Id;$O=array();$p=(array)$K["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($Id)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $Hg ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($r){global$df;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$r["source"])).") REFERENCES ".table($r["table"])." (".implode(", ",array_map('idf_escape',$r["target"])).")".(preg_match("~^($df)\$~",$r["on_delete"])?" ON DELETE $r[on_delete]":"").(preg_match("~^($df)\$~",$r["on_update"])?" ON UPDATE $r[on_update]":"");}function
tar_file($q,$Vh){$J=pack("a100a8a8a8a12a12",$q,644,0,0,decoct($Vh->size),decoct(time()));$gb=8*32;for($t=0;$t<strlen($J);$t++)$gb+=ord($J[$t]);$J.=sprintf("%06o",$gb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$Vh->send();echo
str_repeat("\0",511-($Vh->size+511)%512);}function
ini_bytes($Hd){$X=ini_get($Hd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($Lf){global$y,$g;$zi=array('sql'=>"https://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"https://www.sqlite.org/",'pgsql'=>"https://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"https://msdn.microsoft.com/library/",'oracle'=>"https://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($Lf[$y]?"<a href='$zi[$y]$Lf[$y]'".target_blank()."><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($m){global$g;if(!$g->select_db($m))return"?";$J=0;foreach(table_status()as$S)$J+=$S["Data_length"]+$S["Index_length"];return
format_number($J);}function
set_utf8mb4($i){global$g;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$i)){$O=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$Yh,$n,$cc;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$n,false);echo"<p class='links'>\n";foreach(array('database'=>'Create database','privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$z=>$X){if(support($z))echo"<a href='".h(ME)."$z='>$X</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$cc[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$Og=support("scheme");$ob=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),"<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".'Database'." - <a href='".h(ME)."refresh=1'>".'Refresh'."</a>"."<td>".'Collation'."<td>".'Tables'."<td>".'Size'." - <a href='".h(ME)."dbsize=1'>".'Compute'."</a>".script("qsl('a').onclick = partial(ajaxSetHtml, '".js_escape(ME)."script=connect');","")."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$T){$Gg=h(ME)."db=".urlencode($m);$u=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$u):""),"<th><a href='$Gg' id='$m'>".h($m)."</a>";$d=nbsp(db_collation($m,$ob));echo"<td>".(support("database")?"<a href='$Gg".($Og?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>$d</a>":$d),"<td align='right'><a href='$Gg&amp;schema=' id='tables-".h($m)."' title='".'Database schema'."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value=''>".script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^db/)); };")."<input type='submit' name='drop' value='".'Drop'."'>".confirm()."\n"."</div></fieldset>\n":""),script("tableCheck();"),"<input type='hidden' name='token' value='$Yh'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirectm(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}$df="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($zb){$this->size+=strlen($zb);fwrite($this->handler,$zb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$uc="'(?:''|[^'\\\\]|\\\\.)*'";$Id="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$bc->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$S=table_status1($a,true);page_header(($p&&is_view($S)?$S['Engine']=='materialized view'?'Materialized view':'View':'Table').": ".h($a),$n);$b->selectLinks($S);$tb=$S["Comment"];if($tb!="")echo"<p class='nowrap'>".'Comment'.": ".h($tb)."\n";if($p)$b->tableStructurePrint($p);if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".'Indexes'."</h3>\n";$x=indexes($a);if($x)$b->tableIndexesPrint($x);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".'Foreign keys'."</h3>\n";$Zc=foreign_keys($a);if($Zc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'."<td>&nbsp;</thead>\n";foreach($Zc
as$D=>$r){echo"<tr title='".h($D)."'>","<th><i>".implode("</i>, <i>",array_map('h',$r["source"]))."</i>","<td><a href='".h($r["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($r["db"]),ME):($r["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($r["ns"]),ME):ME))."table=".urlencode($r["table"])."'>".($r["db"]!=""?"<b>".h($r["db"])."</b>.":"").($r["ns"]!=""?"<b>".h($r["ns"])."</b>.":"").h($r["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$r["target"]))."</i>)","<td>".nbsp($r["on_delete"])."\n","<td>".nbsp($r["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($D)).'">'.'Alter'.'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".'Triggers'."</h3>\n";$ki=triggers($a);if($ki){echo"<table cellspacing='0'>\n";foreach($ki
as$z=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($z)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($z))."'>".'Alter'."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Add trigger'."</a>\n";}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Bh=array();$Ch=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$te,PREG_SET_ORDER);foreach($te
as$t=>$C){$Bh[$C[1]]=array($C[2],$C[3]);$Ch[]="\n\t'".js_escape($C[1])."': [ $C[2], $C[3] ]";}$Zh=0;$Qa=-1;$Ng=array();$tg=array();$je=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$Qf=0;$Ng[$R]["fields"]=array();foreach(fields($R)as$D=>$o){$Qf+=1.25;$o["pos"]=$Qf;$Ng[$R]["fields"][$D]=$o;}$Ng[$R]["pos"]=($Bh[$R]?$Bh[$R]:array($Zh,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$he=$Qa;if($Bh[$R][1]||$Bh[$X["table"]][1])$he=min(floatval($Bh[$R][1]),floatval($Bh[$X["table"]][1]))-1;else$Qa-=.1;while($je[(string)$he])$he-=.0001;$Ng[$R]["references"][$X["table"]][(string)$he]=array($X["source"],$X["target"]);$tg[$X["table"]][$R][(string)$he]=$X["target"];$je[(string)$he]=true;}}$Zh=max($Zh,$Ng[$R]["pos"][0]+2.5+$Qf);}echo'<div id="schema" style="height: ',$Zh,'em;">
<script',nonce(),'>
qs(\'#schema\').onselectstart = function () { return false; };
var tablePos = {',implode(",",$Ch)."\n",'};
var em = qs(\'#schema\').offsetHeight / ',$Zh,';
document.onmousemove = schemaMousemove;
document.onmouseup = partialArg(schemaMouseup, \'',js_escape(DB),'\');
</script>
';foreach($Ng
as$D=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;'>",'<a href="'.h(ME).'table='.urlencode($D).'"><b>'.h($D)."</b></a>",script("qsl('div').onmousedown = schemaMousedown;");foreach($R["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$Ih=>$ug){foreach($ug
as$he=>$qg){$ie=$he-$Bh[$D][1];$t=0;foreach($qg[0]as$hh)echo"\n<div class='references' title='".h($Ih)."' id='refs$he-".($t++)."' style='left: $ie"."em; top: ".$R["fields"][$hh]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$ie)."em;'></div></div>";}}foreach((array)$tg[$D]as$Ih=>$ug){foreach($ug
as$he=>$f){$ie=$he-$Bh[$D][1];$t=0;foreach($f
as$Hh)echo"\n<div class='references' title='".h($Ih)."' id='refd$he-".($t++)."' style='left: $ie"."em; top: ".$R["fields"][$Hh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME)."?file=arrow.gif) no-repeat right center;&version=4.5.0")."'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$ie)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Ng
as$D=>$R){foreach((array)$R["references"]as$Ih=>$ug){foreach($ug
as$he=>$qg){$He=$Zh;$xe=-10;foreach($qg[0]as$z=>$hh){$Rf=$R["pos"][0]+$R["fields"][$hh]["pos"];$Sf=$Ng[$Ih]["pos"][0]+$Ng[$Ih]["fields"][$qg[1][$z]]["pos"];$He=min($He,$Rf,$Sf);$xe=max($xe,$Rf,$Sf);}echo"<div class='references' id='refl$he' style='left: $he"."em; top: $He"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($xe-$He)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$Bb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$z)$Bb.="&$z=".urlencode($_POST[$z]);cookiem("adminer_export",substr($Bb,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Gc=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Qd=preg_match('~sql~',$_POST["format"]);if($Qd){echo"-- Adminer $ia ".$cc[DRIVER]." dump\n\n";if($y=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$th=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($g->select_db($m)){if($Qd&&preg_match('~CREATE~',$th)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($i);if($th=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$i;\n";}if($Qd){if($th)echo
use_sql($m).";\n\n";$xf="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Hg){foreach(get_rows("SHOW $Hg STATUS WHERE Db = ".q($m),null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE $Hg ".idf_escape($K["Name"]),2));set_utf8mb4($i);$xf.=($th!='DROP+CREATE'?"DROP $Hg IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($i);$xf.=($th!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}if($xf)echo"DELIMITER ;;\n\n$xf"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Ki=array();foreach(table_status('',true)as$D=>$S){$R=(DB==""||in_array($D,(array)$_POST["tables"]));$Jb=(DB==""||in_array($D,(array)$_POST["data"]));if($R||$Jb){if($Gc=="tar"){$Vh=new
TmpFile;ob_start(array($Vh,'write'),1e5);}$b->dumpTable($D,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$Ki[]=$D;elseif($Jb){$p=fields($D);$b->dumpData($D,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($D));}if($Qd&&$_POST["triggers"]&&$R&&($ki=trigger_sql($D)))echo"\nDELIMITER ;;\n$ki\nDELIMITER ;\n";if($Gc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$D.csv",$Vh);}elseif($Qd)echo"\n";}}foreach($Ki
as$Ji)$b->dumpTable($Ji,$_POST["table_style"],1);if($Gc=="tar")echo
pack("x512");}}}if($Qd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Nb=array('','USE','DROP+CREATE','CREATE');$Dh=array('','DROP+CREATE','CREATE');$Kb=array('','TRUNCATE+INSERT','INSERT');if($y=="sql")$Kb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($y=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$Nb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],'Routines'):"").(support("event")?checkbox("events",1,$K["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Dh,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$K["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Kb,$K["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$Yh,'">

<table cellspacing="0">
';$Vf=array();if(DB!=""){$eb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$eb>".'Tables'."</label>".script("qs('#check-tables').onclick = partial(formCheck, /^tables\\[/);",""),"<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$eb></label>".script("qs('#check-data').onclick = partial(formCheck, /^data\\[/);",""),"</thead>\n";$Ki="";$Eh=tables_list();foreach($Eh
as$D=>$U){$Uf=preg_replace('~_.*~','',$D);$eb=($a==""||$a==(substr($a,-1)=="%"?"$Uf%":$D));$Yf="<tr><td>".checkbox("tables[]",$D,$eb,$D,"checkboxClick.call(this, event); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Ki.="$Yf\n";else
echo"$Yf<td align='right'><label class='block'><span id='Rows-".h($D)."'></span>".checkbox("data[]",$D,$eb,"","checkboxClick.call(this, event); formUncheck('check-data');")."</label>\n";$Vf[$Uf]++;}echo$Ki;if($Eh)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}else{echo"<thead><tr><th style='text-align: left;'>","<label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"").">".'Database'."</label>",script("qs('#check-databases').onclick = partial(formCheck, /^databases\\[/);",""),"</thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$Uf=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$Uf%",$m,"formUncheck('check-databases');","block")."\n";$Vf[$Uf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Sc=true;foreach($Vf
as$z=>$X){if($z!=""&&$X>1){echo($Sc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$z%")."'>".h($z)."</a>";$Sc=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');echo'<p class="links"><a href="'.h(ME).'user=">'.'Create user'."</a>";$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$hd=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($hd?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.'Edit'."</a>\n";if(!$hd||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$sd=&get_session("queries");$rd=&$sd[DB];if(!$n&&$_POST["clear"]){$rd=array();redirectm(remove_from_uri("history"));}page_header((isset($_GET["import"])?'Import':'SQL command'),$n);if(!$n&&$_POST){$dd=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$mh=$b->importServerPath();$dd=@fopen((file_exists($mh)?$mh:"compress.zlib://$mh.gz"),"rb");$H=($dd?fread($dd,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$hg=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$rd||reset(end($rd))!=$hg){restart_session();$rd[]=array($hg,time());set_session("queries",$sd);stop_session();}}$ih="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Sb=";";$E=0;$rc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$sb=0;$wc=array();$Cf='[\'"'.($y=="sql"?'`#':($y=="sqlite"?'`[':($y=="mssql"?'[':''))).']|/\\*|-- |$'.($y=="pgsql"?'|\\$[^$]*\\$':'');$ai=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$ic=$b->dumpFormat();unset($ic["sql"]);while($H!=""){if(!$E&&preg_match("~^$ih*+DELIMITER\\s+(\\S+)~i",$H,$C)){$Sb=$C[1];$H=substr($H,strlen($C[0]));}else{preg_match('('.preg_quote($Sb)."\\s*|$Cf)",$H,$C,PREG_OFFSET_CAPTURE,$E);list($bd,$Qf)=$C[0];if(!$bd&&$dd&&!feof($dd))$H.=fread($dd,1e5);else{if(!$bd&&rtrim($H)=="")break;$E=$Qf+strlen($bd);if($bd&&rtrim($bd)!=$Sb){while(preg_match('('.($bd=='/*'?'\\*/':($bd=='['?']':(preg_match('~^-- |^#~',$bd)?"\n":preg_quote($bd)."|\\\\."))).'|$)s',$H,$C,PREG_OFFSET_CAPTURE,$E)){$Lg=$C[0][0];if(!$Lg&&$dd&&!feof($dd))$H.=fread($dd,1e5);else{$E=$C[0][1]+strlen($Lg);if($Lg[0]!="\\")break;}}}else{$rc=false;$hg=substr($H,0,$Qf);$sb++;$Yf="<pre id='sql-$sb'><code class='jush-$y'>".$b->sqlCommandQuery($hg)."</code></pre>\n";if($y=="sqlite"&&preg_match("~^$ih*+ATTACH\\b~i",$hg,$C)){echo$Yf,"<p class='error'>".'ATTACH queries are not supported.'."\n";$wc[]=" <a href='#sql-$sb'>$sb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Yf;ob_flush();flush();}$oh=microtime(true);if($g->multi_query($hg)&&is_object($h)&&preg_match("~^$ih*+USE\\b~i",$hg))$h->query($hg);do{$I=$g->store_result();$Oh=" <span class='time'>(".format_time($oh).")</span>".(strlen($hg)<1000?" <a href='".h(ME)."sql=".urlencode(trim($hg))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$Yf:""),"<p class='error'>".'Error in query'.($g->errno?" ($g->errno)":"").": ".error()."\n";$wc[]=" <a href='#sql-$sb'>$sb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$_=$_POST["limit"];$qf=select($I,$h,array(),$_);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Te=$I->num_rows;echo"<p>".($Te?($_&&$Te>$_?sprintf('%d / ',$_):"").lang(array('%d row','%d rows'),$Te):""),$Oh;$u="export-$sb";$Ec=", <a href='#$u'>".'Export'."</a>".script("qsl('a').onclick = partial(toggle, '$u');","")."<span id='$u' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$ic,$xa["format"])."<input type='hidden' name='query' value='".h($hg)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$Yh'></span>\n";if($h&&preg_match("~^($ih|\\()*+SELECT\\b~i",$hg)&&($Dc=explain($h,$hg))){$u="explain-$sb";echo", <a href='#$u'>EXPLAIN</a>".script("qsl('a').onclick = partial(toggle, '$u');","").$Ec,"<div id='$u' class='hidden'>\n";select($Dc,$h,$qf);echo"</div>\n";}else
echo$Ec;echo"</form>\n";}}else{if(preg_match("~^$ih*+(CREATE|DROP|ALTER)$ih++(DATABASE|SCHEMA)\\b~i",$hg)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$Oh\n";}$oh=microtime(true);}while($g->next_result());}$H=substr($H,$E);$E=0;}}}}if($rc)echo"<p class='message'>".'No commands to execute.'."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$sb-count($wc))," <span class='time'>(".format_time($ai).")</span>\n";}elseif($wc&&$sb>1)echo"<p class='error'>".'Error in query'.": ".implode("",$wc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$Ac="<input type='submit' value='".'Execute'."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$hg=$_GET["sql"];if($_POST)$hg=$_POST["query"];elseif($_GET["history"]=="all")$hg=$rd;elseif($_GET["history"]!="")$hg=$rd[$_GET["history"]][0];echo"<p>";textarea("query",$hg,20);echo($_POST?"":script("qs('textarea').focus();")),"<p>$Ac\n",'Limit rows'.": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".'File upload'."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$Ac":'File uploads are disabled.'),"</div></fieldset>\n","<fieldset><legend>".'From server'."</legend><div>",sprintf('Webserver file %s',"<code>".h($b->importServerPath()).(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),'Stop on error')."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),'Show only errors')."\n","<input type='hidden' name='token' value='$Yh'>\n";if(!isset($_GET["import"])&&$rd){print_fieldset("history",'History',$_GET["history"]!="");for($X=end($rd);$X;$X=prev($rd)){$z=key($rd);list($hg,$Oh,$mc)=$X;echo'<a href="'.h(ME."sql=&history=$z").'">'.'Edit'."</a>"." <span class='time' title='".@date('Y-m-d',$Oh)."'>".@date("H:i:s",$Oh)."</span>"." <code class='jush-$y'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$hg)))),80,"</code>").($mc?" <span class='time'>($mc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?($_POST["check"]&&count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$vi=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$D=>$o){if(!isset($o["privileges"][$vi?"update":"insert"])||$b->fieldName($o)=="")unset($p[$D]);}if($_POST&&!$n&&!isset($_GET["select"])){$B=$_POST["referer"];if($_POST["insert"])$B=($vi?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$B))$B=ME."select=".urlencode($a);$x=indexes($a);$qi=unique_array($_GET["where"],$x);$kg="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($B,'Item has been deleted.',$bc->delete($a,$kg,!$qi));else{$O=array();foreach($p
as$D=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($D)]=$X;}if($vi){if(!$O)redirectm($B);queries_redirect($B,'Item has been updated.',$bc->update($a,$O,$kg,!$qi));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$bc->insert($a,$O);$ge=($I?last_id():0);queries_redirect($B,sprintf('Item%s has been inserted.',($ge?" $ge":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$D=>$o){if(isset($o["privileges"]["select"])){$Ga=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ga="''";if($y=="sql"&&preg_match("~enum|set~",$o["type"]))$Ga="1*".idf_escape($D);$M[]=($Ga?"$Ga AS ":"").idf_escape($D);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$bc->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));if(!$I)$n=error();else{$K=$I->fetch_assoc();if(!$K)$K=false;}if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$bc->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($bc->primary=>"");}if($K){foreach($K
as$z=>$X){if(!$Z)$K[$z]=null;$p[$z]=array("field"=>$z,"null"=>($z!=$bc->primary),"auto_increment"=>($z==$bc->primary));}}}edit_form($a,$p,$K,$vi);}elseif(isset($_GET["create"])){$a=$_GET["create"];$Ef=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$z)$Ef[$z]=$z;$sg=referencable_primary($a);$Zc=array();foreach($sg
as$_h=>$o)$Zc[str_replace("`","``",$_h)."`".str_replace("`","``",$o["field"])]=$_h;$tf=array();$S=array();if($a!=""){$tf=fields($a);$S=table_status($a);if(!$S)$n='No tables.';}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),'Table has been dropped.',drop_tables(array($a)));else{$p=array();$Da=array();$_i=false;$Xc=array();$sf=reset($tf);$Aa=" FIRST";foreach($K["fields"]as$z=>$o){$r=$Zc[$o["type"]];$li=($r!==null?$sg[$r]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($z==$K["auto_increment_col"])$o["auto_increment"]=true;$dg=process_field($o,$li);$Da[]=array($o["orig"],$dg,$Aa);if($dg!=process_field($sf,$sf)){$p[]=array($o["orig"],$dg,$Aa);if($o["orig"]!=""||$Aa)$_i=true;}if($r!==null)$Xc[idf_escape($o["field"])]=($a!=""&&$y!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Zc[$o["type"]],'source'=>array($o["field"]),'target'=>array($li["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$_i=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$sf=next($tf);if(!$sf)$Aa="";}}$Gf="";if($Ef[$K["partition_by"]]){$Hf=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$z=>$X){$Y=$K["partition_values"][$z];$Hf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Gf.="\nPARTITION BY $K[partition_by]($K[partition])".($Hf?" (".implode(",",$Hf)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$Gf.="\nREMOVE PARTITIONING";$Ae='Table has been altered.';if($a==""){cookiem("adminer_engine",$K["Engine"]);$Ae='Table has been created.';}$D=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($D),$Ae,alter_table($a,$D,($y=="sqlite"&&($_i||$Xc)?$Da:$p),$Xc,($K["Comment"]!=$S["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$S["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$S["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$Gf));}}page_header(($a!=""?'Alter table':'Create table'),$n,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($ni["int"])?"int":(isset($ni["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$S;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($tf
as$o){$o["has_default"]=isset($o["default"]);$K["fields"][]=$o;}if(support("partitioning")){$ed="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $ed ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$Hf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $ed AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$Hf[""]="";$K["partition_names"]=array_keys($Hf);$K["partition_values"]=array_values($Hf);}}}$ob=collations();$tc=engines();foreach($tc
as$sc){if(!strcasecmp($sc,$K["Engine"])){$K["Engine"]=$sc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo'Table name: <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST)echo
script("focus(qs('#form')['name']);");echo($tc?"<select name='Engine'>".optionlist(array(""=>"(".'engine'.")")+$tc,$K["Engine"])."</select>".on_help("getTarget(event).value",1).script("qsl('select').onchange = helpClose;"):""),' ',($ob&&!preg_match("~sqlite|mssql~",$y)?html_select("Collation",array(""=>"(".'collation'.")")+$ob,$K["Collation"]):""),' <input type="submit" value="Save">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$ub=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$ub){foreach($K["fields"]as$o){if($o["comment"]!=""){$ub=true;break;}}}edit_fields($K["fields"],$ob,"TABLE",$Zc,$ub);echo'</table>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,'Default values',"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"])echo
script("editingHideDefaults();");echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly'".($ub?" checked":"").">".'Comment'."</label>".script("qsl('input').onclick = function () { columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus(); };").' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($ub?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$a));}if(support("partitioning")){$Ff=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",'Partition by',$K["partition_by"]);echo'<p>
',"<select name='partition_by'>".optionlist(array(""=>"")+$Ef,$K["partition_by"])."</select>".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).script("qsl('select').onchange = partitionByChange;"),'(<input name="partition" value="',h($K["partition"]),'">)
Partitions: <input type="number" name="partitions" class="size',($Ff||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($Ff?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($K["partition_names"]as$z=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'" autocapitalize="off">',($z==count($K["partition_names"])-1?script("qsl('input').oninput = partitionNameChange;"):''),'<td><input name="partition_values[]" value="'.h($K["partition_values"][$z]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Ad=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);$Yg=$g->server_info;$fd=($Yg>=5.6);$jh=($Yg>=5.7);if(preg_match('~([\d.]+)-MariaDB~',$Yg,$C)){$Yg=$C[1];$fd=(version_compare($Yg,'10.0.5')>=0);$jh=(version_compare($Yg,'10.2.2')>=0);}if(preg_match('~MyISAM|M?aria'.($fd?'|InnoDB':'').'~i',$S["Engine"]))$Ad[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.($jh?'|InnoDB':'').'~i',$S["Engine"]))$Ad[]="SPATIAL";$x=indexes($a);$Wf=array();if($y=="mongo"){$Wf=$x["_id_"];unset($Ad[0]);unset($x["_id_"]);}$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$w){$D=$w["name"];if(in_array($w["type"],$Ad)){$f=array();$me=array();$Ub=array();$O=array();ksort($w["columns"]);foreach($w["columns"]as$z=>$e){if($e!=""){$le=$w["lengths"][$z];$Tb=$w["descs"][$z];$O[]=idf_escape($e).($le?"(".(+$le).")":"").($Tb?" DESC":"");$f[]=$e;$me[]=($le?$le:null);$Ub[]=$Tb;}}if($f){$Bc=$x[$D];if($Bc){ksort($Bc["columns"]);ksort($Bc["lengths"]);ksort($Bc["descs"]);if($w["type"]==$Bc["type"]&&array_values($Bc["columns"])===$f&&(!$Bc["lengths"]||array_values($Bc["lengths"])===$me)&&array_values($Bc["descs"])===$Ub){unset($x[$D]);continue;}}$c[]=array($w["type"],$D,$O);}}}foreach($x
as$D=>$Bc)$c[]=array($Bc["type"],$D,"DROP");if(!$c)redirectm(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$c));}page_header('Indexes',$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$z=>$w){if($w["columns"][count($w["columns"])]!="")$K["indexes"][$z]["columns"][]="";}$w=end($K["indexes"]);if($w["type"]||array_filter($w["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($x
as$z=>$w){$x[$z]["name"]=$z;$x[$z]["columns"][]="";}$x[]=array("columns"=>array(1=>""));$K["indexes"]=$x;}?>

<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">Index Type
<th><input type="submit" class="wayoff">Column (length)
<th id="label-name">Name
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME) . "?file=plus.gif&version=4.5.0") . "' alt='+' title='Add next'></noscript>&nbsp;
</thead>
<?php
if($Wf){echo"<tr><td>PRIMARY<td>";foreach($Wf["columns"]as$z=>$e){echo
select_input(" disabled",$p,$e),"<label><input disabled type='checkbox'>".'descending'."</label> ";}echo"<td><td>\n";}$Ud=1;foreach($K["indexes"]as$w){if(!$_POST["drop_col"]||$Ud!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Ud][type]",array(-1=>"")+$Ad,$w["type"],($Ud==count($K["indexes"])?"indexesAddRow.call(this);":1),"label-type"),"<td>";ksort($w["columns"]);$t=1;foreach($w["columns"]as$z=>$e){echo"<span>".select_input(" name='indexes[$Ud][columns][$t]' title='".'Column'."'",($p?array_combine($p,$p):$p),$e,"partial(".($t==count($w["columns"])?"indexesAddColumn":"indexesChangeColumn").", '".js_escape($y=="sql"?"":$_GET["indexes"]."_")."')"),($y=="sql"||$y=="mssql"?"<input type='number' name='indexes[$Ud][lengths][$t]' class='size' value='".h($w["lengths"][$z])."' title='".'Length'."'>":""),($y!="sql"?checkbox("indexes[$Ud][descs][$t]",1,$w["descs"][$z],'descending'):"")," </span>";$t++;}echo"<td><input name='indexes[$Ud][name]' value='".h($w["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Ud]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.5.0")."' alt='x' title='".'Remove'."'>".script("qsl('input').onclick = partial(editingRemoveRow, 'indexes\$1[type]');");}$Ud++;}echo'</table>
<p>
<input type="submit" value="Save">
<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$D=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$D){if(DB!=""){$_GET["db"]=$D;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($D),'Database has been renamed.',rename_database($D,$K["collation"]));}else{$l=explode("\n",str_replace("\r","",$D));$uh=true;$fe="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$K["collation"]))$uh=false;$fe=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($fe),'Database has been created.',$uh);}}else{if(!$K["collation"])redirectm(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($D).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$n,array(),h(DB));$ob=collations();$D=DB;if($_POST)$D=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$ob);elseif($y=="sql"){foreach(get_vals("SHOW GRANTS")as$hd){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$hd,$C)&&$C[1]){$D=stripcslashes(idf_unescape("`$C[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($D,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($D).'</textarea><br>':'<input name="name" id="name" value="'.h($D).'" maxlength="64" autocapitalize="off">')."\n".($ob?html_select("collation",array(""=>"(".'collation'.")")+$ob,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):""),script("focus(qs('#name'));"),'<input type="submit" value="Save">
';if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'>".confirm(sprintf('Drop %s?',DB))."\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.5.0")."' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$n){$A=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$A,'Schema has been dropped.');else{$D=trim($K["name"]);$A.=urlencode($D);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($D),$A,'Schema has been created.');elseif($_GET["ns"]!=$D)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($D),$A,'Schema has been altered.');else
redirectm($A);}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$n);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]),'" autocapitalize="off">
',script("focus(qs('#name'));"),'<input type="submit" value="Save">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Drop'."'>".confirm(sprintf('Drop %s?',$_GET["ns"]))."\n";echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Call'.": ".h($da),$n);$Hg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$zd=array();$xf=array();foreach($Hg["fields"]as$t=>$o){if(substr($o["inout"],-3)=="OUT")$xf[$t]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$zd[]=$t;}if(!$n&&$_POST){$Za=array();foreach($Hg["fields"]as$z=>$o){if(in_array($z,$zd)){$X=process_input($o);if($X===false)$X="''";if(isset($xf[$z]))$g->query("SET @".idf_escape($o["field"])." = $X");}$Za[]=(isset($xf[$z])?"@".idf_escape($o["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$Za).")";echo"<p><code class='jush-$y'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}while($g->next_result());if($xf)select($g->query("SELECT ".implode(", ",$xf)));}}echo'
<form action="" method="post">
';if($zd){echo"<table cellspacing='0'>\n";foreach($zd
as$z){$o=$Hg["fields"][$z];$D=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$D];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}inputm($o,$Y,(string)$_POST["function"][$D]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$D=$_GET["name"];$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$Ae=($_POST["drop"]?'Foreign key has been dropped.':($D!=""?'Foreign key has been altered.':'Foreign key has been created.'));$B=ME."table=".urlencode($a);if(!$_POST["drop"]){$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$Hh=array();foreach($K["source"]as$z=>$X)$Hh[$z]=$K["target"][$z];$K["target"]=$Hh;}if($y=="sqlite")queries_redirect($B,$Ae,recreate_table($a,$a,array(),array(),array(" $D"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$dc="\nDROP ".($y=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($D);if($_POST["drop"])query_redirect($c.$dc,$B,$Ae);else{query_redirect($c.($D!=""?"$dc,":"")."\nADD".format_foreign_key($K),$B,$Ae);$n='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$n";}}}page_header('Foreign key',$n,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($D!=""){$Zc=foreign_keys($a);$K=$Zc[$D];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$hh=array_keys(fields($a));$Hh=($a===$K["table"]?$hh:array_keys(fields($K["table"])));$rg=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo'Target table:
',html_select("table",$rg,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">Source<th id="label-target">Target</thead>
';$Ud=0;foreach($K["source"]as$z=>$X){echo"<tr>","<td>".html_select("source[".(+$z)."]",array(-1=>"")+$hh,$X,($Ud==count($K["source"])-1?"foreignAddRow.call(this);":1),"label-source"),"<td>".html_select("target[".(+$z)."]",$Hh,$K["target"][$z],1,"label-target");$Ud++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$df),$K["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$df),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($D!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$D));}echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;$uf="VIEW";if($y=="pgsql"&&$a!=""){$P=table_status($a);$uf=strtoupper($P["Engine"]);}if($_POST&&!$n){$D=trim($K["name"]);$Ga=" AS\n$K[select]";$B=ME."table=".urlencode($D);$Ae='View has been altered.';$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$D&&$y!="sqlite"&&$U=="VIEW"&&$uf=="VIEW")query_redirect(($y=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($D).$Ga,$B,$Ae);else{$Jh=$D."_adminer_".uniqid();drop_create("DROP $uf ".table($a),"CREATE $U ".table($D).$Ga,"DROP $U ".table($D),"CREATE $U ".table($Jh).$Ga,"DROP $U ".table($Jh),($_POST["drop"]?substr(ME,0,-1):$B),'View has been dropped.',$Ae,'View has been created.',$a,$D);}}if(!$_POST&&$a!=""){$K=viewm($a);$K["name"]=$a;$K["materialized"]=($uf!="VIEW");if(!$n)$n=error();}page_header(($a!=""?'Alter view':'Create view'),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$K["materialized"],'Materialized view'):""),'<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="Save">
';if($a!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$a));}echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Ld=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$qh=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($K["INTERVAL_FIELD"],$Ld)&&isset($qh[$K["STATUS"]])){$Mg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Mg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$Mg)."\n".$qh[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$n);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">Start<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">End<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>Every<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Ld,$K["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$qh,$K["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($aa!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$aa));}echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$Hg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$n){$Jh="$K[name]_adminer_".uniqid();drop_create("DROP $Hg ".idf_escape($da),create_routine($Hg,$K),"DROP $Hg ".idf_escape($K["name"]),create_routine($Hg,array("name"=>$Jh)+$K),"DROP $Hg ".idf_escape($Jh),substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$n);if(!$_POST&&$da!=""){$K=routine($da,$Hg);$K["name"]=$da;}$ob=get_vals("SHOW CHARACTER SET");sort($ob);$Ig=routine_languages();echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($Ig?'Language'.": ".html_select("language",$Ig,$K["language"]):""),'<input type="submit" value="Save">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$ob,$Hg);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$K["returns"],$ob);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$da));}echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$n){$A=substr(ME,0,-1);$D=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$A,'Sequence has been dropped.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($D),$A,'Sequence has been created.');elseif($fa!=$D)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($D),$A,'Sequence has been altered.');else
redirectm($A);}page_header($fa!=""?'Alter sequence'.": ".h($fa):'Create sequence',$n);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="Save">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Drop'."'>".confirm(sprintf('Drop %s?',$fa))."\n";echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$n){$A=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$A,'Type has been dropped.');else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$A,'Type has been created.');}page_header($ga!=""?'Alter type'.": ".h($ga):'Create type',$n);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Drop'."'>".confirm(sprintf('Drop %s?',$ga))."\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$D=$_GET["name"];$ji=trigger_options();$K=(array)trigger($D)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$ji["Timing"])&&in_array($_POST["Event"],$ji["Event"])&&in_array($_POST["Type"],$ji["Type"])){$cf=" ON ".table($a);$dc="DROP TRIGGER ".idf_escape($D).($y=="pgsql"?$cf:"");$B=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($dc,$B,'Trigger has been dropped.');else{if($D!="")queries($dc);queries_redirect($B,($D!=""?'Trigger has been altered.':'Trigger has been created.'),queries(create_trigger($cf,$_POST)));if($D!="")queries(create_trigger($cf,$K+array("Type"=>reset($ji["Type"]))));}}$K=$_POST;}page_header(($D!=""?'Alter trigger'.": ".h($D):'Create trigger'),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$ji["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>Event<td>',html_select("Event",$ji["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$ji["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>Type<td>',html_select("Type",$ji["Type"],$K["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($K["Trigger"]),'" maxlength="64" autocapitalize="off">
',script("qs('#form')['Timing'].onchange();"),'<p>';textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($D!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$D));}echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$bg=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$_b)$bg[$_b][$K["Privilege"]]=$K["Comment"];}$bg["Server Admin"]+=$bg["File access on server"];$bg["Databases"]["Create routine"]=$bg["Procedures"]["Create routine"];unset($bg["Procedures"]["Create routine"]);$bg["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$bg["Columns"][$X]=$bg["Tables"][$X];unset($bg["Server Admin"]["Usage"]);foreach($bg["Tables"]as$z=>$X)unset($bg["Databases"][$z]);$Ne=array();if($_POST){foreach($_POST["objects"]as$z=>$X)$Ne[$X]=(array)$Ne[$X]+(array)$_POST["grants"][$z];}$id=array();$af="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$C)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$C[1],$te,PREG_SET_ORDER)){foreach($te
as$X){if($X[1]!="USAGE")$id["$C[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$id["$C[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$C))$af=$C[1];}}if($_POST&&!$n){$bf=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $bf",ME."privileges=",'User has been dropped.');else{$Pe=q($_POST["user"])."@".q($_POST["host"]);$Jf=$_POST["pass"];if($Jf!=''&&!$_POST["hashed"]){$Jf=$g->result("SELECT PASSWORD(".q($Jf).")");$n=!$Jf;}$Eb=false;if(!$n){if($bf!=$Pe){$Eb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Pe IDENTIFIED BY PASSWORD ".q($Jf));$n=!$Eb;}elseif($Jf!=$af)queries("SET PASSWORD FOR $Pe = ".q($Jf));}if(!$n){$Eg=array();foreach($Ne
as$Ve=>$hd){if(isset($_GET["grant"]))$hd=array_filter($hd);$hd=array_keys($hd);if(isset($_GET["grant"]))$Eg=array_diff(array_keys(array_filter($Ne[$Ve],'strlen')),$hd);elseif($bf==$Pe){$Ye=array_keys((array)$id[$Ve]);$Eg=array_diff($Ye,$hd);$hd=array_diff($hd,$Ye);unset($id[$Ve]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ve,$C)&&(!grant("REVOKE",$Eg,$C[2]," ON $C[1] FROM $Pe")||!grant("GRANT",$hd,$C[2]," ON $C[1] TO $Pe"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($bf!=$Pe)queries("DROP USER $bf");elseif(!isset($_GET["grant"])){foreach($id
as$Ve=>$Eg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ve,$C))grant("REVOKE",array_keys($Eg),$C[2]," ON $C[1] FROM $Pe");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$n);if($Eb)$g->query("DROP USER $Pe");}}page_header((isset($_GET["host"])?'Username'.": ".h("$ha@$_GET[host]"):'Create user'),$n,array("privileges"=>array('','Privileges')));if($_POST){$K=$_POST;$id=$Ne;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$af;if($af!="")$K["hashed"]=true;$id[(DB==""||$id?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>Password<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"])echo
script("typePassword(qs('#pass'));");echo
checkbox("hashed",1,$K["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".'Privileges'.doc_link(array('sql'=>"grant.html#priv_level"));$t=0;foreach($id
as$Ve=>$hd){echo'<th>'.($Ve!="*.*"?"<input name='objects[$t]' value='".h($Ve)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$t]' value='*.*' size='10'>*.*");$t++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$_b=>$Tb){foreach((array)$bg[$_b]as$ag=>$tb){echo"<tr".odd()."><td".($Tb?">$Tb<td":" colspan='2'").' lang="en" title="'.h($tb).'">'.h($ag);$t=0;foreach($id
as$Ve=>$hd){$D="'grants[$t][".h(strtoupper($ag))."]'";$Y=$hd[strtoupper($ag)];if($_b=="Server Admin"&&$Ve!=(isset($id["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$D><option><option value='1'".($Y?" selected":"").">".'Grant'."<option value='0'".($Y=="0"?" selected":"").">".'Revoke'."</select>";else{echo"<td align='center'><label class='block'>","<input type='checkbox' name=$D value='1'".($Y?" checked":"").($ag=="All privileges"?" id='grants-$t-all'>":">".($ag=="Grant option"?"":script("qsl('input').onclick = function () { if (this.checked) formUncheck('grants-$t-all'); };"))),"</label>";}$t++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',"$ha@$_GET[host]"));}echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$be=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$be++;}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$be),$be||!$_POST["kill"]);}page_header('Process list',$n);echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap checkable">
',script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});");$t=-1;foreach(process_list()as$t=>$K){if(!$t){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$z=>$X)echo"<th>$z".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($z),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K[$y=="sql"?"Id":"pid"],0):"");foreach($K
as$z=>$X)echo"<td>".(($y=="sql"&&$z=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($y=="pgsql"&&$z=="current_query"&&$X!="<IDLE>")||($y=="oracle"&&$z=="sql_text"&&$X!="")?"<code class='jush-$y'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.'Clone'.'</a>':nbsp($X));echo"\n";}echo'</table>
',script("tableCheck();"),'<p>
';if(support("kill")){echo($t+1)."/".sprintf('%d in total',max_connections()),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$Yh,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$x=indexes($a);$p=fields($a);$Zc=column_foreign_keys($a);$Xe="";if($S["Oid"]){$Xe=($y=="sqlite"?"rowid":"oid");$x[]=array("type"=>"PRIMARY","columns"=>array($Xe));}parse_str($_COOKIE["adminer_import"],$ya);$Fg=array();$f=array();$Nh=null;foreach($p
as$z=>$o){$D=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$D!=""){$f[$z]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($o))$Nh=$b->selectLengthProcess();}$Fg+=$o["privileges"];}list($M,$jd)=$b->selectColumnsProcess($f,$x);$Pd=count($jd)<count($M);$Z=$b->selectSearchProcess($p,$x);$nf=$b->selectOrderProcess($p,$x);$_=$b->selectLimitProcess();$ed=($M?implode(", ",$M):"*".($Xe?", $Xe":"")).convert_fields($f,$p,$M)."\nFROM ".table($a);$kd=($jd&&$Pd?"\nGROUP BY ".implode(", ",$jd):"").($nf?"\nORDER BY ".implode(", ",$nf):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ri=>$K){$Ga=convert_field($p[key($K)]);$M=array($Ga?$Ga:idf_escape(key($K)));$Z[]=where_check($ri,$p);$J=$bc->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$n){$Ri=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$fb=array();foreach($_POST["check"]as$cb)$fb[]=where_check($cb,$p);$Ri[]="((".implode(") OR (",$fb)."))";}$Ri=($Ri?"\nWHERE ".implode(" AND ",$Ri):"");$Wf=$ti=null;foreach($x
as$w){if($w["type"]=="PRIMARY"){$Wf=array_flip($w["columns"]);$ti=($M?$Wf:array());break;}}foreach((array)$ti
as$z=>$X){if(in_array(idf_escape($z),$M))unset($ti[$z]);}if($_POST["export"]){cookiem("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$ti===array())$H="SELECT $ed$Ri$kd";else{$pi=array();foreach($_POST["check"]as$X)$pi[]="(SELECT".limit($ed,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$kd,1).")";$H=implode(" UNION ALL ",$pi);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Zc)){if($_POST["save"]||$_POST["delete"]){$I=true;$za=0;$O=array();if(!$_POST["delete"]){foreach($f
as$D=>$X){$X=process_input($p[$D]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($D)]=($X!==false?$X:idf_escape($D));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($ti===array()&&is_array($_POST["check"]))||$Pd){$I=($_POST["delete"]?$bc->delete($a,$Ri):($_POST["clone"]?queries("INSERT $H$Ri"):$bc->update($a,$O,$Ri)));$za=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Ni="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$bc->delete($a,$Ni,1):($_POST["clone"]?queries("INSERT".limit1($H,$Ni)):$bc->update($a,$O,$Ni)));if(!$I)break;$za+=$g->affected_rows;}}}$Ae=lang(array('%d item has been affected.','%d items have been affected.'),$za);if($_POST["clone"]&&$I&&$za==1){$ge=last_id();if($ge)$Ae=sprintf('Item%s has been inserted.'," $ge");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$Ae,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n='Ctrl+click on a value to modify it.';else{$I=true;$za=0;foreach($_POST["val"]as$ri=>$K){$O=array();foreach($K
as$z=>$X){$z=bracket_escape($z,1);$O[idf_escape($z)]=(preg_match('~char|text~',$p[$z]["type"])||$X!=""?$b->processInput($p[$z],$X):"NULL");}$I=$bc->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($ri,$p),!($Pd||$ti===array())," ");if(!$I)break;$za+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$za),$I);}}elseif(!is_string($Qc=get_file("csv_file",true)))$n=upload_error($Qc);elseif(!preg_match('~~u',$Qc))$n='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$I=true;$qb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Qc,$te);$za=count($te[0]);$bc->begin();$Vg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($te[0]as$z=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Vg]*)$Vg~",$X.$Vg,$ue);if(!$z&&!array_diff($ue[1],$qb)){$qb=$ue[1];$za--;}else{$O=array();foreach($ue[1]as$t=>$mb)$O[idf_escape($qb[$t])]=($mb==""&&$p[$qb[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$mb))));$L[]=$O;}}$I=(!$L||$bc->insertUpdate($a,$L,$Wf));if($I)$I=$bc->commit();queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$za),$I);$bc->rollback();}}}$_h=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $_h",$n);$O=null;if(isset($Fg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if($Zc[$X["col"]]&&count($Zc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$O);if(!$f&&support("table"))echo"<p class='error'>".'Unable to select the table'.($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($Z,$f,$x);$b->selectOrderPrint($nf,$f,$x);$b->selectLimitPrint($_);$b->selectLengthPrint($Nh);$b->selectActionPrint($x);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$cd=$g->result(count_rows($a,$Z,$Pd,$jd));$F=floor(max(0,$cd-1)/$_);}$Rg=$M;if(!$Rg){$Rg[]="*";if($Xe)$Rg[]=$Xe;}$Ab=convert_fields($f,$p,$M);if($Ab)$Rg[]=substr($Ab,2);$I=$bc->select($a,$Rg,$Z,$jd,$nf,$_,$F,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($y=="mssql"&&$F)$I->seek($_*$F);$qc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($F&&$y=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&$_!=""&&$jd&&$Pd&&$y=="sql")$cd=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".'No rows.'."\n";else{$Pa=$b->backwardKeys($a,$_h);echo"<table id='table' cellspacing='0' class='nowrap checkable'>",script("mixin(qs('#table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true), onkeydown: editingKeydown});"),"<thead><tr>".(!$jd&&$M?"":"<td><input type='checkbox' id='all-page' class='jsonly'>".script("qs('#all-page').onclick = partial(formCheck, /check/);","")." <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$Me=array();$gd=array();reset($M);$mg=1;foreach($L[0]as$z=>$X){if($z!=$Xe){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$z];$D=($o?$b->fieldName($o,$mg):($X["fun"]?"*":$z));if($D!=""){$mg++;$Me[$z]=$D;$e=idf_escape($z);$vd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($z);$Tb="&desc%5B0%5D=1";echo"<th>".script("mixin(qsl('th'), {onmouseover: partial(columnMouse), onmouseout: partial(columnMouse, ' hidden')});",""),'<a href="'.h($vd.($nf[0]==$e||$nf[0]==$z||(!$nf&&$Pd&&$jd[0]==$e)?$Tb:'')).'">';echo
apply_sql_function($X["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($vd.$Tb)."' title='".'descending'."' class='text'> ‚Üì</a>";if(!$X["fun"]){echo'<a href="#fieldset-search" title="'.'Search'.'" class="text jsonly"> =</a>',script("qsl('a').onclick = partial(selectSearch, '".js_escape($z)."');");}echo"</span>";}$gd[$z]=$X["fun"];next($M);}}$me=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$z=>$X)$me[$z]=max($me[$z],min(40,strlen(utf8_decode($X))));}}echo($Pa?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($_%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Zc)as$Le=>$K){$qi=unique_array($L[$Le],$x);if(!$qi){$qi=array();foreach($L[$Le]as$z=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$z))$qi[$z]=$X;}}$ri="";foreach($qi
as$z=>$X){if(($y=="sql"||$y=="pgsql")&&preg_match('~char|text|enum|set~',$p[$z]["type"])&&strlen($X)>64){$z=(strpos($z,'(')?$z:idf_escape($z));$z="MD5(".($y!='sql'||preg_match("~^utf8~",$p[$z]["collation"])?$z:"CONVERT($z USING ".charset($g).")").")";$X=md5($X);}$ri.="&".($X!==null?urlencode("where[".bracket_escape($z)."]")."=".urlencode($X):"null%5B%5D=".urlencode($z));}echo"<tr".odd().">".(!$jd&&$M?"":"<td>".checkbox("check[]",substr($ri,1),in_array(substr($ri,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Pd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$ri)."'>".'edit'."</a>"));foreach($K
as$z=>$X){if(isset($Me[$z])){$o=$p[$z];if($X!=""&&(!isset($qc[$z])||$qc[$z]!=""))$qc[$z]=(is_mail($X)?$Me[$z]:"");$A="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$A=ME.'download='.urlencode($a).'&field='.urlencode($z).$ri;if(!$A&&$X!==null){foreach((array)$Zc[$z]as$r){if(count($Zc[$z])==1||end($r["source"])==$z){$A="";foreach($r["source"]as$t=>$hh)$A.=where_link($t,$r["target"][$t],$L[$Le][$hh]);$A=($r["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($r["db"]),ME):ME).'select='.urlencode($r["table"]).$A;if($r["ns"])$A=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($r["ns"]),$A);if(count($r["source"])==1)break;}}}if($z=="COUNT(*)"){$A=ME."select=".urlencode($a);$t=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$qi))$A.=where_link($t++,$W["col"],$W["val"],$W["op"]);}foreach($qi
as$Vd=>$W)$A.=where_link($t++,$Vd,$W);}$X=select_value($X,$A,$o,$Nh);$u=h("val[$ri][".bracket_escape($z)."]");$Y=$_POST["val"][$ri][bracket_escape($z)];$lc=!is_array($K[$z])&&is_utf8($X)&&$L[$Le][$z]==$K[$z]&&!$gd[$z];$Mh=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$lc)||$Y!==null){$md=h($Y!==null?$Y:$K[$z]);echo"<td>".($Mh?"<textarea name='$u' cols='30' rows='".(substr_count($K[$z],"\n")+1)."'>$md</textarea>":"<input name='$u' value='$md' size='$me[$z]'>");}else{$qe=strpos($X,"<i>...</i>");echo"<td id='$u'>$X</td>",script("qsl('td').onclick = partialArg(selectClick, ".($qe?2:($Mh?1:0)).($lc?"":", '".h('Use edit link to modify this value.')."'").");","");}}}if($Pa)echo"<td>";$b->backwardKeysPrint($Pa,$L[$Le]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$F)&&!is_ajax()){$_c=true;if($_GET["page"]!="last"){if($_=="")$cd=count($L);elseif($y!="sql"||!$Pd){$cd=($Pd?false:found_rows($S,$Z));if($cd<max(1e4,2*($F+1)*$_))$cd=reset(slow_query(count_rows($a,$Z,$Pd,$jd)));else$_c=false;}}if($_!=""&&($cd===false||$cd>$_||$F)){echo"<p class='pages'>";$we=($cd===false?$F+(count($L)>=$_?2:1):floor(($cd-1)/$_));if($y!="simpledb"){echo'<a href="'.h(remove_from_uri("page")).'">'.'Page'."</a>:",script("qsl('a').onclick = function () { pageClick(this.href, +prompt('".'Page'."', '".($F+1)."')); return false; };"),pagination(0,$F).($F>5?" ...":"");for($t=max(1,$F-4);$t<min($we,$F+5);$t++)echo
pagination($t,$F);if($we>0){echo($F+5<$we?" ...":""),($_c&&$cd!==false?pagination($we,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$we'>".'last'."</a>");}echo(($cd===false?count($L)+1:$cd-$F*$_)>$_?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" class="loadmore">'.'Load more data'.'</a>'.script("qsl('a').onclick = partial(selectLoadMore, ".(+$_).", '".'Loading'."...');",""):'');}else{echo'Page'.":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($we>$F?pagination($F+1,$F).($we>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($cd!==false?"(".($_c?"":"~ ").lang(array('%d row','%d rows'),$cd).") ":"");$Yb=($_c?"":"~ ").$cd;echo
checkbox("all",1,0,'whole result',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Yb' : checked); selectCount('selected2', this.checked || !checked ? '$Yb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete">',confirm(),'</div></fieldset>
';}$ad=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($ad['sql']);break;}}if($ad){print_fieldset("export",'Export'." <span id='selected2'></span>");$yf=$b->dumpOutput();echo($yf?html_select("output",$yf,$ya["output"])." ":""),html_select("format",$ad,$ya["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$jd&&$M?"":script("tableCheck();"));}if($b->selectImportPrint()){print_fieldset("import",'Import',!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($qc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$Yh'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$P=isset($_GET["status"]);page_header($P?'Status':'Variables');$Gi=($P?show_status():show_variables());if(!$Gi)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($Gi
as$z=>$X){echo"<tr>","<th><code class='jush-".$y.($P?"status":"set")."'>".h($z)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$xh=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$D=>$S){json_row("Comment-$D",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$z)json_row("$z-$D",nbsp($S[$z]));foreach($xh+array("Auto_increment"=>0,"Rows"=>0)as$z=>$X){if($S[$z]!=""){$X=format_number($S[$z]);json_row("$z-$D",($z=="Rows"&&$X&&$S["Engine"]==($lh=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($xh[$z]))$xh[$z]+=($S["Engine"]!="InnoDB"||$z!="Data_free"?$S[$z]:0);}elseif(array_key_exists($z,$S))json_row("$z-$D");}}}foreach($xh
as$z=>$X)json_row("sum-$z",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));elseif($_GET["script"]=="version"){$dd=file_open_lock(get_temp_dir()."/adminer.version");if($dd)file_write_unlock($dd,serialize(array("signature"=>$_POST["signature"],"version"=>$_POST["version"])));}else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$Fh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Fh&&!$n&&!$_POST["search"]){$I=true;$Ae="";if($y=="sql"&&$_POST["tables"]&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$Ae='Tables have been truncated.';}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Ae='Tables have been moved.';}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Ae='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$Ae='Tables have been dropped.';}elseif($y!="sql"){$I=($y=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$Ae='Tables have been optimized.';}elseif(!$_POST["tables"])$Ae='No tables.';elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$Ae.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$Ae,$I);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".'Tables and views'."</h3>\n";$Eh=tables_list();if(!$Eh)echo"<p class='message'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".'Search data in tables'." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'>",script("qsl('input').onkeydown = partialArg(bodyKeydown, 'search');","")," <input type='submit' name='search' value='".'Search'."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$Zb=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),'<thead><tr class="wrap">','<td><input id="check-all" type="checkbox" class="jsonly">'.script("qs('#check-all').onclick = partial(formCheck, /^(tables|views)\[/);",""),'<th>'.'Table','<td>'.'Engine'.doc_link(array('sql'=>'storage-engines.html')),'<td>'.'Collation'.doc_link(array('sql'=>'charset-mysql.html')),'<td>'.'Data Length'.$Zb,'<td>'.'Index Length'.$Zb,'<td>'.'Data Free'.$Zb,'<td>'.'Auto Increment'.doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.'Rows'.$Zb,(support("comment")?'<td>'.'Comment'.$Zb:''),"</thead>\n";$T=0;foreach($Eh
as$D=>$U){$Ji=($U!==null&&!preg_match('~table~i',$U));$u=h("Table-".$D);echo'<tr'.odd().'><td>'.checkbox(($Ji?"views[]":"tables[]"),$D,in_array($D,$Fh,true),"","formUncheck('check-all');","",$u),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($D)."' title='".'Show structure'."' id='$u'>".h($D).'</a>':h($D));if($Ji){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($D).'" title="'.'Alter view'.'">'.(preg_match('~materialized~i',$U)?'Materialized view':'View').'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($D).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$z=>$A){$u=" id='$z-".h($D)."'";echo($A?"<td align='right'>".(support("table")||$z=="Rows"||(support("indexes")&&$z!="Data_length")?"<a href='".h(ME."$A[0]=").urlencode($D)."'$u title='$A[1]'>?</a>":"<span$u>?</span>"):"<td id='$z-".h($D)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($D)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($Eh)),"<td>".nbsp($y=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$z)echo"<td align='right' id='sum-$z'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Di="<input type='submit' value='".'Vacuum'."'> ".on_help("'VACUUM'");$jf="<input type='submit' name='optimize' value='".'Optimize'."'> ".on_help($y=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'");echo"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>".($y=="sqlite"?$Di:($y=="pgsql"?$Di.$jf:($y=="sql"?"<input type='submit' value='".'Analyze'."'> ".on_help("'ANALYZE TABLE'").$jf."<input type='submit' name='check' value='".'Check'."'> ".on_help("'CHECK TABLE'")."<input type='submit' name='repair' value='".'Repair'."'> ".on_help("'REPAIR TABLE'"):"")))."<input type='submit' name='truncate' value='".'Truncate'."'> ".on_help($y=="sqlite"?"'DELETE'":"'TRUNCATE".($y=="pgsql"?"'":" TABLE'")).confirm()."<input type='submit' name='drop' value='".'Drop'."'>".on_help("'DROP TABLE'").confirm()."\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$y!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."'>":""),"\n";}echo"<input type='hidden' name='all' value=''>";echo
script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")." }"),"<input type='hidden' name='token' value='$Yh'>\n","</div></fieldset>\n";}echo"</form>\n",script("tableCheck();");}echo'<p class="links"><a href="'.h(ME).'create=">'.'Create table'."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.'Create view'."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".'Routines'."</h3>\n";$Jg=routines();if($Jg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($Jg
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a>':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".'Sequences'."</h3>\n";$Xg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($Xg){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Xg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".'User types'."</h3>\n";$Bi=types();if($Bi){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Bi
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3 id='events'>".'Events'."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?'At given time'."<td>".$K["Execute at"]:'Every'." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.'Alter'.'</a>';}echo"</table>\n";$yc=$g->result("SELECT @@event_scheduler");if($yc&&$yc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($yc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($Eh)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}}}page_footer();