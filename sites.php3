<?
	require("shared.inc");
	commonHeader("High-Profile sites running PHP");

	function site($name,$domain=false) {
		if ($domain) {
			echo "<LI><a href=\"http://$domain\">$name</a><br>\n";
		} else {
			echo "<LI><b>$name</b><br>\n";
		}
	}

	function siteStart() {
		echo "<TR valign=middle>\n";
		echo "<TD>&nbsp;<BR></TD>\n";
		echo "<TD ALIGN=left>";
		spc(50,1);
		echo "<BR></TD>\n";
		echo "<TD align=left bgcolor='#F0F0F0'><FONT SIZE=-1><UL>\n";
	}

	function siteEnd() {
		echo "<BR></UL></TD>\n";
		echo "<TD>&nbsp;<BR></TD>\n";
		echo "</TR>\n";

	}

	function title($text) {
		echo "<TR bgcolor='#D0D0D0' valign=middle>\n";
		echo "<TD ALIGN=left width=18><IMG SRC=\"/gifs/gcap-left.gif\" WIDTH=18 HEIGHT=36 BORDER=0><BR></TD>\n";
		echo "<TD align=left colspan=2 NOWRAP><font size=+1><b>$text</b></font></TD>\n";
		echo "<TD ALIGN=right width=18><IMG SRC=\"/gifs/gcap-right.gif\" WIDTH=18 HEIGHT=36 BORDER=0><BR></TD>\n";
		echo "</TR>\n";
	}
?>

<blockquote>The sites listed here are either submitted by site owners,
or someone who has spotted PHP in use on a site.  The presence of a
company on this list does not imply endorsement of PHP.  If you
control a listed site that you do not wish listed here please email <a
href="mailto:sites@php.net">sites@php.net</a> and it will be removed
right away.</blockquote>

<CENTER>
<TABLE border=0 cellpadding=0 cellspacing=0>

<?
/* Automotive Industry */
	title("Automotive Industry");
	siteStart();
	site("The Audi A4 web site","www.a4.org");
	site("The Audi TT web site","www.audi-tt.org");
	site("Audi World","www.audiworld.com");
	site("Auto City","www.autocity.de");
	site("AutoNetworkUSA.com","www.AutoNetworkUSA.com");
	site("Cars Everything","www.carseverything.com");
	site("Euroclassics","www.euroclassics.com");
	site("Hobby Caravaning","www.hobby-caravan.de");
	site("Mitsubishi Motors","www.mitsucars.com");
	site("MotoSite.Com","www.motosite.com");
	site("Opel","www.opel.com");
	site("PerformanceList.Com","www.performancelist.com");
	site("Silver Bullet Motorcycles","www.silver-bullet.co.nz");
	site("Subaru","www.subaru.com");
	site("Volvo","www.volvo.com");
	siteEnd();

/* City and Community Sites */
	title("City and Community Sites");
	siteStart();
	site("City of Capelle aan den Ijssel","www.capelle-ijssel.nl");
	site("Du c�t� de","www.ducotede.com");
	site("MyTown.Com","www.mytown.com");
	site("Niter�i � Vista","www.nitvista.com.br");
	site("The Tri Cities Online","tri.xtn.net");
	site("Up My Street", "www.upmystreet.com");
	site("White House 200th Anniversary site","www.wh200th.com");
	site("XOOM.com Inc.","xoom.com");
	site("Zone - Cultural sites in Rotterdam","www.cultuur.rotterdam.nl");
	siteEnd();

/* Computer Software */
	title("Computer Software");
	siteStart();
	site("Apache Web Server","www.apache.org");
	site("Be","www.be.com");
	site("BSB-Software","www.bsb-software.com");
	site("C2Net Software Inc.","www.c2.net");
	site("Cornado Internet Applications","www.cornado.com");
	site("Flexform Software","www.flexform.de");
	site("Freedows OS","freedows.netpedia.net/");
	site("LCDproc", "lcdproc.omnipotent.net");
	site("Mozilla Crypto Group","mozilla-crypto.ssleay.org");
	site("RedHat Software","www.redhat.com");
	site("Skinz","www.skinz.org");
	site("Sonic Spot","www.sonicspot.com");
	site("Type Euphoria","fonts.linuxpower.org");
	site("VB World","www.vb-world.net");
	site("Winamp", "www.winamp.com");
	site("Xingtech.com","www.xingtech.com");
	site("YellowDog Linux","www.yellowdoglinux.com");
	siteEnd();

