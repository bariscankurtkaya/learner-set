<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Can&#039;t add EFI Boot Entry on Huawei Matebook 13 (intel) / Installation / Arch Linux Forums</title>
<link rel="stylesheet" type="text/css" href="style/ArchLinux.css" />
<link rel="canonical" href="viewtopic.php?id=269182" title="Page 1" />
<link rel="alternate" type="application/atom+xml" href="extern.php?action=feed&amp;tid=269182&amp;type=atom" title="Atom topic feed" />
    <link rel="stylesheet" media="screen" href="style/ArchLinux/arch.css?v=5"/>
        <link rel="stylesheet" media="screen" href="style/ArchLinux/archnavbar.css?v=5"/>
    
<link rel="shortcut icon" href="style/ArchLinux/favicon.ico" />
</head>

<body>
<div id="archnavbar" class="anb-forum">
	<div id="archnavbarlogo"><h1><a href="http://archlinux.org/">Arch Linux</a></h1></div>
	<div id="archnavbarmenu">
		<ul id="archnavbarlist">
			<li id="anb-home"><a href="http://archlinux.org/">Home</a></li><li id="anb-packages"><a href="http://archlinux.org/packages/">Packages</a></li><li id="anb-forums" class="anb-selected"><a href="https://bbs.archlinux.org/">Forums</a></li><li id="anb-wiki"><a href="https://wiki.archlinux.org/">Wiki</a></li><li id="anb-bugs"><a href="https://bugs.archlinux.org/">Bugs</a></li><li id="anb-security"><a href="https://security.archlinux.org/">Security</a></li><li id="anb-aur"><a href="https://aur.archlinux.org/">AUR</a></li><li id="anb-download"><a href="http://archlinux.org/download/">Download</a></li>		</ul>
	</div>
</div>


<div id="punviewtopic" class="pun">
<div class="top-box"></div>
<div class="punwrap">

<div id="brdheader" class="block">
	<div class="box">
		<div id="brdmenu" class="inbox">
			<ul>
				<li id="navindex" class="isactive"><a href="index.php">Index</a></li>
				<li id="navrules"><a href="misc.php?action=rules">Rules</a></li>
				<li id="navsearch"><a href="search.php">Search</a></li>
				<li id="navregister"><a href="register.php">Register</a></li>
				<li id="navlogin"><a href="login.php">Login</a></li>
			</ul>
		</div>
		<div id="brdwelcome" class="inbox">
			<p class="conl">You are not logged in.</p>
			<ul class="conr">
				<li><span>Topics: <a href="search.php?action=show_recent" title="Find topics with recent posts.">Active</a> | <a href="search.php?action=show_unanswered" title="Find topics with no replies.">Unanswered</a></span></li>
			</ul>
			<div class="clearer"></div>
		</div>
	</div>
</div>



<div id="brdmain">
<div class="linkst">
	<div class="inbox crumbsplus">
		<ul class="crumbs">
			<li><a href="index.php">Index</a></li>
			<li><span>»&#160;</span><a href="viewforum.php?id=17">Installation</a></li>
			<li><span>»&#160;</span><strong><a href="viewtopic.php?id=269182">Can&#039;t add EFI Boot Entry on Huawei Matebook 13 (intel)</a></strong></li>
		</ul>
		<div class="pagepost">
			<p class="pagelink conl"><span class="pages-label">Pages: </span><strong class="item1">1</strong></p>
		</div>
		<div class="clearer"></div>
	</div>
</div>

