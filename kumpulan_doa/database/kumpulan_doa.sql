-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2022 pada 10.42
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kumpulan_doa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_doa`
--

CREATE TABLE `tabel_doa` (
  `id` int(11) NOT NULL,
  `doa` varchar(225) NOT NULL,
  `ayat` text NOT NULL,
  `latin` text NOT NULL,
  `artinya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_doa`
--

INSERT INTO `tabel_doa` (`id`, `doa`, `ayat`, `latin`, `artinya`) VALUES
(1, 'Doa sebelum tidur', 'بِسْمِكَ االلّٰهُمَّ اَحْيَا وَبِاسْمِكَ اَمُوْتُ', 'Bismikallaahumma ahyaa wa ammuut', 'Dengan menyebut nama Allah, aku hidup dan aku mati'),
(2, 'Doa bangun tidur', 'اَلْحَمْدُ ِللهِ الَّذِىْ اَحْيَانَا بَعْدَمَآ اَمَاتَنَا وَاِلَيْهِ النُّشُوْرُ', 'Alhamdu lillahil ladzii ahyaanaa ba’da maa amaa tanaa wa ilahin nusyuuru', 'Segala puji bagi Allah yang telah menghidupkan kami sesudah kami mati (membangunkan dari tidur) dan hanya kepada-Nya kami dikembalikan'),
(3, 'Doa masuk kamar mandi', 'اَللّٰهُمَّ اِنّىْ اَعُوْذُبِكَ مِنَ الْخُبُثِ وَالْخَبَآئِثِ', 'Allahumma Innii a\'uudzubika minal khubutsi wal khoaaitsi', 'Ya Allah, aku berlindung pada-Mu dari godaan setan laki-laki dan setan perempuan'),
(4, 'Doa ketika bercermin', 'اَلْحَمْدُ ِللهِ كَمَا حَسَّنْتَ خَلْقِىْ فَحَسِّـنْ خُلُقِىْ', 'Alhamdulillaahi kamaa hassanta kholqii fahassin khuluqii', 'Segala puji bagi Allah, baguskanlah budi pekertiku sebagaimana Engkau telah membaguskan rupa wajahku'),
(5, 'Doa keluar rumah', 'بِسْمِ اللهِ تَوَكَّلْتُ عَلَى اللهِ لاَحَوْلَ وَلاَقُوَّةَ اِلاَّ بِالله', 'Bismillaahi tawakkaltu \'alalloohi laa hawlaa walaa quwwata illaa bilaahi', 'Dengan menyebut nama Allah aku bertawakal kepada Allah, tiada daya kekuatan melainkan dengan pertolongan Allah.'),
(6, 'Doa masuk rumah', 'اَللّٰهُمَّ اِنّىْ اَسْأَلُكَ خَيْرَالْمَوْلِجِ وَخَيْرَالْمَخْرَجِ بِسْمِ اللهِ وَلَجْنَا وَبِسْمِ اللهِ خَرَجْنَا وَعَلَى اللهِ رَبّنَا تَوَكَّلْنَا', 'Allahumma innii as-aluka khoirol mauliji wa khoirol makhroji bismillaahi wa lajnaa wa bismillaahi khorojnaa wa\'alallohi robbina tawakkalnaa', 'Ya Allah, sesungguhnya aku mohon kepada-Mu baiknya tempat masuk dan baiknya tempat keluar dengan menyebut nama Allah kami masuk, dan dengan menyebut nama Allah kami keluar dan kepada Allah Tuhan kami, kami bertawakkal'),
(7, 'Doa memohon ilmu yang bermanfaat', 'اَللّٰهُمَّ اِنِّى اَسْأَلُكَ عِلْمًا نَافِعًا وَرِزْقًا طَيِّبًا وَعَمَلاً مُتَقَبَّلاً', 'Allahumma innii as-aluka \'ilmaan naafi\'aan wa rizqoon thoyyibaan wa \'amalaan mutaqobbalaan', 'Ya Allah, sesungguhnya aku mohon kepada-Mu ilmu yang berguna, rezki yang baik dan amal yang baik Diterima. (H.R. Ibnu Majah)'),
(8, 'Doa sebelum belajar', 'يَارَبِّ زِدْنِىْ عِلْمًا وَارْزُقْنِىْ فَهْمًا', 'Yaa robbi zidnii \'ilman warzuqnii fahmaa', 'Ya Allah, tambahkanlah aku ilmu dan berikanlah aku rizqi akan kepahaman'),
(9, 'Doa sesudah belajar', 'اَللّٰهُمَّ اِنِّى اِسْتَوْدِعُكَ مَاعَلَّمْتَنِيْهِ فَارْدُدْهُ اِلَىَّ عِنْدَ حَاجَتِىْ وَلاَ تَنْسَنِيْهِ يَارَبَّ الْعَالَمِيْنَ', 'Allaahumma innii astaudi\'uka maa \'allamtaniihi fardud-hu ilayya \'inda haajatii wa laa tansaniihi yaa robbal \'alamiin', 'Ya Allah, sesungguhnya aku menitipkan kepada Engkau ilmu-ilmu yang telah Engkau ajarkan kepadaku, dan kembalikanlah kepadaku sewaktu aku butuh kembali dan janganlah Engkau lupakan aku kepada ilmu itu wahai Tuhan seru sekalian alam.'),
(10, 'Doa sebelum wudhu', 'نَوَيْتُ الْوُضُوْءَ لِرَفْعِ الْحَدَثِ اْلاَصْغَرِ فَرْضًا لِلّٰهِ تَعَالَى', 'Nawaitul whudu-a lirof\'il hadatsii ashghori fardhon lillaahi ta\'aalaa', 'Saya niat berwudhu untuk menghilangkan hadast kecil fardu (wajib) karena Allah ta\'ala'),
(11, 'Doa setelah wudhu', 'اَشْهَدُ اَنْ لاَّاِلَهَ اِلاَّاللهُ وَحْدَهُ لاَشَرِيْكَ لَهُ وَاَشْهَدُ اَنَّ مُحَمَّدًاعَبْدُهُ وَرَسُوْلُهُ. اَللّٰهُمَّ اجْعَلْنِىْ مِنَ التَّوَّابِيْنَ وَاجْعَلْنِىْ مِنَ الْمُتَطَهِّرِيْنَ، وَجْعَلْنِيْ مِنْ عِبَادِكَ الصَّالِحِيْنَ', 'Asyhadu allaa ilaaha illalloohu wahdahuu laa syariika lahu wa asyhadu anna muhammadan ‘abduhuuwa rosuuluhuu, alloohummaj’alnii minat tawwaabiina waj’alnii minal mutathohhiriina, waj\'alnii min \'ibadikash shaalihiina.', 'Aku bersaksi, tidak ada Tuhan selain Allah Yang Maha Esa, tidak ada sekutu bagi-Nya, dan aku mengaku bahwa Nabi Muhammad itu adalah hamba dan Utusan Allah. Ya Allah, jadikanlah aku dari golongan orang-orang yang bertaubat dan jadikanlah aku dari golongan orang-orang yang suci dan jadikanlah aku dari golongan hamba-hamba Mu yang shaleh'),
(12, 'Doa sebelum membaca al-qur\'an', 'اَللّٰهُمَّ افْتَحْ عَلَىَّ حِكْمَتَكَ وَانْشُرْ عَلَىَّ رَحْمَتَكَ وَذَكِّرْنِىْ مَانَسِيْتُ يَاذَاالْجَلاَلِ وَاْلاِكْرَامِ', 'Allahummaftah \'alayya hikmataka wansyur \'alayya rohmataka wa dzakkirnii maanasiitu yaa dzal jalaali wal ikhroomi', 'Ya Allah bukakanlah hikmahMu padaku, bentangkanlah rahmatMu padaku dan ingatkanlah aku terhadap apa yang aku lupa, wahai Dzat yang memiliki keagungan dan kemuliaan'),
(13, 'Doa setelah membaca al-qur\'an', 'اَللّٰهُمَّ ارْحَمْنِىْ بِالْقُرْآنِ. وَاجْعَلْهُ لِىْ اِمَامًا وَنُوْرًا وَّهُدًى وَّرَحْمَةً. اَللّٰهُمَّ ذَكِّرْنِىْ مِنْهُ مَانَسِيْتُ وَعَلِّمْنِىْ مِنْهُ مَاجَهِلْتُ. وَارْزُقْنِىْ تِلاَ وَتَهُ آنَآءَ اللَّيْلِ وَاَطْرَافَ النَّهَارٍ. وَاجْعَلْهُ لِىْ حُجَّةً يَارَبَّ الْعَالَمِيْنَ', 'Allahummarhamnii bil qur\'aani. waj\'alhu lii imaaman wa nuuran wa hudan wa rohman. Allahumma dzakkirnii minhu maa nasiitu wa\'allimnii minhu maa jahiltu. wazuqnii tilaa watahu aanaa-al laili wa athroofan nahaari. waj\'alhu lii hujjatan yaa robbal \'aalamiina.', 'Ya Allah, rahmatilah aku dengan Al-Quran yang agung, jadikanlah ia bagiku ikutan cahaya petunjuk rahmat. Ya Allah, ingatkanlah apa yang telah aku lupa dan ajarkan kepadaku apa yang tidak aku ketahui darinya, anugerahkanlah padaku kesempatan membacanya pada sebagian malam dan siang, jadikanlah ia hujjah yang kuat bagiku, wahai Tuhan seru sekalian alam.'),
(14, 'Doa sebelum mandi', 'اَللّٰهُمَّ اغْفِرْلِى ذَنْبِى وَوَسِّعْ لِى فِىْ دَارِىْ وَبَارِكْ لِىْ فِىْ رِزْقِىْ', 'Allahummaghfirlii dzambii wa wassi\'lii fii daarii wa baarik lii fii rizqii', 'Ya Allah ampunilah dosa kesalahanku dan berilah keluasaan di rumahku serta berkahilah pada rezekiku'),
(15, 'Doa hendak berpergian', 'اَللّٰهُمَّ هَوِّنْ عَلَيْنَا سَفَرَنَا هَذَا وَاطْوِعَنَّابُعْدَهُ اَللّٰهُمَّ اَنْتَ الصَّاحِبُ فِى السَّفَرِوَالْخَلِيْفَةُفِى الْاَهْلِ', 'Allahumma hawwin \'alainaa safaranaa hadzaa waatwi \'annaa bu\'dahu. Alloohumma antashookhibu fiissafari walkholiifatu fiil ahli', 'Ya Allah, mudahkanlah kami berpergian ini, dan dekatkanlah kejauhannya. Ya Allah yang menemani dalam berpergian, dan Engkau pula yang melindungi keluarga.'),
(16, 'Doa ketika sampai di tempat tujuan', 'اَلْحَمْدُ ِللهِ الَّذِى سَلَمَنِى وَالَّذِى اَوَنِى وَالَّذِى جَمَعَ الشَّمْلَ بِ', 'Alhamdulillahil ladzi sallamani wal ladzi awani wal ladzi jama’asy syamla bi', 'Segala puji bagi Allah, yang telah menyelamatkan akau dan yang telah melindungiku dan yang mengumpulkanku dengan keluargaku.'),
(17, 'Doa memakai pakaian', 'بِسْمِ اللهِ اَللّٰهُمَّ اِنِّى اَسْأَلُكَ مِنْ خَيْرِهِ وَخَيْرِ مَاهُوَ لَهُ وَاَعُوْذُبِكَ مِنْ شَرِّهِ وَشَرِّمَا هُوَلَهُ', 'Bismillaahi, Alloohumma innii as-aluka min khoirihi wa khoiri maa huwa lahuu wa\'a\'uu dzubika min syarrihi wa syarri maa huwa lahuu', 'Dengan nama-Mu yaa Allah akku minta kepada Engkau kebaikan pakaian ini dan kebaikan apa yang ada padanya, dan aku berlindung kepada Engkau dari kejahatan pakaian ini dan kejahatan yang ada padanya'),
(18, 'Doa memakai pakaian baru', ' اَلْحَمْدُ لِلّٰهِ الَّذِىْ كَسَانِىْ هَذَا وَرَزَقَنِيْهِ مِنْ غَيْرِ حَوْلٍ مِنِّىْ وَلاَقُوَّةٍ', 'Alhamdu lillaahil ladzii kasaanii haadzaa wa rozaqoniihi min ghoiri hawlim minni wa laa quwwatin', 'Segala puji bagi Allah yang memberi aku pakaian ini dan memberi rizeki dengan tiada upaya dan kekuatan dariku'),
(19, 'Doa melepas pakaian', 'بِسْمِ اللهِ الَّذِيْ لاَ إِلَهَ إِلَّا هُوَ', 'Bismillaahil ladzii laa ilaaha illaa huwa', 'Dengan nama Allah yang tiada Tuhan selain-Nya'),
(20, 'Doa menjelang sholat subuh', 'اَللّٰهُمَّ اِنِّى اَعُوْذُ بِكَ مِنْ ضِيْقِ الدُّنْيَا وَضِيْقِ يَوْمِ الْقِيَامَةِ', 'Allaahumma inni a\'udzubika min dzhiiqid-dunyaa wa dzhiiqi yaumal-qiyaamati', 'Ya Allah! Sesungguhnya aku berlindung kepada-Mu dari kesempitan dunia dan kesempitan hari kiamat. (HR. Abu Daud)'),
(21, 'Doa menyambut pagi hari', 'اَللّٰهُمَّ بِكَ اَصْبَحْنَا وَبِكَ اَمْسَيْنَا وَبِكَ نَحْيَا وَبِكَ نَمُوْتُ وَاِلَيْكَ النُّشُوْرُ', 'Alloohumma bika ashbahnaa wa bika amsainaa wa bika nahyaa wa bika namuutu wa ilaikan nusyuuru', 'Ya Allah, karena Engkau kami mengalami waktu pagi dan waktu petang, dan karena Engkau kami hidup dan mati dan kepada-Mu juga kami akan kembali.'),
(22, 'Doa menyambut sore hari', 'اَللّٰهُمَّ بِكَ اَمْسَيْنَا وَبِكَ اَصْبَحْنَا وَبِكَ نَحْيَا وَبِكَ نَمُوْتُ وَاِلَيْكَ الْمَصِيْرُ', 'Allahumma bika amsainaa wa bika ashbahnaa wa bika nahyaa wa bika namuutu wa ilaikal mashiir', 'Ya Allah, karena Engkau kami mengalami waktu petang dan waktu pagi, karena Engkau kami hidup dan mati dan kepada-Mu juga kami akan kembali.'),
(23, 'Doa bercermin', 'اللَّهُمَّ كَمَا حَسَّنْتَ خَلْقِي فَحَسِّنْ خُلُقِي', 'Alloohumma kamaa hassanta kholqii fahassin khuluqi', 'Ya Allah, sebagaimana Engkau baguskan tubuhku, maka baguskanlah akhlaqku'),
(24, 'Doa pergi ke masjid', 'اللَّهُمَّ اجْعَلْ فِى قَلْبِى نُورًا . وَفِى بَصَرِى نُورًا . وَفِى سَمْعِى نُورًا . وَعَنْ يَمِينِى نُورًا . وَعَنْ يَسَارِى نُورًا . وَفَوْقِى نُورًا . وَتَحْتِى نُورًا . وَأَمَامِى نُورًا . وَخَلْفِى نُورًا . وَاجْعَلْ لِى نُورًا', 'Alloohummaj’al fii qolbi nuuron. Wa fii bashori nuuron. Wa fii sam’i nuuron. Wa ‘an yamiinii nuuron. Wa ‘ay yasaarii nuuron. Wa fauqi nuuron. Wa tahti nuuron. Wa amaamii nuuron. Wakholqi nuuron. Waj’al lii nuuron', 'Ya Allah, jadikanlah di dalam hatiku cahaya. Dalam penglihatanku cahaya. Pada pendengaranku cahaya. Sebelah kananku cahaya. Sebelah kiriku cahaya. Atasku cahaya. Bawahku cahaya. Depanku cahaya. Belakangku cahaya. Dan berikanlah cahaya kepadaku.'),
(25, 'Doa masuk masjid', 'اللَّهُمَّ افْتَحْ لِى أَبْوَابَ رَحْمَتِكَ', 'Alloohummaf tahlii abwaaba rohmatik', 'Ya Allah, bukakanlah pintu-pintu rahmatMu untukku'),
(26, 'Doa keluar masjid', 'اللَّهُمَّ إِنِّى أَسْأَلُكَ مِنْ فَضْلِكَ', 'Alloohumma innii as-aluka min fadllik', 'Ya Allah, sesungguhnya aku memohon keutamaan kepadaMu'),
(27, 'Doa setelah adzan', 'اللَّهُمَّ رَبَّ هَذِهِ الدَّعْوَةِ التَّامَّةِ وَالصَّلاَةِ الْقَائِمَةِ آتِ مُحَمَّدًا الْوَسِيلَةَ وَالْفَضِيلَةَ وَابْعَثْهُ مَقَامًا مَحْمُودًا الَّذِى وَعَدْتَهُ', 'Alloohumma robba haadzihid da’watit taammah washsholaatil qoo-imah. Aati Muhammadanil wasiilata wal fadliilah. Wab’atshu maqooman mahmuudanil ladzii wa ‘adtah', 'Ya Allah, Tuhan panggilan yang sempurna dan shalat yang akan didirikan ini. Berikanlah wasilah dan keutamaan kepada Muhammad. Bangkitkanlah dia pada kedudukan yang terpuji seperti yang Engkau janjikan kepadanya.'),
(28, 'Doa naik kendaraan', 'سُبْحَانَ الَّذِى سَخَّرَ لَنَا هَذَا وَمَا كُنَّا لَهُ مُقْرِنِينَ وَإِنَّا إِلَى رَبِّنَا لَمُنْقَلِبُونَ', 'Subhaanal ladzii sakhkhoro lanaa haadzaa wamaa kunnaa lahuu muqriniin. Wa innaa ilaa robbinaa lamunqolibuun', 'Mahasuci Dia yang telah menundukkan semua ini bagi kami padahal sebelumnya kami tidak mampu menguasainya. Dan sesungguhnya kami akan kembali kepada Tuhan kami.'),
(29, 'Doa masuk pasar', 'لاَ إِلَهَ إِلاَّ اللَّهُ وَحْدَهُ لاَ شَرِيكُ لَهُ لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ يُحْيِى وَيُمِيتُ وَهُوَ حَىٌّ لاَ يَمُوتُ بِيَدِهِ الْخَيْرُ وَهُوَ عَلَى كُلِّ شَىْءٍ قَدِيرٌ', 'Laa ilaaha illalloohu wahdahu laa syariikalah. Lahul mulku walahul hamdu. Yuhyii wa yumiitu wahuwa hayyun laa yamuut. Biyadihil khoir wahuwa ‘alaa kulli syai-in qodiir', 'Tiada tuhan selain Allah Yang Maha Esa, tiada sekutu bagiNya. Dia yang mempunyai kerajaan dan segala pujian. Dialah yang menghidupkan dan mematikan, dan Dia Mahahidup yang tidak mati. Di tangan-Nya segala kebaikan dan Dia Mahakuasa atas segala sesuatu.'),
(30, 'Doa sebelum makan', 'اَللّٰهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ', 'Allahumma baarik lanaa fiimaa rozaqtanaa wa qinaa \'adzaa bannaar.', 'Ya Allah, berkahilah kami dalam rezeki yang telah Engkau berikan kepada kami dan peliharalah kami dari siksa api neraka'),
(31, 'Doa sesudah makan', 'اَلْحَمْدُ ِللهِ الَّذِىْ اَطْعَمَنَا وَسَقَانَا وَجَعَلَنَا مُسْلِمِيْنَ', 'Alhamdulillahilladzi ath-amanaa wa saqoonaa wa ja\'alanaa minal muslimiin.', 'Segala puji bagi Allah yang telah memberi kami makan dan minum serta menjadikan kami termasuk dari kaum muslimin.'),
(32, 'Doa ketika turun hujan', 'اللَّهُمَّ صَيِّبًا نَافِعًا', 'Allahumma shayyiban nafi’an.', 'Ya Allah, curahkanlah air hujan yang bermanfaat. (HR Bukhar dari Aisyah RA)'),
(33, 'Doa ketika takut bahaya hujan lebat', 'اللَّهُمَّ حَوَالَيْنَا وَلاَ عَلَيْنَا ، اللَّهُمَّ عَلَى الآكَامِ وَالظِّرَابِ ، وَبُطُونِ الأَوْدِيَةِ ، وَمَنَابِتِ الشَّجَرِ', 'Allahumma hawalaina wala ‘alaina. Allahumma ‘alal akami wa adhirabi, wa buthunil auwdiyati, wamanabitisyajari.', 'Ya Allah turunkan hujan ini di sekitar kami jangan di atas kami. Ya Allah curahkanlah hujan ini di atas bukit-bukit, di hutan-hutan lebat, di gunung-gunung kecil, di lembah-lembah, dan tempat-tempat tumbuhnya pepohonan. (HR Bukhari Muslim)'),
(34, 'Doa setelah turun hujan', 'مُطِرْنَا بِفَضْلِ اللـهِ ورَحْمَتِهِ', 'Muthirnaa bifadhlillahi wa rahmatihi.', 'Diturunkan kepada kami hujan berkat anugerah Allah dan rahmat-Nya. (HR Bukhari)'),
(35, 'Doa bertemu binatang buas', 'إِنَّهُۥ مِن سُلَيْمَٰنَ وَإِنَّهُۥ بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ', 'Innahụ min sulaimāna wa innahụ bismillāhir-raḥmānir-raḥīm', 'Sesungguhnya surat itu, dari SuIaiman dan sesungguhnya (isi)nya: Dengan menyebut nama Allah Yang Maha Pemurah lagi Maha Penyayang. (Qs. An Naml: 30 )'),
(36, 'Doa agar selalu dicukupkan rezeki', 'اَللّٰهُمَّ اَكْفِنِيْ بِحَلَالِكَ عَنْ حَرَامِكَ، وَأَغْنِنِيْ بِفَضْلِكَ عَمَّنْ سِوَاكَ', 'Allahummakfini bihalalika ‘an haramik wa aghnini bifadhlika amman siwak', 'Ya Allah, berilah aku kecukupan dengan rezeki yang halal, sehingga aku tidak memerlukan yang haram, dan berilah aku kekayaan dengan karuniamu, sehingga aku tidak memerlukan bantuan orang lain, selain diri-mu. (HR. Ahmad)'),
(37, 'Doa ketika menyisir rambut', 'اَللّهُمَّ حَرِّمْ شَعْرِى وَبَشَرِى عَلىَ النَّار', 'ALLAHUMMA HARRIM SYA\'RII WA BASYARII \'ALAN NAAR', 'Ya Allah, halangilah rambut dan kulitku dari api neraka');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_doa`
--
ALTER TABLE `tabel_doa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_doa`
--
ALTER TABLE `tabel_doa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