/* Educational/Research */
	title("Educational/Research");
	siteStart();
	site("AAA-CT La Salle","www.salleURL.edu/AnticsAlumnes/index.html");
	site("The Biology Place","www.biology.com");
	site("The Chemistry Place","www.chemplace.com");
	site("ClassWorld","www.classworld.net");
	site("DevilNet at Duke University", "devilnet.duke.edu");
	site("Devry Technical Institute Financial Aid","finance.devry.edu");
	site("Digital Metrics","www.digitalmetrics.com");
	site("Edwards/Penney Calculus Website","www.edwardspenney.com");
	site("EdSeek.com","www.edseek.com");
	site("�vora's University in Portugal","www.uevora.pt");
	site("GezondheidsNet","www.gezondheidsnet.nl");
	site("The Internet Pilot to Physics","www.tp.umu.se/TIPTOP/");
	site("Let's Find Out","www.letsfindout.com");
	site("NativeWeb","www.nativeweb.org");
	site("Research Institute for electro-magnetic compatibility","www.femu.rwth-aachen.de");
	site("Traffic School To Go","www.trafficschooltogo.com");
	site("The Psychology Place","www.psychplace.com");
	site("WISE Project","wise.berkeley.edu");
	siteEnd();

/* Entertainment */
	title("Entertainment");          
	siteStart();
	site("BurnerKitty.com","www.burnerkitty.com");
	site("CD93 Radio Station","www.cd93.com/index_hi.htm");
	site("EduTest.Com","www.edutest.com");
	site("film.at - movie listings for Austria","www.film.at");
	site("FilmFrenzy.com","filmfrenzy.com");
	site("FilmNetwork","www.fnw.de");
	site("Hip Hop Archives","www.hiphoparchives.com");
	site("HitList","www.hitlist.com");
	site("Independent Musicians Guild","www.scimg.com");
	site("Kentucky Lottery","www.kylottery.com");
	site("KPIG Radio Station (Freedom, CA)","www.kpig.com");
	site("Miss USA 1999","www.missusa.com");
	site("My Video Store","www.myvideostore.com");
	site("MysteryGuide.com","www.mysteryguide.com");
	site("O'Brien's Cafe","www.obrienscafe.com");
	site("prince.org","www.prince.org");
	site("PromoPodium","www.promopodium.nl");
	site("Striving For Togetherness Records","www.striving.com");
	site("SummerWorks Theatre Festival","www.summerworks.on.ca");
	site("Transcasts","www.transcasts.com");
	site("TVN Entertainment","www.tvn.com");
	site("United States of Hardcore (Music)","www.ush.net");
	site("Verzamel.net - for Dutch-speaking collectors","www.verzamel.net");
	site("VRT - Vlaamse Radio - en Televisieomroep","www.vrt.be");
	site("WorldClubs.Net","www.worldclubs.net");
	siteEnd();


/* Financial Industry */
	title("Financial Industry");
	siteStart();
	site("B�rsePlus","www.boerseplus.de");
	site("Cyber Merchants Exchange","www.c-me.com");
	site("The Development Capital Exchange","www.equity-invest.com");
	site("First USA Bank","www.firstusabank.com");
	site("Insurance Bridge","www.insurancebridge.com");
	site("TFC Commodity Charts","tfc-charts2.w2d.com");
	site("Wallstreet:Online","www.wallstreet-online.de");
	siteEnd();

/* Games */
	title("Games & Gaming");
	siteStart();
	site("Battle - a PBeM Game","battle.pbem.net");
	site("BEETLE<i>MANIA</i>","www.beetlemania.de");
	site("ClanBase","www.clanbase.com");
	site("Gameplayer","www.gameplayer.com");
	site("GamePoint Shop","shop.gamepoint.net");
	site("mplayer.com","www.mplayer.com");
	site("Riot Publishing","riot.com.au");
	site("Worms2","www.worms2.com");
	siteEnd();