<div id="p1990066" class="blockpost rowodd firstpost blockpost1">
	<h2><span><span class="conr">#1</span> <a href="viewtopic.php?pid=1990066#p1990066">2021-08-28 11:36:54</a></span></h2>
	<div class="box">
		<div class="inbox">
			<div class="postbody">
				<div class="postleft">
					<dl>
						<dt><strong>frokenodaislost</strong></dt>
						<dd class="usertitle"><strong>Member</strong></dd>
						<dd><span>Registered: 2021-08-28</span></dd>
						<dd><span>Posts: 1</span></dd>
					</dl>
				</div>
				<div class="postright">
					<h3>Can&#039;t add EFI Boot Entry on Huawei Matebook 13 (intel)</h3>
					<div class="postmsg">
						<p>I am trying to dual-boot Arch Linux and Windows 10 on my Huawei Matebook 13. I am able to write boot into the USB, make a partition and follow the <a href="https://wiki.archlinux.org/title/installation_guide" rel="nofollow">Arch Installation Guide</a>.</p><p>The problem arises when I try using systemd-boot to create a efi boot entry, I am to able to. </p><div class="codebox"><pre><code>bootctl install</code></pre></div><p> returns the &quot;expected&quot; output, telling me that &quot;Linux Boot Menu&quot; has been added, but when I try restarting, I boot into Windows, and in the boot menu, I can only see Windows.</p><p><a href="https://i.imgur.com/dIFhZbZ.jpg" rel="nofollow">https://i.imgur.com/dIFhZbZ.jpg</a></p><p>Do anyone know how I can add an option to boot into Arch?</p><p>Note: I was not able to try GRUB, since my EFI-partition is only 100MB, and grub told me there was not enough space.</p><br /><br /><p><em>Mod Edit - Replaced oversized image with link.<br /><a href="https://wiki.archlinux.org/title/General_guidelines#Pasting_pictures_and_code" rel="nofollow">CoC - Pasting pictures and code</a></em></p>
						<p class="postedit"><em>Last edited by Slithery (2021-08-28 11:41:17)</em></p>
					</div>
				</div>
			</div>
		</div>
		<div class="inbox">
			<div class="postfoot clearb">
				<div class="postfootleft"><p><span>Offline</span></p></div>
			</div>
		</div>
	</div>
</div>

<div class="postlinksb">
	<div class="inbox crumbsplus">
		<div class="pagepost">
			<p class="pagelink conl"><span class="pages-label">Pages: </span><strong class="item1">1</strong></p>
		</div>
		<ul class="crumbs">
			<li><a href="index.php">Index</a></li>
			<li><span>»&#160;</span><a href="viewforum.php?id=17">Installation</a></li>
			<li><span>»&#160;</span><strong><a href="viewtopic.php?id=269182">Can&#039;t add EFI Boot Entry on Huawei Matebook 13 (intel)</a></strong></li>
		</ul>
		<div class="clearer"></div>
	</div>
</div>
</div>

<div id="brdfooter" class="block">
	<h2><span>Board footer</span></h2>
	<div class="box">
		<div id="brdfooternav" class="inbox">
			<div class="conl">
				<form id="qjump" method="get" action="viewforum.php">
					<div><label><span>Jump to<br /></span>
					<select name="id" onchange="window.location=('viewforum.php?id='+this.options[this.selectedIndex].value)">
						<optgroup label="Technical Issues and Assistance">
							<option value="23">Newbie Corner</option>
							<option value="17" selected="selected">Installation</option>
							<option value="22">Kernel &amp; Hardware</option>
							<option value="18">Applications &amp; Desktop Environments</option>
							<option value="31">Laptop Issues</option>
							<option value="8">Networking, Server, and Protection</option>
							<option value="32">Multimedia and Games</option>
							<option value="51">Arch Linux Guided Installer</option>
							<option value="50">System Administration</option>
							<option value="35">Other Architectures</option>
						</optgroup>
						<optgroup label="Arch-centric">
							<option value="24">Announcements, Package &amp; Security Advisories</option>
							<option value="1">Arch Discussion</option>
							<option value="13">Forum &amp; Wiki discussion</option>
						</optgroup>
						<optgroup label="Pacman Upgrades, Packaging &amp; AUR">
							<option value="44">Pacman &amp; Package Upgrade Issues</option>
							<option value="49">[testing] Repo Forum</option>
							<option value="4">Creating &amp; Modifying Packages</option>
							<option value="38">AUR Issues, Discussion &amp; PKGBUILD Requests</option>
						</optgroup>
						<optgroup label="Contributions &amp; Discussion">
							<option value="20">GNU/Linux Discussion</option>
							<option value="27">Community Contributions</option>
							<option value="33">Programming &amp; Scripting</option>
							<option value="30">Other Languages</option>
							<option value="47">Artwork and Screenshots</option>
						</optgroup>
					</select></label>
					<input type="submit" value=" Go " accesskey="g" />
					</div>
				</form>
			</div>
			<div class="conr">
				<p id="feedlinks"><span class="atom"><a href="extern.php?action=feed&amp;tid=269182&amp;type=atom">Atom topic feed</a></span></p>
				<p id="poweredby">Powered by <a href="http://fluxbb.org/">FluxBB</a></p>
			</div>
			<div class="clearer"></div>
		</div>
	</div>
</div>



</div>
<div class="end-box"></div>
</div>

</body>
</html>