/* Government */
	title("Government");
	siteStart();
	site("City of Escondido","www.ci.escondido.ca.us");
	site("Iowa Division of Tourism","www.state.ia.us/tourism/");
	site("National Institute of Ecology in Mexico","www.ine.gob.mx");
	site("City of Sibiu - Romania","www.primbsb.ro");
	site("West Virginia Department of Education","wvde.state.wv.us");
	siteEnd();

/* Hi-Tech Industry */
	title("Hi-Tech");
	siteStart();
	site("32bit.com","www.32bit.com");
	site("Developer Shed","www.devshed.com");
	site("DataGuard AS - Security Consulting","www.dataguard.no");
	site("Fujitsu Business Communications Systems","www.fbcs.fujitsu.com");	
	site("Lead People (Recruitment Agency)","www.leadpeople.com");
	site("NASA - Jet Propulsion Laboratory");
	site("Nuance Communication Extranet","www.nuance.com");
	site("ONE TOUCH Systems Inc.","www.onetouch.com");
	site("PalmShop","www.palmshop.de");
	site("Tab Products","www.tab.com");
	site("Wildtangent","www.wildtangent.com");
	site("ZeroKnowledge.com","jobs.zeroknowledge.com");
	siteEnd();

/* Internet Services */
	title("Internet Services");
	siteStart();
	site("ActiveWeb Internet Solutions","www.activeweb.co.il");
	site("All 4 One","www.all4one.com");
	site("BaBoo, Browse and Bookmark","www.baboo.com");
	site("CapGemini","www.capgemini.fr");
	site("ClickAgents","www.clickagents.com");
	site("Constructors","www.constructors.com");
	site("easyDNS","www.easydns.com");
	site("Exe-prod","www.exe-prod.com");
	site("FAST MP3 Search", "mp3.lycos.com");
	site("KnowPost","www.humansearch.com");
	site("InfoMak","www.infomak.com");
	site("Infoseek Investor Relations","www.ir-infoseek.com");
	site("Kattare's Virtual Web Service","www.kattare.com");
	site("LocateIndia.com","www.locateindia.com");
	site("Lookup!!","www.lookup.it");
	site("Mail Chek","mail.chek.com");
	site("MailFriends.com","www.mailfriends.com");
	site("MegaDownload","megadownload.de");
	site("My URLs", "murl.com");
	site("Oneview Bookmark Management","www.oneview.com");
	site("PBM Online Services","www.ndw.de");
	site("Resourcepage.com","www.resourcepage.com");
	site("TageBook.Com - Online Diary","tagebook.com");
	site("Terra Firma Design","www.terrafirmadesign.com");
	site("The Noodle","www.thenoodle.com");
	site("Webex - Russia","www.webex.ru");
	site("West Central Ohio Marketplace","www.wcomarketplace.com");
	site("WhereIs Street Atlas (Australia)","www.whereis.com.au");
	site("WhoBuiltIt","www.whobuiltit.com");
	site("zcentral.com","www.zcentral.com");
	site("Zorango.com","www.zorango.com");
	siteEnd();

/* ISPs */
	title("ISPs");
	siteStart();
	site("Aidan Internet Solutions","www.aidan.net");
	site("Active Studios","www.activestudios.net");
	site("Alabanza","www.alabanza.com");
	site("BestHost","besthost.net");
	site("CocoNet Corporation","www.coconet.com");
	site("Compmore.Net","www.compmore.net");
	site("DigitalDaze","www.digitaldaze.com");
	site("ForeverNET","www.forevernet.de");
	site("Italia Online","www.iol.it");
	site("Kieser.Net","www.kieser.net");
	site("Nederland.Net","www.nederland.net");
	site("Netvision","www.netvision.net.il");
	site("Pair Networks","www.pair.net");
	site("SpaceNet","www.spacenet.de");
	site("Rackspace.com","www.rackspace.com");
	site("Richweb Inc.","www.richweb.com");
	site("Total Information Management AG","www.timso.ch");
	site("w10.net","w10.net");
	site("XOOM Inc.","xoom.com");
	site("Yebo! Net","www.yebo.co.za");
	siteEnd();

/* Job & Career Sites */
	title("Job & Career Sites");
	siteStart();
	site("Careers 4 Teens","www.careers4teens.com");
	site("Jobs & Career - The Times of India","www.timesjobsandcareers.com");
	site("Little6","www.little6.com");
	siteEnd();

/* Military */
	title("Military");
	siteStart();
	site("US Army Publishing Agency","www.usapa.army.mil");
	siteEnd();

/* Newspapers & Magazines */
	title("Newspapers & Magazines");
	siteStart();
	site("B�rsen - Danish Business Daily","www.borsen.dk");
	site("CADALYST Magazine","www.cadonline.com");
	site("Calendar - Syracuse Events Guide","calendar.syracuse.com");
	site("Computer Currents","www.computercurrents.com");
	site("The Dryden Observer","lak.awcoldstream.com/observer/first1.phtml");
	site("El Mundo","www.el-mundo.es");
	site("FocalPress","www.focalpress.com.hk");
	site("The German Linux Magazine","www.linux-magazin.de/newsflash");
	site("Independent Online (South Africa)","www.iol.co.za");
	site("LA Weekly","www.laweekly.com");
	site("Maximum PC Magazine","www.maximumpcmag.com");
	site("Mercattel","mercattel.interwatts.com");
	site("Der Spiegel","www.spiegel.de");
	site("Saarbr�cker Zeitung","www.sz-newsline.de");
	site("The Star - Kansas City","www.kcstar.com");
	site("UPI Archives","upi.siteways.com");
	site("The Village Voice","www.villagevoice.com");
	site("Times Classifieds","www.timesclassifieds.com");
	site("Ti-News Search","www.ti-news.ch/search/");
	siteEnd();

/* Not-for-Profit */
	title("Not-for-Profit");
	siteStart();
	site("Association of Internet Professionals","www.association.org");
	site("Global Rotaract Information Center", "www.rotaract.org/");
	site("Humanities Web","humanitiesweb.org");
	site("KidsCampaigns","www.kidscampaigns.org");
	site("National Marrow Donor Program","www.marrow.org");
	site("PoloniaNet - Polish community of the Internet","www.PoloniaNet.com");
	site("Scram.de","www.scram.de");
	site("The Long Now Foundation","www.longnow.org");
	site("The Jazz Journalists Association","www.jazzhouse.org");
	site("W3C","www.w3.org");
	siteEnd();

/* Online News Sites */
	title("Online News Sites");
	siteStart();
	site("32BitsOnline.Com","www.32bitsonline.com");
	site("3D Linux","3dlinux.org");
	site("The Be Site","www.thebesite.com");
	site("Deal-iMac","deal-imac.com");
	site("Deal-Mac","deal-mac.com");
	site("Deal-Pc","deal-pc.com");
	site("GAMESDomain","www.gamesdomain.com");
	site("Indian Ballot","www.indianballot.com");
	site("Israel Action Alert","www.israel-alert.com");
	site("Legions.Com","legions.com");
	site("LinuxApps","www.linuxapps.com");
	site("Linux BBS","www.linuxbbs.org");
	site("Linux.Com","linux.com");
	site("Daily Linux News","www.kieser.net/linux.html");
	site("Weekly Linux News","www.lwn.net");
	site("Linux Power","linuxpower.org");
	site("FreeBSD Rocks","www.freebsdrocks.com");
	site("FreshMeat","freshmeat.net");
	site("Incluso - online PHP Magazine","io.incluso.com");
	site("MP3Bench","mp3bench.com");
	site("MP3.com","www.mp3.com");
	site("Online Gaming Review","www.ogr.com");
	site("PHP.CodeBase.Org","php.codebase.org");
	site("SegFault","segfault.org");
	site("The UNIX Network Archives","www.tuna.org");
	site("Versions","www.versions.com");
	siteEnd();

/* Publishing Industry */
	title("Publishing Industry");
	siteStart();
	site("Invisible Man Press","www.invisiblemanpress.com");
	siteEnd();

/* Real Estate */
	title("Real Estate");
	siteStart();
	site("All Brevard Houses for Sale","www.allbrevard.net");
	site("BNF Homes","www.bnfhomes.com");
	site("Real Estate Planet","www.realestateplanet.com");
	site("ReallyNyce.Com","www.reallynyce.com");
	site("Slater Realtors","www.slater-realtors.com");
	siteEnd();

/* Religious */
	title("Religious");
	siteStart();
	site("Christian Cafe","www.christiancafe.com");
	site("Christian Financial Concepts","cfcministry.org");
	site("Gospel Communications Network","www.gospelcom.net");
	site("Kenneth Copeland Ministries","kcm.org");
	site("University Christian Fellowship Vineyard","www.ucf.org");
	site("ZoeHouse","www.zoehouse.com");
	siteEnd();

/* Retail - Service Industry */
	title("Retail & Service Industry");
	siteStart();
	site("Access Micro","www.accessmicro.com");
	site("Almetaal B.V.","www.almetaal.com");
	site("Amulet Gemstones and Jewelry","ww2.gemstones.com");
	site("Arena Fan","www.arenafan.com");
	site("BART's Water Sports","www.bartswatersports.com");
	site("Bruna bookstore","www.bruna.com");
	site("BuyMP3.com","www.buymp3.com");
	site("Cheap Bytes", "www.cheapbytes.com");
	site("Clabber Girl Baking Powder","www.hulman.com");
	site("Coconut Beach","coconutbeach.com");
	site("CompareNet","www.compare.net");
	site("COMP-U-BUY","www.comp-u-buy.com");
	site("Cookson's Tools","www.cooksons.com");
	site("Delia*s Inc.","www.delias.com");
	site("DUI Shopping","shop.dui.be");
	site("Farmauno","www.farmauno.com");
	site("freeBID Online Auctions","www.freebid.de");
	site("FrenchToast.com","www.frenchtoast.com");
	site("Froeschl - Online Auctions","www.froeschl.de");
	site("HomePoint.com","www.homepoint.com");
	site("IMT","www.imt.com");
	site("JC Whitney","www.jcwhitney.com");
	site("Jennifer Furniture","www.jenniferfurniture.com");
	site("Kellymoore Paints","www.kellymoore.com");
	site("Larkbooks - also FiberArts Magazine","www.larkbooks.com");
	site("Levolor Blinds","www.levolor.com");
	site("LinkAlarm","www.linkalarm.com");
	site("Linux-Books","www.linux-books.com");
	site("The Longaberger Company","www.longaberger.com");
	site("Neckermann","www.neckermann.de");
	site("Para-Shop","www.para-shop.de");
	site("Patagonia Clothing","www.patagonia.com");
	site("PC Market - Russia", "www.pcmarket.ru/pcmarket");
	site("Restoration Hardware","www.restorationhardware.com");
	site("Sellit-Here Online","www.sellit-here.com");
	site("Schneider-electric","www.schneider-electric.com");
	site("Shipwreck Beads","www.shipwreck-beads.com");
	site("Sunset Systems","www.sunsetsystems.com");
	site("Swiss Online Bookstore","www.editore.ch");
	site("TonerStop","www.tonerstop.com");
	site("United Rentals","www.unitedrentals.com");
	site("Vancouver Rentals","www.vancouverrentals.com");
	site("Vermeer","www.vermeer.com");
	siteEnd();

/* Sports */
	title("Sports");
	siteStart();
	site("Disc Golf Birmingham","discgolf.bham.al.us");
	site("GoASU.com","www.goasu.com");
	site("Indianapolis 500 Web Site","www.indy500.com");
	site("Jason Kidd's Site","www.jasonkidd.net");
	site("New York Yankees","www.yankees.com");
	site("Oakland Raiders","www.raiders.com");
	site("Professional Disc Golf Association","www.pdga.com");
	site("San Francisco Giants Baseball Club","www.sfgiants.com");
	site("Soccer Silly - World Soccer E-Zine","www.soccersilly.com");
	site("Southern Nationals Disc Golf","www.sndg.org");
	site("The Internet Squash Federation","www.squash.org");
	site("Victor Bray Drag Racing","victorbray.com");
	siteEnd();

/* Telecommunications */
	title("Telecommunications");
	siteStart();
	site("Danish Yellow Pages","www.gulesider.dk");
	site("onebox.com","www.onebox.com");
	site("The Public Payphone Database","wiw.org/wiw.org/payphone/");
	site("Southwestern Bell","WWW.SBWireless.COM");
	site("Sprint Canada","www.sprint.ca");
	siteEnd();

/* Travel */
	title("Travel & Tourism");
	siteStart();
	site("Ambassadair - ATA's Travel Club","www.ambassadair.com");
	site("Arlberg Online","www.arlberg.com");
	site("BackPackers.Com","www.backpackers.com");
	site("BrazilInfo.com","www.brazilinfo.com");
	site("Centro Turistico Studentesco","www.cts.it");
	site("Eating Sacramento","www.eatingsacramento.com");
	site("Griechenland.DE","www.griechenland.de");
	site("LondonTown.com","www.londontown.com");
	site("Maggia Valley (Switzerland)","www.vallemaggia.ch");
	site("Oaxaca State Tourist Guide","oaxaca-travel.com");
	site("Online Fares Travel, Inc.","www.onlinefares.com");
	site("San Diego Zoo", "www.sandiegozoo.org");
	site("Spirit Journeys","www.spiritjourneys.com");
	site("Texas Highways","WWW.TexasHighways.COM");
	site("Texas Weekender","WWW.TexasWeekender.COM");
	site("TopHotels.com","www.tophotels.com");
	site("Whereis Street Atlas","www.whereis.com.au");
	site("Whistler Resort Guide","www.whistler.net");
	site("Whistler Blackcomb Mountains","www.whistler-blackcomb.com");
	siteEnd();

/* User Groups */
	title("User Groups");
	siteStart();
	site("Albany New York PowerBuilder User Group","www.anypbug.org");
	site("Lugistics - LUG Software","server.hellug.gr/LUGistics/en/pub/");
	site("Maximilian Bayer","mb.users.de");
	site("Melbourne Linux User Group","www.mlinux.org");
	site("RC5.de","www.rc5.de");
	siteEnd();

/* Web Development */
	title("Web Development Companies");
	siteStart();
	site("Avatar Technology","www.avatartech.com");
	site("Espada Ltd.","www.espadanet.com");
	site("FUMOT","www.fumot.com");
	site("GreyZone","www.greyzone.com");
	site("I-D Gruppe","www.idgruppe.com");
	site("NGenius","www.ngenius.com");
	site("PBM","www.pbm.de");
	site("Private World Communications","www.privateworld.com");
	siteEnd();

/* Misc. */
	title("Miscellaneous");
	siteStart();
	site("AirPics.com","www.airpics.com");
	site("Astrology Forum","www.astroforum.ch");
	site("Banana Fish Bones","www.bananafishbones.de");
	site("Bookmarklets","www.bookmarklets.com");
	site("BuggEr.NeT","bugger.net");
	site("Cigar.Com","www.cigar.com");
	site("ClearInk Corporation","www.clearink.com");
	site("Christen Democratisch Appel","www.cda.nl");
	site("Distributed.Net","www.distributed.net");
	site("Internet Weather Report","www.internetweather.com");
	site("Metaindex of Law and Government","www.catalaw.com");
	site("Optical Buyer","www.opticalbuyer.com");
	site("RacersDirect","www.racersdirect.com");
	site("Scour Net","www.scour.net");
	site("Spell Web","www.spellweb.com");
	site("Swatch AG","www.swatch.com");
	site("Temperature Measurement site","www.jmrtech.com/temp");
	site("TheMatrix","thematrix.com");
	site("TVGrid.com","www.divein.tvgrid.com");
	site("WebMasters Index","www.webmastersindex.com");
	siteEnd();

/* blank bar at end. */
	title("&nbsp;");

echo "</table></center>\n";

?>
<BR>
<blockquote>If you have a site you feel belongs on this list, send us email at 
<a href="mailto:sites@php.net">sites@php.net</a>.  Please include a suggested 
category.  With well over 275,000 sites on the Internet running PHP, we cannot
list them all and will add suggested sites at our discretion.</blockquote>
<?
commonFooter();
?>
