<?php

require_once 'Constant.php';

class Script{
    static $inited;

    const PR_NEWGAME = 0; // private new game
    const PR_JOINGAME = 1; // private join game

    const PU_KINGDONE = 2; // public king already done the discussion

    const PU_REJECTCHANGEKING = 7; // because quest is rejected, go to next king
    const PU_KINGNEEDDISCUSS = 8; // before choose xx players, %s need %d seconds to discuss
    const PU_AFTERAPPROVE = 9; // approve is bigger, quest is executed.

    const PR_EXECQUEST = 10; // Quest no. xx, what do you want to choose

    const PR_SUCCESS = 11; // success
    const PR_FAIL = 12; // fail

    const PR_EXECQUESTGOOD = 13; // "Kamu orang baik. Kamu pun berusaha untuk menyelesaikan quest dengan sebaik-baiknya.";

    const PR_GOFORQUEST = 14; // xx pergi menyelesaikan quest, diberikan waktu xx.

    const PR_YOUAREMERLIN = 15; // you are merlin. bad guy are xxx
    const PR_YOUAREPERCIVAL = 16; // you are percival. merlin are xxx
    const PR_YOUAREGOODNORMAL = 17; // you are villager
    const PR_YOUAREMORDRED = 18; // you are mordred. Your bad team are xxx
    const PR_YOUAREASSASSIN = 19; // you are assassin. Your bad team are xxx
    const PR_YOUAREMORGANA = 20; // you are morgana. Your bad team are xxx
    const PR_YOUAREOBERON = 21; // you are oberon.
    const PR_YOUAREBADNORMAL = 22; // you are bad normal.

    const PU_KINGNEEDASSIGN = 23; // %s as king will assign %d players to do quest. time given %d
    const PR_SENDONEPLAYER = 24; // Choose person no. xx (from xx players) to do the quest.

    const PR_KILLMERLIN = 25; // Kill merlin
    const PR_LADYCHOOSE = 26; // Choose person to check
    const PU_APPRREJINST = 27; // %s telah menunjuk %s. %d to discuss

    const PU_REJECT5TIMES= 28; // Quest sudah direject 5 kali.
    const PU_FAILWITHXFAIL= 29; // Fail with xx fail

    const PU_BADGUYSWONQUEST= 30; // bad guys won
    const PU_GOODGUYSWON = 31; // good guys won

    const PU_BADGUYSWONKILL= 32; // bad guys won

    const PU_LADYLAKEINST = 33; // %s as lady lake may choose 1 person

    const PU_KILLMERLIN = 34; // 3 quest success. Tim jahat adalah %s.

    const PU_QSUCCESSNOFAIL = 35; // Quest success
    const PU_QSUCCESSXXFAIL = 36; // but has xx fail

    const PR_ASSIGNONEQUEST = 37; // you have assign %s to quest
    const PU_ASSIGNONEQUEST = 38; // %s has assign %s to quest

    const PR_BADGUYSUCCESS = 39; //
    const PR_BADGUYFAIL = 40; //

    const PR_LADYNOTSEE = 41; //
    const PU_LADYNOTSEE = 42; //

    const PR_KILLMERLINSUCCESS = 43; //
    const PU_KILLMERLINSUCCESS = 44; //
    const PU_MERLIN = 45; //
    const PU_NOTMERLIN = 46; //

    const PR_LADYSEE = 47; //
    const PR_GOOD = 48; //
    const PR_BAD = 49; //
    const PU_LADYSEE = 50; //

    const PR_ASSIGNLATE = 51; //
    const PU_ASSIGNLATE = 52; //

    const PU_APPRREJLATE = 53; //
    const PU_APPRREJREMIND = 54; //

    const PR_BADGUYLATESUCCESS = 55; //
    const PR_BADGUYLATEFAIL = 56; //

    const PU_DISCUSSREMIND = 57; //

    const PR_LADYLATE = 58; //
    const PU_LADYLATE = 59; //

    const PR_KILLMERLINLATE = 60; //
    const PU_KILLMERLINLATE = 61; //
    const PU_KILLMERLINREMIND = 62; //

    const PU_NOHISTFOUND = 63; //
    const PU_HISTQEXECBY = 64; //
    const PU_HISTQREJECTBY = 65; //
    const PU_HISTQFAILREJ = 66; //

    const PU_CANNOTJOINFULL = 67; //
    const PU_CANNOTJOIN = 68; //
    const PU_STARTMEFIRST = 69; //

    const PU_CREATEFIRST = 70; //
    const PU_GAMESTART = 71; //
    const PU_GAMECANCEL = 72; //

    const PU_JOINREMIND = 73; //
    const PU_JOINSTART = 74; //
    const PU_JOINSUCCESS = 75; //

    const PR_YOUAREMORGAUSE= 76; // you are morgause.
    const PR_YOUAREKNIGHTTHEREBAD= 77; // you are knight, at least 1 bad
    const PR_YOUAREKNIGHTNOBAD= 78; // you are knight, no bad

    const PR_YOUARENINJA = 79; // you are ninja. Your bad team are xxx
    const PR_BADGUY2FAIL = 80; //

    const PR_2FAIL = 81; // fail

    const PR_YOUAREAGENT = 82; // you are agent. Your code are xxx
    const PR_YOUAREWITCH = 83; // you are witch. The other roles are xxx
    const PR_YOUAREAUDITOR = 84; // you are auditor.

    const PR_FAILDECREASE1 = 85;

    const PR_AGENTSECRETCODE = 86;

    const PU_APPROVE = 87; // approve with thumbs up
    const PU_REJECT = 88; // approve with thumbs down

    const PU_APPREJ_BOARD_HIDE = 89; // Approve (xx) : << list >>
    const PU_LADYHOLDER = 90; // Lady: xx > xx > xx
    const PU_APPREJ_BOARD_REVEAL = 91; // Approve (xx) : << list >>

    const PU_SHOWVOTE = 94; // click the reply message to vote.
    const PU_SECONDSLEFT = 95; //second left to start

    const PU_FAIL5XREJ = 96; //
    const PR_AUDITORDECREASE1 = 97;

    const PR_EXECQUESTLANCELOT = 98;

    const PU_CHCKPMTOCHGLANG = 100; // check PM untuk mengganti bahasa
    const PU_SECONDTODECIDE = 101; // you have %d to decide
    const PU_LANGGROUPNOTFOUND = 102; // "Bahasa tidak berhasil diganti. group tidak ditemukan.";
    const PR_LANGGROUPCHANGED = 103; // "Bahasa tidak berhasil diganti. group tidak ditemukan.";
    const PU_LANGCHANGED = 104; // "Bahasa berhasil diganti menjadi %s";
    const PR_SETLANGGROUPINST = 105;
    const PR_SETLANGINST = 106;
    const PR_GROUPONLY = 107;
    const PU_ADMINONLY = 108;
    const PU_MAINTENANCE = 109;

    const PU_CONTACT = 110;
    const PU_HELP = 111;
    const PU_HOWTOPLAY = 112;
    const PU_RATEME = 113;
    const PU_ROLELIST = 114;
    const PU_FLEE_SUCCESS = 115;
    const PU_FLEE_FAIL = 116;
    const PU_NEED_MORE_PLAYERS = 117;
    const PU_PMONLY= 118;
    const PR_GROUPLIST= 119;
    const PU_JOINCHANNEL = 120;
    const PU_REQUEST_STOP = 121;
    const PU_STOP_SUCCESS = 122;

    const PR_QUEUE_ME = 123;
    const PR_QUEUE_CALL = 124;
    const PR_QUEUE_FULL = 125;

    const PU_IN_PROGRESS = 126;

    const NORMAL_MODE = 127;
    const CHAOS_MODE = 128;
    const PLAY_TIME = 129;
    const X_TIMES = 130;
    const WIN_RATE = 131;

    const PLAY_TO_HAVE_STAT = 132;
    const EVIL_TEAM_WON_STAT = 133;
    const GOOD_TEAM_WON_STAT = 134;

    const WON = 135;
    const LOST = 136;
    const LANG = 137;

    const PU_REQUEST_START = 138;



    const SERVANT = 150;
    const WITCH = 151;
    const THIEF = 152;
    const AUDITOR = 153;
    const AGENT = 154;
    const ASSASSIN = 155;
    const MORGAUSE = 156;
    const KNIGHT = 157;
    const MERLIN = 158;
    const PERCIVAL = 159;
    const MORGANA = 160;
    const OBERON = 161;
    const NINJA = 162;
    const MORDRED = 163;

    const QUEST = 164;
    const TOKEN_REJECT = 165;


    const SECRETCODES = 200;

    const PU_MERLININFO = 258;
    const PU_PERCIVALINFO = 259;
    const PU_SERVANTINFO = 260;
    const PU_MORDREDINFO = 261;
    const PU_MORGANAINFO = 262;
    const PU_ASSASSININFO = 263;
    const PU_OBERONINFO = 264;
    const PU_THIEFINFO = 265;
    const PU_MORGAUSEINFO = 266;
    const PU_KNIGHTINFO = 267;
    const PU_NINJAINFO = 268;
    const PU_AGENTINFO = 269;
    const PU_WITCHINFO = 270;
    const PU_AUDITORINFO = 271;
    const PU_GOODLANCELOTINFO = 272;
    const PU_EVILLANCELOTINFO = 273;

    const NO_LANCELOT = 300;
    const LANCELOT_V1 = 301;
    const LANCELOT_V2 = 302;
    const PU_LANCELOT_V1_SELECT = 303;
    const PU_LANCELOT_V2_SELECT = 304;

    const GOOD_LANCELOT = 305;
    const EVIL_LANCELOT = 306;

    const PR_YOUAREGOODLANCELOT = 307;
    const PR_YOUAREEVILLANCELOT = 308;
    const PU_FORECAST_LANCELOT = 309;

    const PU_LANCELOT_NOT_SWITCHED = 310;
    const PU_LANCELOT_SWITCHED = 311;


    static $script;
    static function init(){
        // if have not inited
        if (!Script::$inited) {
            Script::$inited = true;

            Script::$script["en"][Script::LANG] = "English";
            Script::$script["id"][Script::LANG] = "Bahasa Indonesia";
            Script::$script["it"][Script::LANG] = "Italiano";
            Script::$script["cn"][Script::LANG] = "繁體中文";
            Script::$script["pb"][Script::LANG] = "Português (Brasil)";
            Script::$script["ph"][Script::LANG] = "Filipino";
            Script::$script["es"][Script::LANG] = "Español";
            Script::$script["zho"][Script::LANG] = "简体中文";
            Script::$script["gdh"][Script::LANG] = "廣東話";
            Script::$script["och"][Script::LANG] = "正體中文";
            Script::$script["ar"][Script::LANG] = "اللغة العربية";
            Script::$script["fa"][Script::LANG] = "فارسی";


            Script::$script["en"][Script::QUEST] = "Quest";
            Script::$script["id"][Script::QUEST] = "Quest";
            Script::$script["it"][Script::QUEST] = "Missione";
            Script::$script["cn"][Script::QUEST] = "任務";
            Script::$script["pb"][Script::QUEST] = "Missão";
            Script::$script["ph"][Script::QUEST] = "Quest";
            Script::$script["es"][Script::QUEST] = "Gesta";
            Script::$script["zho"][Script::QUEST] = "任务 ✉";
            Script::$script["gdh"][Script::QUEST] = "任務";
            Script::$script["och"][Script::QUEST] = "任務 ✉";
            Script::$script["ar"][Script::QUEST] = "مهمة";
            Script::$script["fa"][Script::QUEST] = "چالش";


            Script::$script["en"][Script::TOKEN_REJECT] = "Reject token";
            Script::$script["id"][Script::TOKEN_REJECT] = "Token Menolak";
            Script::$script["it"][Script::TOKEN_REJECT] = "Numero di Rifiuti";
            Script::$script["cn"][Script::TOKEN_REJECT] = "反對標記";
            Script::$script["pb"][Script::TOKEN_REJECT] = "Marcador de rejeições";
            Script::$script["ph"][Script::TOKEN_REJECT] = "Reject token";
            Script::$script["es"][Script::TOKEN_REJECT] = "Marcador de rechazos";
            Script::$script["zho"][Script::TOKEN_REJECT] = "反对标记 ❌";
            Script::$script["gdh"][Script::TOKEN_REJECT] = "反對記號";
            Script::$script["och"][Script::TOKEN_REJECT] = "否決標誌 ❌";
            Script::$script["ar"][Script::TOKEN_REJECT] = "رمز مرفوض";
            Script::$script["fa"][Script::TOKEN_REJECT] = "رد شانس";


            Script::$script["en"][Script::MERLIN] = "Merlin ". Constant::EMO_MERLIN;
            Script::$script["id"][Script::MERLIN] = "Merlin ". Constant::EMO_MERLIN;
            Script::$script["it"][Script::MERLIN] = "Merlino ". Constant::EMO_MERLIN;
            Script::$script["cn"][Script::MERLIN] = "梅林 ". Constant::EMO_MERLIN;
            Script::$script["pb"][Script::MERLIN] = "Merlin ". Constant::EMO_MERLIN;
            Script::$script["ph"][Script::MERLIN] = "Merlin ". Constant::EMO_MERLIN;
            Script::$script["es"][Script::MERLIN] = "Merlín ". Constant::EMO_MERLIN;
            Script::$script["zho"][Script::MERLIN] = "梅林 ". Constant::EMO_MERLIN;
            Script::$script["gdh"][Script::MERLIN] = "梅林 ". Constant::EMO_MERLIN;
            Script::$script["och"][Script::MERLIN] = "梅林 ". Constant::EMO_MERLIN;
            Script::$script["ar"][Script::MERLIN] = "مارلين ". Constant::EMO_MERLIN;
            Script::$script["fa"][Script::MERLIN] = "مرلين ". Constant::EMO_MERLIN;


            Script::$script["en"][Script::PERCIVAL] = "Percival ". Constant::EMO_PERCIVAL;
            Script::$script["id"][Script::PERCIVAL] = "Percival ". Constant::EMO_PERCIVAL;
            Script::$script["it"][Script::PERCIVAL] = "Percival ". Constant::EMO_PERCIVAL;
            Script::$script["cn"][Script::PERCIVAL] = "派西維爾 ". Constant::EMO_PERCIVAL;
            Script::$script["pb"][Script::PERCIVAL] = "Percival ". Constant::EMO_PERCIVAL;
            Script::$script["ph"][Script::PERCIVAL] = "Percival ". Constant::EMO_PERCIVAL;
            Script::$script["es"][Script::PERCIVAL] = "Perceval ". Constant::EMO_PERCIVAL;
            Script::$script["zho"][Script::PERCIVAL] = "派西维尔 ". Constant::EMO_PERCIVAL;
            Script::$script["gdh"][Script::PERCIVAL] = "珀西瓦里 ". Constant::EMO_PERCIVAL;
            Script::$script["och"][Script::PERCIVAL] = "派西維爾 ". Constant::EMO_PERCIVAL;
            Script::$script["ar"][Script::PERCIVAL] = "بريفسال ". Constant::EMO_PERCIVAL;
            Script::$script["fa"][Script::PERCIVAL] = "پرسیوال ". Constant::EMO_PERCIVAL;


            Script::$script["en"][Script::MORGANA] = "Morgana " .Constant::EMO_MORGANA;
            Script::$script["id"][Script::MORGANA] = "Morgana ".Constant::EMO_MORGANA;
            Script::$script["it"][Script::MORGANA] = "Morgana ".Constant::EMO_MORGANA;
            Script::$script["cn"][Script::MORGANA] = "莫甘娜 ".Constant::EMO_MORGANA;
            Script::$script["pb"][Script::MORGANA] = "Morgana ".Constant::EMO_MORGANA;
            Script::$script["ph"][Script::MORGANA] = "Morgana ".Constant::EMO_MORGANA;
            Script::$script["es"][Script::MORGANA] = "Morgana ".Constant::EMO_MORGANA;
            Script::$script["zho"][Script::MORGANA] = "摩甘娜 ".Constant::EMO_MORGANA;
            Script::$script["gdh"][Script::MORGANA] = "莫甘娜 ".Constant::EMO_MORGANA;
            Script::$script["och"][Script::MORGANA] = "莫甘娜 ".Constant::EMO_MORGANA;
            Script::$script["ar"][Script::MORGANA] = "مورقانا ".Constant::EMO_MORGANA;
            Script::$script["fa"][Script::MORGANA] = "مورگانا ".Constant::EMO_MORGANA;


            Script::$script["en"][Script::OBERON] = "Oberon " .Constant::EMO_OBERON;
            Script::$script["id"][Script::OBERON] = "Oberon ".Constant::EMO_OBERON;
            Script::$script["it"][Script::OBERON] = "Oberon ".Constant::EMO_OBERON;
            Script::$script["cn"][Script::OBERON] = "奧北朗 ".Constant::EMO_OBERON;
            Script::$script["pb"][Script::OBERON] = "Oberon ".Constant::EMO_OBERON;
            Script::$script["ph"][Script::OBERON] = "Oberon ".Constant::EMO_OBERON;
            Script::$script["es"][Script::OBERON] = "Oberón ".Constant::EMO_OBERON;
            Script::$script["zho"][Script::OBERON] = "欧泊朗 ".Constant::EMO_OBERON;
            Script::$script["gdh"][Script::OBERON] = "奧伯龍 ".Constant::EMO_OBERON;
            Script::$script["och"][Script::OBERON] = "奥伯倫 ".Constant::EMO_OBERON;
            Script::$script["ar"][Script::OBERON] = "أوبيرن ".Constant::EMO_OBERON;
            Script::$script["fa"][Script::OBERON] = "اوبرن ".Constant::EMO_OBERON;


            Script::$script["en"][Script::NINJA] = "Ninja ".Constant::EMO_NINJA;
            Script::$script["id"][Script::NINJA] = "Ninja ".Constant::EMO_NINJA;
            Script::$script["it"][Script::NINJA] = "Ninja ".Constant::EMO_NINJA;
            Script::$script["cn"][Script::NINJA] = "忍者 ".Constant::EMO_NINJA;
            Script::$script["pb"][Script::NINJA] = "Ninja ".Constant::EMO_NINJA;
            Script::$script["ph"][Script::NINJA] = "Hokage ".Constant::EMO_NINJA;
            Script::$script["es"][Script::NINJA] = "Ninja ".Constant::EMO_NINJA;
            Script::$script["zho"][Script::NINJA] = "忍者 ".Constant::EMO_NINJA;
            Script::$script["gdh"][Script::NINJA] = "忍者 ".Constant::EMO_NINJA;
            Script::$script["och"][Script::NINJA] = "忍者 ".Constant::EMO_NINJA;
            Script::$script["ar"][Script::NINJA] = "نينجا ".Constant::EMO_NINJA;
            Script::$script["fa"][Script::NINJA] = "نينجا ".Constant::EMO_NINJA;

            Script::$script["en"][Script::MORDRED] = "Mordred ".Constant::EMO_MORDRED;
            Script::$script["id"][Script::MORDRED] = "Mordred ".Constant::EMO_MORDRED;
            Script::$script["it"][Script::MORDRED] = "Mordred ".Constant::EMO_MORDRED;
            Script::$script["cn"][Script::MORDRED] = "莫德雷德 ".Constant::EMO_MORDRED;
            Script::$script["pb"][Script::MORDRED] = "Mordred ".Constant::EMO_MORDRED;
            Script::$script["ph"][Script::MORDRED] = "Mordred ".Constant::EMO_MORDRED;
            Script::$script["es"][Script::MORDRED] = "Mordred ".Constant::EMO_MORDRED;
            Script::$script["zho"][Script::MORDRED] = "莫德雷德 ".Constant::EMO_MORDRED;
            Script::$script["gdh"][Script::MORDRED] = "莫德雷德 ".Constant::EMO_MORDRED;
            Script::$script["och"][Script::MORDRED] = "莫德雷德 ".Constant::EMO_MORDRED;
            Script::$script["ar"][Script::MORDRED] = "موردريد ".Constant::EMO_MORDRED;
            Script::$script["fa"][Script::MORDRED] = "موردرد ".Constant::EMO_MORDRED;



            Script::$script["en"][Script::SERVANT] = "Servant ".Constant::EMO_SERVANT;
            Script::$script["id"][Script::SERVANT] = "Rakyat Jelata ".Constant::EMO_SERVANT;
            Script::$script["it"][Script::SERVANT] = "Servo ".Constant::EMO_SERVANT;
            Script::$script["cn"][Script::SERVANT] = "僕人 ".Constant::EMO_SERVANT;
            Script::$script["pb"][Script::SERVANT] = "Servo ".Constant::EMO_SERVANT;
            Script::$script["ph"][Script::SERVANT] = "Alalay ".Constant::EMO_SERVANT;
            Script::$script["es"][Script::SERVANT] = "Leal ".Constant::EMO_SERVANT;
            Script::$script["zho"][Script::SERVANT] = "僕人 ".Constant::EMO_SERVANT;
            Script::$script["gdh"][Script::SERVANT] = "跟班 ".Constant::EMO_SERVANT;
            Script::$script["och"][Script::SERVANT] = "仕從 ".Constant::EMO_SERVANT;
            Script::$script["ar"][Script::SERVANT] = "خادم".Constant::EMO_SERVANT;
            Script::$script["fa"][Script::SERVANT] = "خدمتکار".Constant::EMO_SERVANT;


            Script::$script["en"][Script::THIEF] = "Thief " .Constant::EMO_THIEF;
            Script::$script["id"][Script::THIEF] = "Penjahat Biasa ".Constant::EMO_THIEF;
            Script::$script["it"][Script::THIEF] = "Ladro ".Constant::EMO_THIEF;
            Script::$script["cn"][Script::THIEF] = "小偷 ".Constant::EMO_THIEF;
            Script::$script["pb"][Script::THIEF] = "Ladrão ".Constant::EMO_THIEF;
            Script::$script["ph"][Script::THIEF] = "Isnatcher ".Constant::EMO_THIEF;
            Script::$script["es"][Script::THIEF] = "Ladrón ".Constant::EMO_THIEF;
            Script::$script["zho"][Script::THIEF] = "小偷 ".Constant::EMO_THIEF;
            Script::$script["gdh"][Script::THIEF] = "賊仔 ".Constant::EMO_THIEF;
            Script::$script["och"][Script::THIEF] = "小偷 ".Constant::EMO_THIEF;
            Script::$script["ar"][Script::THIEF] = "لص" .Constant::EMO_THIEF;
            Script::$script["fa"][Script::THIEF] = "دزد" .Constant::EMO_THIEF;


            Script::$script["en"][Script::WITCH] = "Witch " .Constant::EMO_WITCH;
            Script::$script["id"][Script::WITCH] = "Penyihir ".Constant::EMO_WITCH;
            Script::$script["it"][Script::WITCH] = "Strega ".Constant::EMO_WITCH;
            Script::$script["cn"][Script::WITCH] = "巫師 ".Constant::EMO_WITCH;
            Script::$script["pb"][Script::WITCH] = "Feiticeira ".Constant::EMO_WITCH;
            Script::$script["ph"][Script::WITCH] = "Bruha ".Constant::EMO_WITCH;
            Script::$script["es"][Script::WITCH] = "Bruja ".Constant::EMO_WITCH;
            Script::$script["zho"][Script::WITCH] = "巫师 ".Constant::EMO_WITCH;
            Script::$script["gdh"][Script::WITCH] = "女巫 ".Constant::EMO_WITCH;
            Script::$script["och"][Script::WITCH] = "女巫 ".Constant::EMO_WITCH;
            Script::$script["ar"][Script::WITCH] = "ويتش " .Constant::EMO_WITCH;
            Script::$script["fa"][Script::WITCH] = "جادوگر " .Constant::EMO_WITCH;


            Script::$script["en"][Script::AGENT] = "Agent " .Constant::EMO_AGENT;
            Script::$script["id"][Script::AGENT] = "Agen " .Constant::EMO_AGENT;
            Script::$script["it"][Script::AGENT] = "Agente " .Constant::EMO_AGENT;
            Script::$script["cn"][Script::AGENT] = "特務 " .Constant::EMO_AGENT;
            Script::$script["pb"][Script::AGENT] = "Agente " .Constant::EMO_AGENT;
            Script::$script["ph"][Script::AGENT] = "Agent " .Constant::EMO_AGENT;
            Script::$script["es"][Script::AGENT] = "Agente ".Constant::EMO_AGENT;
            Script::$script["zho"][Script::AGENT] = "特务 ".Constant::EMO_AGENT;
            Script::$script["gdh"][Script::AGENT] = "特務 ".Constant::EMO_AGENT;
            Script::$script["och"][Script::AGENT] = "密探 ".Constant::EMO_AGENT;
            Script::$script["ar"][Script::AGENT] = "وكيل " .Constant::EMO_AGENT;
            Script::$script["fa"][Script::AGENT] = "مأمور " .Constant::EMO_AGENT;


            Script::$script["en"][Script::AUDITOR] = "Auditor ".Constant::EMO_AUDITOR;
            Script::$script["id"][Script::AUDITOR] = "Auditor ".Constant::EMO_AUDITOR;
            Script::$script["it"][Script::AUDITOR] = "Revisore ".Constant::EMO_AUDITOR;
            Script::$script["cn"][Script::AUDITOR] = "外交達人 ".Constant::EMO_AUDITOR;
            Script::$script["pb"][Script::AUDITOR] = "Auditor ".Constant::EMO_AUDITOR;
            Script::$script["ph"][Script::AUDITOR] = "Auditor ".Constant::EMO_AUDITOR;
            Script::$script["es"][Script::AUDITOR] = "Auditor ".Constant::EMO_AUDITOR;
            Script::$script["zho"][Script::AUDITOR] = "外交官 ".Constant::EMO_AUDITOR;
            Script::$script["gdh"][Script::AUDITOR] = "外交官 ".Constant::EMO_AUDITOR;
            Script::$script["och"][Script::AUDITOR] = "使節 ".Constant::EMO_AUDITOR;
            Script::$script["ar"][Script::AUDITOR] = "المراجح ".Constant::EMO_AUDITOR;
            Script::$script["fa"][Script::AUDITOR] = "وکیل".Constant::EMO_AUDITOR;


            Script::$script["en"][Script::ASSASSIN] = "Assassin " .Constant::EMO_ASSASSIN;
            Script::$script["id"][Script::ASSASSIN] = "Assassin ".Constant::EMO_ASSASSIN;
            Script::$script["it"][Script::ASSASSIN] = "Assassino ".Constant::EMO_ASSASSIN;
            Script::$script["cn"][Script::ASSASSIN] = "刺客 ".Constant::EMO_ASSASSIN;
            Script::$script["pb"][Script::ASSASSIN] = "Assassina ".Constant::EMO_ASSASSIN;
            Script::$script["ph"][Script::ASSASSIN] = "Assassin ".Constant::EMO_ASSASSIN;
            Script::$script["es"][Script::ASSASSIN] = "Asesino ".Constant::EMO_ASSASSIN;
            Script::$script["zho"][Script::ASSASSIN] = "刺客 ".Constant::EMO_ASSASSIN;
            Script::$script["gdh"][Script::ASSASSIN] = "刺客 ".Constant::EMO_ASSASSIN;
            Script::$script["och"][Script::ASSASSIN] = "刺客 ".Constant::EMO_ASSASSIN;
            Script::$script["ar"][Script::ASSASSIN] = "الحشاش " .Constant::EMO_ASSASSIN;
            Script::$script["fa"][Script::ASSASSIN] = "قاتل " .Constant::EMO_ASSASSIN;


            Script::$script["en"][Script::MORGAUSE] = "Morgause " .Constant::EMO_MORGAUSE;
            Script::$script["id"][Script::MORGAUSE] = "Morgause ".Constant::EMO_MORGAUSE;
            Script::$script["it"][Script::MORGAUSE] = "Morgause ".Constant::EMO_MORGAUSE;
            Script::$script["cn"][Script::MORGAUSE] = "摩高斯 ".Constant::EMO_MORGAUSE;
            Script::$script["pb"][Script::MORGAUSE] = "Morgause ".Constant::EMO_MORGAUSE;
            Script::$script["ph"][Script::MORGAUSE] = "Morgause ".Constant::EMO_MORGAUSE;
            Script::$script["es"][Script::MORGAUSE] = "Morgause ".Constant::EMO_MORGAUSE;
            Script::$script["zho"][Script::MORGAUSE] = "摩高斯 ".Constant::EMO_MORGAUSE;
            Script::$script["gdh"][Script::MORGAUSE] = "莫歌絲 ".Constant::EMO_MORGAUSE;
            Script::$script["och"][Script::MORGAUSE] = "莫歌絲 ".Constant::EMO_MORGAUSE;
            Script::$script["ar"][Script::MORGAUSE] = "مورقوس " .Constant::EMO_MORGAUSE;
            Script::$script["fa"][Script::MORGAUSE] = "مورگاس " .Constant::EMO_MORGAUSE;

            Script::$script["en"][Script::KNIGHT] = "Knight ".Constant::EMO_KNIGHT;
            Script::$script["id"][Script::KNIGHT] = "Ksatria ".Constant::EMO_KNIGHT;
            Script::$script["it"][Script::KNIGHT] = "Cavaliere ".Constant::EMO_KNIGHT;
            Script::$script["cn"][Script::KNIGHT] = "騎士 ".Constant::EMO_KNIGHT;
            Script::$script["pb"][Script::KNIGHT] = "Cavaleiro ".Constant::EMO_KNIGHT;
            Script::$script["ph"][Script::KNIGHT] = "Kawal ".Constant::EMO_KNIGHT;
            Script::$script["es"][Script::KNIGHT] = "Caballero ".Constant::EMO_KNIGHT;
            Script::$script["zho"][Script::KNIGHT] = "骑士 ".Constant::EMO_KNIGHT;
            Script::$script["gdh"][Script::KNIGHT] = "武士 ".Constant::EMO_KNIGHT;
            Script::$script["och"][Script::KNIGHT] = "騎士 ".Constant::EMO_KNIGHT;
            Script::$script["ar"][Script::KNIGHT] = "الفارس ".Constant::EMO_KNIGHT;
            Script::$script["fa"][Script::KNIGHT] = "شوالیه ".Constant::EMO_KNIGHT;

            // NEW
            Script::$script["en"][Script::GOOD_LANCELOT] = "Good Lancelot ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["id"][Script::GOOD_LANCELOT] = "Good Lancelot ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["it"][Script::GOOD_LANCELOT] = "Lancillotto Buono ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["cn"][Script::GOOD_LANCELOT] = "正義的蘭斯洛特 ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["pb"][Script::GOOD_LANCELOT] = "Good Lancelot ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["ph"][Script::GOOD_LANCELOT] = "Good Lancelot ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["es"][Script::GOOD_LANCELOT] = "Good Lancelot ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["zho"][Script::GOOD_LANCELOT] = "正义的兰斯洛特 ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["gdh"][Script::GOOD_LANCELOT] = "正義蘭斯洛特 ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["och"][Script::GOOD_LANCELOT] = "正義方蘭斯洛特 ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["ar"][Script::GOOD_LANCELOT] = "لانسوت طيب ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["fa"][Script::GOOD_LANCELOT] = "لنسلات خوب ".Constant::EMO_GOOD_LANCELOT;

            // NEW
            Script::$script["en"][Script::EVIL_LANCELOT] = "Evil Lancelot ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["id"][Script::EVIL_LANCELOT] = "Evil Lancelot ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["it"][Script::EVIL_LANCELOT] = "Lancillotto Cattivo ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["cn"][Script::EVIL_LANCELOT] = "邪惡的蘭斯洛特 ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["pb"][Script::EVIL_LANCELOT] = "Evil Lancelot ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["ph"][Script::EVIL_LANCELOT] = "Evil Lancelot ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["es"][Script::EVIL_LANCELOT] = "Evil Lancelot ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["zho"][Script::EVIL_LANCELOT] = "邪恶的兰斯洛特 ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["gdh"][Script::EVIL_LANCELOT] = "邪惡蘭斯洛特 ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["och"][Script::EVIL_LANCELOT] = "邪惡方蘭斯洛特 ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["ar"][Script::EVIL_LANCELOT] = "لانسوت شرير ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["fa"][Script::EVIL_LANCELOT] = "لنسلات شیطانی ".Constant::EMO_EVIL_LANCELOT;


            Script::$script["en"][Script::PR_NEWGAME]
                = "You have created the new game - %s mode in group %s.";
            Script::$script["id"][Script::PR_NEWGAME]
                = "Kamu telah membuat permainan baru - %s di grup %s.";
            Script::$script["it"][Script::PR_NEWGAME]
                = "Hai creato una nuova partita, modalità %s nel gruppo %s.";
            Script::$script["cn"][Script::PR_NEWGAME]
                = "你已經開了 %s 在 %s 群組。";
            Script::$script["pb"][Script::PR_NEWGAME]
                = "Uma nova partida foi iniciada no modo %s no grupo %s.";
            Script::$script["ph"][Script::PR_NEWGAME]
                = "Ikaw ang pasimuno ng bagong laro - %s mode sa grupong %s.";
            Script::$script["es"][Script::PR_NEWGAME]
                = "Has creado un nuevo juego - Modo %s en grupo %s.";
            Script::$script["zho"][Script::PR_NEWGAME]
                = "新遊戏模式为 %s，你已经开了在 %s 群组。";
            Script::$script["gdh"][Script::PR_NEWGAME]
                = "你開咗個新一局遊戲， %s版，喺群組 %s。Normal 係正常版，Chaos 係混亂版。。";
            Script::$script["och"][Script::PR_NEWGAME]
                = "你剛建立新一輪遊戲，採用 %s 模式，將會運行在群組 %s 。Normal 為正常模式，Chaos 為混亂模式。";
            Script::$script["ar"][Script::PR_NEWGAME]
                = "لقد أنشأت لعبة جديدة %s mode في مجموعة %s.";
            Script::$script["fa"][Script::PR_NEWGAME]
                = "یک بازی جدید با مد - %s در گروه %s ساخته شد";


            Script::$script["en"][Script::PR_JOINGAME]
                = "You have joined the Avalon game in Group %s.";
            Script::$script["id"][Script::PR_JOINGAME]
                = "Kamu telah bergabung Avalon di group %s.";
            Script::$script["it"][Script::PR_JOINGAME]
                = "Ti sei unito con successo nella partita Avalon nel Gruppo %s.";
            Script::$script["cn"][Script::PR_JOINGAME]
                = "你已經加入了在群組 %s 舉辦的Avalon遊戲。";
            Script::$script["pb"][Script::PR_JOINGAME]
                = "Você se juntou ao jogo Avalon no grupo %s.";
            Script::$script["ph"][Script::PR_JOINGAME]
                = "Nakasali ka na sa larong Avalon sa Grupong %s.";
            Script::$script["es"][Script::PR_JOINGAME]
                = "Has ingresado en la partida de Avalon en el grupo %s.";
            Script::$script["zho"][Script::PR_JOINGAME]
                = "你已经加入了在群组 %s 举办的Avalon遊戏。";
            Script::$script["gdh"][Script::PR_JOINGAME]
                = "你已經加入咗 %s 嘅「Avalon 亞法隆」遊戲。";
            Script::$script["och"][Script::PR_JOINGAME]
                = "你已加入了在群組 %s 的「阿瓦隆」遊戲。";
            Script::$script["ar"][Script::PR_JOINGAME]
                = "لقد دخلت في لعبة أفالون في مجموعة %s.";
            Script::$script["fa"][Script::PR_JOINGAME]
                = "شما در گروه %s وارد بازی شدید";


            Script::$script["en"][Script::PU_KINGDONE]
                = "The king has already found the answer and then finally decided to finish this never-ending discussion.";
            Script::$script["id"][Script::PU_KINGDONE]
                = "Raja sudah mendapatkan pencerahan dan akhirnya memutuskan untuk mengakhiri diskusi tiada akhir ini.";
            Script::$script["it"][Script::PU_KINGDONE]
                = "Il re ha già trovato la risposta alle sue domande e ha finalmente deciso di terminare questo discorso infinito.";
            Script::$script["cn"][Script::PU_KINGDONE]
                = "國王已經知道自己要作出什麼選擇了，並出面終止這場無止盡的討論。";
            Script::$script["pb"][Script::PU_KINGDONE]
                = "Discussão encerrada. O Rei irá nomear os escolhidos para Missão.";
            Script::$script["ph"][Script::PU_KINGDONE]
                = "Nahanap na ng hari ang sagot at nagdesisyong tapusin na ang walang hangang usapang na ito.";
            Script::$script["es"][Script::PU_KINGDONE]
                = "El rey ya tiene una respuesta y ha decidido acabar con esta discusión interminable";
            Script::$script["zho"][Script::PU_KINGDONE]
                = "国王已经知道自己要作出什麽选择了，并出面终止这场无止尽的讨论。";
            Script::$script["gdh"][Script::PU_KINGDONE]
                = "國王見大家有共識，決定提早完咗個討論。";
            Script::$script["och"][Script::PU_KINGDONE]
                = "亞瑟王已經心裡有數，決定停止這場無休止的討論。";
            Script::$script["ar"][Script::PU_KINGDONE]
                = "وجد الملك بالفعل الجواب, ثم قرر أخيراً بإنهاء هذه المناقشة التي لن تنتهي.";
            Script::$script["fa"][Script::PU_KINGDONE]
                = "پادشاه جواب رو پیدا کرد و تصمیم گرفت به این بحث پایان ناپذیر پایان بده.";


            Script::$script["en"][Script::PU_REJECTCHANGEKING]
                = "The quest lead by %s has been already rejected. The Quest is now lead by the new king: %s.";
            Script::$script["id"][Script::PU_REJECTCHANGEKING]
                = "Quest yang dipimpin oleh %s telah ditolak. Quest dibatalkan dan king berpindah ke %s.";
            Script::$script["it"][Script::PU_REJECTCHANGEKING]
                = "La spedizione proposta da %s è stata rifiutata. La nuova avventura sarà decisa dal nuovo Re %s.";
            Script::$script["cn"][Script::PU_REJECTCHANGEKING]
                = "由國王 %s 委任的任務被反對了。現在新的國王是 %s";
            Script::$script["pb"][Script::PU_REJECTCHANGEKING]
                = "A missão conduzida por %s foi rejeitada. A missão será agora conduzida pelo novo Rei %s.";
            Script::$script["ph"][Script::PU_REJECTCHANGEKING]
                = "Ang Quest na pinamumunuan ni %s ay nareject na. Ngayon ang Quest ay pamumunuan na ng bagong Hari: %s.";
            Script::$script["es"][Script::PU_REJECTCHANGEKING]
                = "La gesta dirigida por %s ha sido rechazada. La nueva gesta ahora será dirigida por el nuevo rey: %s.";
            Script::$script["zho"][Script::PU_REJECTCHANGEKING]
                = "由国王 %s 委任的".Script::$script["zho"][Script::QUEST]."被反对了。现在新的国王是 %s";
            Script::$script["gdh"][Script::PU_REJECTCHANGEKING]
                = "由 %s 做國王委派嘅任務已經俾人反對咗。輪到 %s 擔任國王。";
            Script::$script["och"][Script::PU_REJECTCHANGEKING]
                = "%s 所領導的".Script::$script["och"][Script::QUEST]."已遭否決，現在任務改由亞瑟王指派的 %s 負責。";
            Script::$script["en"][Script::PU_REJECTCHANGEKING]
                = "المهمة التي يقودها %s قد تم رفضها بالفعل. المهمة الجديدة بيد الملك: %s.";
            Script::$script["fa"][Script::PU_REJECTCHANGEKING]
                = "رهبری چالش توسط جانشین جدید یعنی %s رد شد و به پادشاه جدید ما یعنی %s رسید.";


            Script::$script["en"][Script::PU_KINGNEEDDISCUSS]
                = "Before assign <b>%d persons</b>, %s as the king has <b>%d seconds</b> to discuss with the team. King may type /done to finish the discussion. Click /questhistory to see the history.";
            Script::$script["id"][Script::PU_KINGNEEDDISCUSS]
                = "Sebelum menunjuk <b>%d orang</b>, %s sebagai raja mempunyai <b>%d detik</b> untuk berdiskusi dengan tim. Raja boleh mengetik /done untuk mengakhiri diskusi. Klik /questhistory untuk melihat history.";
            Script::$script["it"][Script::PU_KINGNEEDDISCUSS]
                = "Prima di proporre <b>%d giocatori</b>, %s come Re ha diritto a <b>%d seconds</b> per discutere con la squadra. Il Re può usare /done se non ha più nulla da dire. Clicca /questhistory per vedere la cronologia delle missioni.";
            Script::$script["cn"][Script::PU_KINGNEEDDISCUSS]
                = "在委任<b>%d 人</b>做任務之前,國王 %s 有<b>%d 秒</b>可以同大家討論要委任誰執行任務。一旦討論完畢國王可以打 /done 來選擇你要委任的人。如果你想見到之前任務的記錄可以打 /questhistory 。";
            Script::$script["pb"][Script::PU_KINGNEEDDISCUSS]
                = "Antes de nomear <b>%d escolhidos</b> para a Missão, %s tem <b>%d segundos</b> para debater com o grupo. Quando quiser, envie /done para encerrar a discussão. (Enviem /questhistory para o histórico).";
            Script::$script["ph"][Script::PU_KINGNEEDDISCUSS]
                = "Bago pumili ng <b>%d persons</b>, Si %s bilang hari ay may <b>%d segundo</b> para talakayin ang kanyang miyembro. I-type /done para matapos ang diskusyon. I-click /questhistory para makita ang history.";
            Script::$script["es"][Script::PU_KINGNEEDDISCUSS]
                = "Antes de asignar <b>%d personas</b>, %s como rey tiene <b>%d segundos</b> para discutir con el equipo. El rey puede escribir el comando /done para finalizar la discusión. Escribe el comando /questhistory para ver el historial";
            Script::$script["zho"][Script::PU_KINGNEEDDISCUSS]
                = "在委任<b>%d 人</b>做任务之前,国王指定 %s 有 <b>%d 秒</b>可以同大家讨论要委任谁执行任务。一旦讨论完毕国王可以打 /done 来选择你要委任的人。如果你想见到之前任务的记录可以输入 /questhistory 。";
            Script::$script["gdh"][Script::PU_KINGNEEDDISCUSS]
                = "喺決定揀<b> %d 人 </b>出任務前，國王 %s 有<b> %d 秒 </b>同其他人商量，而佢可以打 /done 提早完咗個討論。任何人亦可以打 /questhistory 睇返做任務記錄。";
            Script::$script["och"][Script::PU_KINGNEEDDISCUSS]
                = "在選揀<b>%d 名幫手</b>前，國王指派由 %s 負責，有<b>%d 秒</b>討論人選及考慮。若有需要，可以傳送 /done 預早完成考慮。至於過去任務的歷史，可以輸入 /questhistory 查看。";
            Script::$script["ar"][Script::PU_KINGNEEDDISCUSS]
                = "قبل إختيار <b>%d للأشخاص</b>, %s كـ ملك له <b>%d ثانية</b> ليتناقش مع الجميع. الملك بإستطاعته كتابة /done لإنهاء النقاش. إضغط /questhistory لرؤية التاريخ.";
            Script::$script["fa"][Script::PU_KINGNEEDDISCUSS]
                = "قبل از معین کردن <b>%d نفر</b> توسط %s به عنوان پادشاه،  <b>%d ثانیه</b>  وقت داره که با درباریانش بحث کنه. پادشاه می تونه با استفاده از /done به بحث پایان بده و همچنین با استفاده از /questhistory تاریخچه رو ببینه.";


            Script::$script["en"][Script::PU_AFTERAPPROVE]
                = "Most of the team members approved. The quest will be executed!";
            Script::$script["id"][Script::PU_AFTERAPPROVE]
                = "Sebagian besar tim setuju, quest pun akan dijalankan!";
            Script::$script["it"][Script::PU_AFTERAPPROVE]
                = "La maggioranza dei giocatori ha approvato. La missione verrà eseguita!";
            Script::$script["cn"][Script::PU_AFTERAPPROVE]
                = "任務被多數人通過，因此，此任務將會被執行";
            Script::$script["pb"][Script::PU_AFTERAPPROVE]
                = "A maioria aprovou. A Missão será realizada!";
            Script::$script["ph"][Script::PU_AFTERAPPROVE]
                = "Karamihan sa miyembro ng grupo ay nagApprove. Ang Quest ay itutuloy!";
            Script::$script["es"][Script::PU_AFTERAPPROVE]
                = "La mayoría de miembros del equipo han aprobado la votación. La gesta será ejecutada!";
            Script::$script["zho"][Script::PU_AFTERAPPROVE]
                = "任务被多数人通过，因此，此任务将会被执行。";
            Script::$script["gdh"][Script::PU_AFTERAPPROVE]
                = "大部份人都贊成，開始做任務！";
            Script::$script["och"][Script::PU_AFTERAPPROVE]
                = "有過半數贊成，任務即將執行！";
            Script::$script["ar"][Script::PU_AFTERAPPROVE]
                = "معظم الأعضاء قد وافقوا, سيتم تنفيذ المهمة.";
            Script::$script["fa"][Script::PU_AFTERAPPROVE]
                = "بیشتر درباری ها موافقت هستن. پس چالش اجرا میشه!";


            Script::$script["en"][Script::PR_EXECQUEST]
                = "Quest no.%d. What do you want to choose?";
            Script::$script["id"][Script::PR_EXECQUEST]
                = "Quest ke-%d. Apa yang ingin kamu pilih?";
            Script::$script["it"][Script::PR_EXECQUEST]
                = "Missione numero %d. Chi vuoi scegliere?";
            Script::$script["cn"][Script::PR_EXECQUEST]
                = "這是任務%d。你想讓任務成功還是失敗？";
            Script::$script["pb"][Script::PR_EXECQUEST]
                = "Missão %d. Qual a sua escolha?";
            Script::$script["ph"][Script::PR_EXECQUEST]
                = "Quest no.%d. Ano ang pipiliin mo?";
            Script::$script["es"][Script::PR_EXECQUEST]
                = "Gesta no. %d. ¿A quién quieres elegir?";
            Script::$script["zho"][Script::PR_EXECQUEST]
                = "这是".Script::$script["zho"][Script::QUEST]." %d。你想选择如何执行任务？";
            Script::$script["gdh"][Script::PR_EXECQUEST]
                = "呢個第 %d 次任務。你俾唔俾佢過呢？";
            Script::$script["och"][Script::PR_EXECQUEST]
                = Script::$script["och"][Script::QUEST]." %d 號。你要如何選擇呢？";
            Script::$script["ar"][Script::PR_EXECQUEST]
                = "المهمة رقم : %d. ماذا تريد أن تختار؟";
            Script::$script["fa"][Script::PR_EXECQUEST]
                = "چالش شماره ی %d. انتخابت چیه؟";


            Script::$script["en"][Script::PR_SUCCESS]
                = "SUCCESS";
            Script::$script["id"][Script::PR_SUCCESS]
                = "SUKSES";
            Script::$script["it"][Script::PR_SUCCESS]
                = "NON FALLIRE";
            Script::$script["cn"][Script::PR_SUCCESS]
                = "成功";
            Script::$script["pb"][Script::PR_SUCCESS]
                = "SUCESSO";
            Script::$script["ph"][Script::PR_SUCCESS]
                = "SUCCESS";
            Script::$script["es"][Script::PR_SUCCESS]
                = "ÉXITO";
            Script::$script["zho"][Script::PR_SUCCESS]
                = "成功";
            Script::$script["gdh"][Script::PR_SUCCESS]
                = "成功";
            Script::$script["och"][Script::PR_SUCCESS]
                = "成功";
            Script::$script["ar"][Script::PR_SUCCESS]
                = "نجحت!";
            Script::$script["fa"][Script::PR_SUCCESS]
                = "پیروزی!";


            Script::$script["en"][Script::PR_FAIL]
                = "FAIL";
            Script::$script["id"][Script::PR_FAIL]
                = "GAGAL";
            Script::$script["it"][Script::PR_FAIL]
                = "FAIL";
            Script::$script["cn"][Script::PR_FAIL]
                = "失敗";
            Script::$script["pb"][Script::PR_FAIL]
                = "FRACASSO";
            Script::$script["ph"][Script::PR_FAIL]
                = "FAIL";
            Script::$script["es"][Script::PR_FAIL]
                = "FRACASO";
            Script::$script["zho"][Script::PR_FAIL]
                = "失败";
            Script::$script["gdh"][Script::PR_FAIL]
                = "失敗";
            Script::$script["och"][Script::PR_FAIL]
                = "失敗";
            Script::$script["ar"][Script::PR_FAIL]
                = "فشلت";
            Script::$script["fa"][Script::PR_FAIL]
                = "شکست";


            Script::$script["en"][Script::PR_2FAIL]
                = "2 FAIL";
            Script::$script["id"][Script::PR_2FAIL]
                = "2 GAGAL";
            Script::$script["it"][Script::PR_2FAIL]
                = "FALLISCI 2 VOLTE";
            Script::$script["cn"][Script::PR_2FAIL]
                = "失敗2次";
            Script::$script["pb"][Script::PR_2FAIL]
                = "2 FRACASSOS";
            Script::$script["ph"][Script::PR_2FAIL]
                = "2 FAIL";
            Script::$script["es"][Script::PR_2FAIL]
                = "2 FRACASOS";
            Script::$script["zho"][Script::PR_2FAIL]
                = "失败2次";
            Script::$script["gdh"][Script::PR_2FAIL]
                = "兩次失敗";
            Script::$script["och"][Script::PR_2FAIL]
                = "疊敗兩陣";
            Script::$script["ar"][Script::PR_2FAIL]
                = "فشلين!";
            Script::$script["fa"][Script::PR_2FAIL]
                = "دو شکست!";


            Script::$script["en"][Script::PR_EXECQUESTGOOD]
                = "You are a good guy. You put a lot effort to finish the quest as well as possible.";
            Script::$script["id"][Script::PR_EXECQUESTGOOD]
                = "Kamu orang baik. Kamu pun berusaha untuk menyelesaikan quest dengan sebaik-baiknya.";
            Script::$script["it"][Script::PR_EXECQUESTGOOD]
                = "Sei un bravo ragazzo. Dai il meglio di te per finire la missione il prima possibile.";
            Script::$script["cn"][Script::PR_EXECQUESTGOOD]
                = "你是一個非常盡責的好人，因為你花了很多心思去盡力完成任務。";
            Script::$script["pb"][Script::PR_EXECQUESTGOOD]
                = "Como membro das forças do Bem, sua escolha é pelo SUCESSO da Missão.";
            Script::$script["ph"][Script::PR_EXECQUESTGOOD]
                = "Ikaw ay mabuting tao. Ibinuhos mo ang lahat ng iyong makakaya upang matapos ang Quest ng maayos (PALOE).";
            Script::$script["es"][Script::PR_EXECQUESTGOOD]
                = "Eres un buen tipo. Pones el máximo esfuerzo para finalizar la gesta lo mejor posible.";
            Script::$script["zho"][Script::PR_EXECQUESTGOOD]
                = "你是一个非常尽责的好人，因为你花了很多心思去尽力完成".Script::$script["zho"][Script::QUEST]."。";
            Script::$script["gdh"][Script::PR_EXECQUESTGOOD]
                = "你係好人，好盡力完成咗今次任務。";
            Script::$script["och"][Script::PR_EXECQUESTGOOD]
                = "你是正派，盡了很多力去完成".Script::$script["och"][Script::QUEST]."，務求盡善盡美。";
            Script::$script["ar"][Script::PR_EXECQUESTGOOD]
                = "أنت شخص جيد. لقد وضعت كل جهدك لإنهاء هذه المهمة بكل ما لديك.";
            Script::$script["fa"][Script::PR_EXECQUESTGOOD]
                = "تو از درباریان پادشاه هستی! تمام تلاشت رو بکن تا بتونی همه چیز رو تا جای ممکن عالی تموم کنی.";

            // NEW
            Script::$script["en"][Script::PR_EXECQUESTLANCELOT]
                = "As the Evil Lancelot, you must fail the mission no matter what. “ψ(｀∇´)ψ";
            Script::$script["id"][Script::PR_EXECQUESTLANCELOT]
                = "Sebagai Evil Lancelot, kamu harus menggagalkan misi apapun yang terjadi. “ψ(｀∇´)ψ";
            Script::$script["it"][Script::PR_EXECQUESTLANCELOT]
                = "Come Lancillotto Cattivo, devi fallire la missione a prescindere. “ψ(｀∇´)ψ";
            Script::$script["cn"][Script::PR_EXECQUESTLANCELOT]
                = "身為邪惡的蘭斯洛特, 你都必須無論如何想辦法令任務失敗. “ψ(｀∇´)ψ";
            Script::$script["pb"][Script::PR_EXECQUESTLANCELOT]
                = "As the Evil Lancelot, you must fail the mission no matter what. “ψ(｀∇´)ψ";
            Script::$script["ph"][Script::PR_EXECQUESTLANCELOT]
                = "Bilang Evil Lancelot, kailangan mong i-fail ang mission kahit anong mangyari. “ψ(｀∇´)ψ";
            Script::$script["es"][Script::PR_EXECQUESTLANCELOT]
                = "As the Evil Lancelot, you must fail the mission no matter what. “ψ(｀∇´)ψ";
            Script::$script["zho"][Script::PR_EXECQUESTLANCELOT]
                = "身为".Script::$script["zho"][Script::EVIL_LANCELOT]."，你只会破坏所有".Script::$script["zho"][Script::QUEST]."。 “ψ(｀∇´)ψ";
            Script::$script["gdh"][Script::PR_EXECQUESTLANCELOT]
                = "作為邪惡蘭斯洛特 👺，你一定會令任何任務失敗 。 “ψ(｀∇´)ψ";
            Script::$script["och"][Script::PR_EXECQUESTLANCELOT]
                = "身為".Script::$script["och"][Script::EVIL_LANCELOT]."，你必要令".Script::$script["och"][Script::QUEST]."失敗。 “ψ(｀∇´)ψ";
            Script::$script["ar"][Script::PR_EXECQUESTLANCELOT]
                = "كـ لانسوت شرير, يجب عليك أن ترفض هذه المهمة مهما حصل. “ψ(｀∇´)ψ";
            Script::$script["fa"][Script::PR_EXECQUESTLANCELOT]
                = "به عنوان لنسلات شیطانی  تو باید چالش رو ببازی. انتخاب دیگه ای نداری!. “ψ(｀∇´)ψ";

            Script::$script["en"][Script::PR_GOFORQUEST]
                = "%s go to execute the quest. <b>%d seconds</b> are given to finish the quest.";
            Script::$script["id"][Script::PR_GOFORQUEST]
                = "%s pergi untuk menyelesaikan quest. Diberikan waktu <b>%d detik</b> untuk menyelesaikan quest.";
            Script::$script["it"][Script::PR_GOFORQUEST]
                = "%s vanno ad eseguire la missione. La missione finirà fra <b>%d secondi</b>.";
            Script::$script["cn"][Script::PR_GOFORQUEST]
                = "%s 被國王委派出去執行任務，他有 <b>%d 秒</b>的時間去完成任務。";
            Script::$script["pb"][Script::PR_GOFORQUEST]
                = "A Missão será realizada por %s. Eles têm <b>%d segundos </b> para definir qual será seu resultado.";
            Script::$script["ph"][Script::PR_GOFORQUEST]
                = "Sina %s ang pumunta para isagawa ang Quest. <b>%d segundo</b> ang ibinigay para matapos ang Quest.";
            Script::$script["es"][Script::PR_GOFORQUEST]
                = "%s van a ejecutar la gesta. <b>%d segundos</b> para definir cual será su resultado.";
            Script::$script["zho"][Script::PR_GOFORQUEST]
                = "%s 被委派出去执行".Script::$script["zho"][Script::QUEST]."，他们有 <b>%d 秒</b>的时间去完成任务。";
            Script::$script["gdh"][Script::PR_GOFORQUEST]
                = "%s 去咗做呢個任務，要<b> %d 秒 </b>先返嚟。";
            Script::$script["och"][Script::PR_GOFORQUEST]
                = "決定由 %s 執行".Script::$script["och"][Script::QUEST]."，之後有<b>%d 秒</b>去完成。";
            Script::$script["ar"][Script::PR_GOFORQUEST]
                = "%s ذهب لتنفيذ المهمة <b>%d ثانية </b> معطاة لإنهاء المهمة.";
            Script::$script["fa"][Script::PR_GOFORQUEST]
                = "%s برو و چالش رو اجرا کن <b>%d ثانيه </b> برای این کار وقت داری.";


            Script::$script["en"][Script::PR_YOUAREMERLIN]
                = "You are Merlin. Bad aura is radiated from %s. Guide your team without getting caught by the bad guys! Note: Merlin should not use the Private Message to communicate with the team.";
            Script::$script["id"][Script::PR_YOUAREMERLIN]
                = "Kamu adalah Merlin. Aura jahat terpancar kuat dari %s. Pandu timmu dalam quest tanpa ketahuan tim jahat! Catatan: Merlin tidak boleh menggunakan PM untuk berkomunikasi dengan tim.";
            Script::$script["it"][Script::PR_YOUAREMERLIN]
                = "Sei Merlino. Senti un'aura oscura provenire da %s. Guida il tuo team senza essere scoperto dai cattivi! Nota: Merlino non deve usare i messaggi privati per comunicare col team.";
            Script::$script["cn"][Script::PR_YOUAREMERLIN]
                = "你是梅林。你可以感覺到%s身上散發出邪惡的氣息。你必須在不引起壞人注意的情況下指引你的同伴完成任務。另外，你不能通過PM來聯絡你的同伴。";
            Script::$script["pb"][Script::PR_YOUAREMERLIN]
                = "Você é Merlin. Uma aura maligna emana de %s. Guie sua equipe sem ser percebido pelos maus! Nota: Merlin não deve enviar mensagens privadas para falar com sua equipe.";
            Script::$script["ph"][Script::PR_YOUAREMERLIN]
                = "Ikaw ang Merlin. May Masamang Awra ang lumalabas kay %s. Gabayan mo ang iyong mga kasama nang hindi nahuhuli ng Bad Guys! Note: Ang Merlin ay bawal gumamit ng PM para kausapin ang mga kakampi(Panira ng Laro ang PM).";
            Script::$script["es"][Script::PR_YOUAREMERLIN]
                = "Eres Merlín.  Un aura maligna emana de %s. Guía a tu equipo y escóndete de los malvados! Nota: Merlín no debe usar un Mensaje Privado para comunicarse con el equipo.";
            Script::$script["zho"][Script::PR_YOUAREMERLIN]
                = "你是<b>".Script::$script["zho"][Script::MERLIN]."</b>。你可以感觉到%s身上散发出邪恶的气息。你必须在不引起坏人注意的情况下指引你的同伴完成任务。另外，<b>你不能通过PM来联络你的同伴。</b>";
            Script::$script["gdh"][Script::PR_YOUAREMERLIN]
                = "你係<b>".Script::$script["gdh"][Script::MERLIN]."</b>，見到 %s 同奧伯龍嘅手下傾密計，似係做緊啲不法勾當。\n小心帶領好人陣營，同時唔好引起壞人注意！\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /merlin 睇多啲。";
            Script::$script["och"][Script::PR_YOUAREMERLIN]
                = "你是<b>".Script::$script["och"][Script::MERLIN]."</b>。%s 那班人散發著邪惡氣息，你要帶領團隊免受壞人滋擾！\n<b>注意：你不可用任何方法聯絡其他人。</b>\n \n如有需要，輸入 /merlin 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREMERLIN]
                = "أنت مرلين. طاقة شريرة تشع من %s. وجّه فريقك دون أن يقبض عليك من الأشرار. تذكير : لا يمكنك التواصل مع الآخرين بالرسائل الخاصة.";
            Script::$script["fa"][Script::PR_YOUAREMERLIN]
                = "تو مرلین، پیشگوی بزرگ هستی! بوهای بدی از طرف %s به مشام میاد. از به دام افتادن درباریان در برابر افراد بد جلوگیری کن. توجه کن که مرلین حق نداره توی چت خصوصی اطلاعاتی به کسی بده.";


            Script::$script["en"][Script::PR_YOUAREPERCIVAL]
                = "You are Percival. You see %s as Merlin, but it seems that only one of them is the true Merlin. Note: you should not use Private Message to ask Merlin directly.";
            Script::$script["id"][Script::PR_YOUAREPERCIVAL]
                = "Kamu adalah Percival. Kamu melihat %s sebagai Merlin, namun hanya satu dari mereka Merlin yang asli. Catatan: kamu tidak boleh menggunakan PM untuk bertanya Merlin secara langsung.";
            Script::$script["it"][Script::PR_YOUAREPERCIVAL]
                = "Sei Percival. Vedi %s come Merlino, ma sembra che solo uno di loro sia il vero Merlino. Nota: non devi usare i messaggi privati per chiedere direttamente a Merlino.";
            Script::$script["cn"][Script::PR_YOUAREPERCIVAL]
                = "你是派西維爾。你知道%s可能是梅林, 可惜你無法分辨誰是才真梅林。因此你必須靠自己找出真梅林，同時暗中保護梅林誤導刺客殺他。切記：你不可以使用PM方式找出梅林。";
            Script::$script["pb"][Script::PR_YOUAREPERCIVAL]
                = "Você é Percival. Você vê %s como sendo Merlin. Porém somente um deles é o verdadeiro Merlin. Nota: você não deve enviar uma mensagem privada para perguntá-los diretamente.";
            Script::$script["ph"][Script::PR_YOUAREPERCIVAL]
                = "Ikaw ang Percival. Nakikita mo sina %s bilang Merlin, pero isa lang sa kanila ang tunay na Merlin. Note: Wag mo sila iPM para tanungin kung sila ang Merlin(Wag makulit Bes No PM).";
            Script::$script["es"][Script::PR_YOUAREPERCIVAL]
                = "Eres Perceval. Ves a %s como Merlín, pero sólo uno de ellos es el auténtico Merlín. Nota: no debes usar un Mensaje Privado para preguntar directamente a Merlín";
            Script::$script["zho"][Script::PR_YOUAREPERCIVAL]
                = "你是<b>".Script::$script["zho"][Script::PERCIVAL]."</b>。你知道 %s 可能是梅林，可惜你无法分辨谁是才真梅林。因此你必须靠自己找出真梅林，同时暗中保护梅林误导刺客杀他。切记：你不可以使用PM方式找出梅林。";
            Script::$script["gdh"][Script::PR_YOUAREPERCIVAL]
                = "你係<b>".Script::$script["gdh"][Script::PERCIVAL]."</b>。你見到 %s 可能係梅林，但當中一個係假嘅（莫甘娜）。\n<b>記住：唔可以PM真假梅林或其他人。</b>\n \n可以打 /percival 睇多啲。";
            Script::$script["och"][Script::PR_YOUAREPERCIVAL]
                = "你是<b>".Script::$script["och"][Script::PERCIVAL]."</b>。你察覺 %s 為魔法師梅林，但不確定誰人是真正那位。\n<b>注意：你不可用任何方法私下詢問任何一個。</b>\n \n如有需要，輸入 /percival 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREPERCIVAL]
                = "أنت بريفسال. ترى  %s .كـ مرلين, و لكن من الواضح أن واحداً منهم فقط هو مرلين الحقيقي تذكير : لا يمكنك التواصل معهم بشكل مباشر بشكل خاص أو عام للسؤال عن دورهم.";
            Script::$script["fa"][Script::PR_YOUAREPERCIVAL]
                = "تو پرسیوال هستی. تو %s رو به عنوان مرلین می بینی اما نمیدونی کدوم مرلین واقعیه و باید پیداش کنی. توجه کن که مرلین نمیتونه از طریق پیام خصوصی مرلین اصلی رو بشناسه.";


            Script::$script["en"][Script::PR_YOUAREGOODNORMAL]
                = "You are servant. You don't know anything good or bad, but it is important to follow the right king. You should not use the Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUAREGOODNORMAL]
                = "Kamu adalah Rakyat jelata yang baik. Kamu tidak tahu menahu, yang penting ikut menyukseskan quest dan mengikuti perintah raja. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";
            Script::$script["it"][Script::PR_YOUAREGOODNORMAL]
                = "Sei un bravo villico. Non sai nulla di buono o cattivo, ma è importante seguire il giusto Re. Non dovete usare i messaggi privati per comunicare.";
            Script::$script["cn"][Script::PR_YOUAREGOODNORMAL]
                = "和神秘能力無緣的你們，只是一介草民，唯有通過和大家的交流，努力更隨你們的王，找出所有敵對角色，並且努力地完成任務。你不能PM其他人。";
            Script::$script["pb"][Script::PR_YOUAREGOODNORMAL]
                = "Você é um servo sem conhecimentos ocultos sobre o Bem e o Mal. Está do lado do Bem e seu objetivo é que as Missões tenham SUCESSO. Você não deve se comunicar por mensagens privadas.";
            Script::$script["ph"][Script::PR_YOUAREGOODNORMAL]
                = "Ikaw ay mabuting mamamayan. Wala kang alam kung sino ang mabuti o masama, pero mahalagang sumunod sa tamang hari(Wag PM kahit wala kang Alam).";
            Script::$script["es"][Script::PR_YOUAREGOODNORMAL]
                = "Eres un leal. No conoces quién está del lado del Bien o del Mal, pero tú estás del lado del Bien. No debes usar un Mensaje Privado para comunicarte.";
            Script::$script["zho"][Script::PR_YOUAREGOODNORMAL]
                = "你是一介<b>".Script::$script["zho"][Script::SERVANT]."</b>，唯有通过和大家的交流，努力更随你们的王，找出所有敌对角色，并且努力地完成任务。你不能PM其他人。";
            Script::$script["gdh"][Script::PR_YOUAREGOODNORMAL]
                = "你係<b>".Script::$script["gdh"][Script::SERVANT]."</b>。外表好醒，其實好薯，無任何特別嘅能力。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /servant 睇多啲。";
            Script::$script["och"][Script::PR_YOUAREGOODNORMAL]
                = "你是<b>".Script::$script["och"][Script::SERVANT]."</b>，卻不知哪一方是好或壞，但最重要是跟著正派方向。\n \n如有需要，輸入 /servant 會查看更多描述。你是不可以用任何方法私下聯絡其他人。";
            Script::$script["ar"][Script::PR_YOUAREGOODNORMAL]
                = "أنت الخادم. لا تعرف أحداً خيراً كان أو شراً, لكن من المهم أن تتبع الملك الصحيح. يجب عليك ألا تستخدم التواصل المنفرد.";
            Script::$script["fa"][Script::PR_YOUAREGOODNORMAL]
                = "تو خادم هستی! نمیدونی کی بده و کی خوبه اما اونقدر وفاداری که همیشه از پادشاه واقعی سرزمینت پیروی کنی. توجه کن که نمی تونی از طریق پیام خصوصی با کسی صحبت کنی.";


            Script::$script["en"][Script::PR_YOUAREMORDRED]
                = "You are Mordred. You team are %s. Merlin does not know you are in the bad side. You should not use the Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUAREMORDRED]
                = "Kamu adalah Mordred. Tim jahatmu adalah %s. Merlin tidak tahu bahwa kamu orang jahat. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";
            Script::$script["it"][Script::PR_YOUAREMORDRED]
                = "Sei Mordred. Il tuo team è composto da %s. Merlino non sa che sei cattivo. Non dovete usare i messaggi privati per comunicare.";
            Script::$script["cn"][Script::PR_YOUAREMORDRED]
                = "你是莫德雷德。你要和你的同伴們%s想盡辦法破壞任務。另外，大法師梅林本身的弱點就是會見到你是好人，所以你能假扮好人，取得好人的信任，令任務失敗。你不能PM其他人。";
            Script::$script["pb"][Script::PR_YOUAREMORDRED]
                = "Você é Mordred. Seu time é composto por %s. Merlin não sabe que você é do Mal. Você não deve se comunicar por mensagens privadas.";
            Script::$script["ph"][Script::PR_YOUAREMORDRED]
                = "Ikaw ang Mordred. Ang kakampi mo ay sina %s. Hindi alam ng Merlin na ikaw ay masama. Galingan mo ang akting bes!(Wag kang makulit BAWAL mag-pm!). (Panira ng Laro ang PM wag Epal bes!)";
            Script::$script["es"][Script::PR_YOUAREMORDRED]
                = "Eres Mordred. Tu equipo es %s. Merlín no sabe que formas parte del lado del Mal. No debes usar un Mensaje Privado para comunicarte.";
            Script::$script["zho"][Script::PR_YOUAREMORDRED]
                = "你是<b>".Script::$script["zho"][Script::MORDRED]."</b>。你要和你的同伴们%s想尽办法破坏任务。另外，梅林本身的弱点就会见到你是好人，所以你能假扮好人，取得好人的信任，令任务失败。你不能PM其他人。";
            Script::$script["gdh"][Script::PR_YOUAREMORDRED]
                = "你係<b>".Script::$script["gdh"][Script::MORDRED]."</b>。壞人陣營有 %s，但梅林喺唔知你係壞人。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /mordred 睇多啲。";
            Script::$script["och"][Script::PR_YOUAREMORDRED]
                = "你是<b>".Script::$script["och"][Script::MORDRED]."</b>。你反派那夥人有 %s，而梅林卻不會知道你已是反派的。\n \n如有需要，輸入 /mordred 會查看更多描述。你是不可以用任何方法私下聯絡其他人。";
            Script::$script["ar"][Script::PR_YOUAREMORDRED]
                = "أنت موردريد. فريقك هو %s. مرلين لا تعرف بأنك بصف الأشرار. يجب عليك ألا تستخدم التواصل المنفرد.";
            Script::$script["fa"][Script::PR_YOUAREMORDRED]
                = "تو موردرد هستی. این لیست هم تیمی های تو هستش: %s. مرلین حواسش به تو نبوده و نمیدونه طرف دشمنای دربار هستی پس سعی کن نقشتو خوب به عنوان یکی از درباریا بازی کنی تا توی زمان مناسب اونا رو به همراه تیمت از بین ببری. توجه کن که نمی تونی از چت خصوصی برای صحبت کردن استفاده کنی.";


            Script::$script["en"][Script::PR_YOUARENINJA]
                = "You are Ninja (Super Mordred). You team are %s. Merlin does not know you are in the bad side. You can give 2 FAILs if you are assigned in a quest, but this ability can only be used once per one game. You should not use the Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUARENINJA]
                = "Kamu adalah Ninja (Super Mordred). Tim jahatmu adalah %s. Merlin tidak tahu bahwa kamu orang jahat. Kamu bisa memberikan 2 GAGAL jika kamu diikutkan dalam sebuah quest, namun kemampuan ini hanya bisa dipakai 1 kali saja dalam 1 game. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";
            Script::$script["it"][Script::PR_YOUARENINJA]
                = "Sei il Ninja(Super Mordred). Il tuo team è composto da %s. Merlino non sa che sei cattivo. Puoi dare 2 FALLIMENTI se sei in una missione, ma potrai farlo solo una volta per partita. Non dovete usare i messaggi privati per comunicare.";
            Script::$script["cn"][Script::PR_YOUARENINJA]
                = "身負絕技的你是忍者,就連梅林都無法看穿你真實的身份。你的同伴有%s。一旦你被委派做任務，你會有2次機讓任務失敗。你不能PM其他人。";
            Script::$script["pb"][Script::PR_YOUARENINJA]
                = "Você é o Ninja (Super Mordred). O seu time é composto por %s. Merlin não sabe que você é do Mal. Se estiver em uma Missão, poderá votar com 2 FRACASSOS. Esta habilidade só pode ser usada uma vez no jogo. Você não deve se comunicar por mensagens privadas.";
            Script::$script["ph"][Script::PR_YOUARENINJA]
                = "Ikaw ay Hokage (Super Mordred). Ang kakampi mo ay sina %s. Hindi alam ng Merlin na ikaw ay Evil Team, Galingan mo ang akting Bes!,Pwede mo gamitin ang 2 Fails Ninjutsu kung ikaw ay maitalaga sa Quest isang beses sa isang Laro. (Panira ng Laro ang PM wag Epal bes!)";
            Script::$script["es"][Script::PR_YOUARENINJA]
                = "Eres un Ninja (Super Mordred). Tu equipo es %s. Merlín no sabe que formas parte del lado del Mal. Puedes aportar 2 FRACASOs si eres elegido en una quest,  pero esta habilidad sólo puede ser usada una vez por partida. No debes usar un Mensaje Privado para comunicarte.";
            Script::$script["zho"][Script::PR_YOUARENINJA]
                = "身怀绝技的你是<b>".Script::$script["zho"][Script::NINJA]."</b>,就连梅林都无法看穿你真实的身份。你的同伴有%s。一旦你被委派做任务，你会有2次机让任务失败。你不能PM其他人。";
            Script::$script["gdh"][Script::PR_YOUARENINJA]
                = "你係<b>".Script::$script["gdh"][Script::NINJA]."</b>，梅林唔會知你係壞人。當你要去做任務，可以令到任務失敗 2 次，但呢種能力只用得 1 次。壞人陣營有 %s。\n<b>記住：唔可以PM其他人。</b> \n \n可以打 /ninja 睇多啲。";
            Script::$script["och"][Script::PR_YOUARENINJA]
                = "你是<b>".Script::$script["och"][Script::NINJA]."</b>，能力強過莫德雷德。你反派那夥人有 %s，而梅林卻不會知道你已是反派的。當你獲委任去做任務時候，可以令任務 2 次失敗，但這種能力只容許 1 次運用。\n \n如有需要，輸入 /ninja 會查看更多描述。你是不可以用任何方法私下聯絡其他人。";
            Script::$script["ar"][Script::PR_YOUARENINJA]
                = "أنت نينجا (سوبر موردريد). فريقك هو %s. مرلين لا تعرف بأنك بصف الأشرار. بإمكانك أن تعطي فشلين إن كنت مصوتاً للمهمة, لكن هذه الميزة فقط يمكنك إستخدامها مرة واحدة. لا يمكنك إستخدام التواصل المنفرد.";
            Script::$script["fa"][Script::PR_YOUARENINJA]
                = "تو نینجا هستی یا بهتره بگم موردرد پیشرفته! این لیست هم تیمی های تو هستش: %s. مرلین تو رو نمیشناسه و نمیدونه که از دشمنای دربار هستی پس نقشتو به عنوان یه درباری خوب، به خوبی بازی کن. وجه برتری تو اینه که می تونی توی یه چالش 2 بار شکست وارد کنی ولی توجه کن که توی هر بازی فقط یه بار می تونی از این ویژگی استفاده کنی. توجه کن که نباید برای صحبت کردن از پیام خصوصی استفاده کنی.";


            Script::$script["en"][Script::PR_YOUAREAGENT]
                = "You are Agent, a good person whose job is to succeed the missions. The same secret codes are given to agents after a quest has been failed. Find your agent teammates, then together you will succeed the mission easier. You should not use the Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUAREAGENT]
                = "Kamu adalah agent, orang baik yang bertugas untuk menyukseskan misi. Kode rahasia yang sama akan diberikan ke agent setelah sebuah quest gagal. Temukan teman agenmu, maka bersama-sama kalian akan menyukseskan misi lebih mudah. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";
            Script::$script["it"][Script::PR_YOUAREAGENT]
                = "Sei un Agente, una persona buona il cui compito è completare le missioni. Lo stesso codice viene dato agli agenti dopo una missione è stato fallito. Trova i tuoi compagni agenti, e finisci la missione più facilmente. Non dovete usare i messaggi privati per comunicare.";
            Script::$script["cn"][Script::PR_YOUAREAGENT]
                = "你是特務,專門暗中幫助好人完成任務。你的同伴們會通過暗號來知道你的存在。在執行任務後失敗後，特務們都會收到同樣的暗號。切記，你不能PM其他人來確認你們之間的暗號。";
            Script::$script["pb"][Script::PR_YOUAREAGENT]
                = "Você é um Agente. Está do lado do Bem e seu objetivo é que as Missões tenham SUCESSO. Os códigos secretos serão entregues aos Agentes após uma Missão fracassar. Encontre outros Agentes e, juntos, se esforcem para que seja mais fácil o SUCESSO das Missões. Nota: os Agentes não devem se comunicar por mensagens privadas.";
            Script::$script["ph"][Script::PR_YOUAREAGENT]
                = "Ikaw ang Agent, mabuting tao ka na ang misyon ay manalo. May parehas na secret code ang ibibigay sa mga agent pagkatapos ng Quest 2 o 3. Gamitin ang code at hanapin ang  mga co-agent mo para mapadali ang misyon!(Panira ng Laro ang PM wag Epal bes!).";
            Script::$script["es"][Script::PR_YOUAREAGENT]
                = "Eres un Agente, una buena persona cuyo trabajo es completar las misiones. El mismo código secreto os es revelado a los agentes después de que una gesta fracase. Encuentra a tu equipo de agentes, juntos podréis completar las misiones más fácilmente. No debes usar un Mensaje Privado para comunicarte";
            Script::$script["zho"][Script::PR_YOUAREAGENT]
                = "你是<b>".Script::$script["zho"][Script::AGENT]."</b>,专门暗中帮助好人完成任务。你的同伴们会通过暗号来知道你的存在。在执行任务後失败後，特务们都会收到同样的暗号。切记，你不能PM其他人来确认你们之间的暗号。";
            Script::$script["gdh"][Script::PR_YOUAREAGENT]
                = "你係<b>".Script::$script["gdh"][Script::AGENT]."</b>，暗中協助好人成功執行任務。當有任務失敗咗，所有特務都會收到暗號，你可以憑暗號同其他特務相認。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /agent 睇多啲。";
            Script::$script["och"][Script::PR_YOUAREAGENT]
                = "你是<b>".Script::$script["och"][Script::AGENT]."</b>，屬於正派而只會令任務成功。當有任務失敗後，就會有同一個暗號予所有密探。若找到其他特務團隊，就會更大機會令任務成功。\n注意：你是不可以用任何方法私下聯絡其他人。\n \n如有需要，輸入 /agent 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREAGENT]
                = "أنت وكيل. شخص طيب هدفه بأن يفوز في المهام. تعطى نفس الرموز السرية للوكلاء الآخرين بعد فشل المهمة. أوجد الوكلاء من فريقك, و معاً بإمكانكم النجاح في المهمات. يجب عليك ألا تستخدم التواصل المنفرد.";
            Script::$script["fa"][Script::PR_YOUAREAGENT]
                = "تو یه مأمور از طرف دربار پادشاه هستی و وظیفت پیروزی در مأموریته که به تو واگذار شده. تو باید کمک کنی تا دربار به پیروزی برسه. بعد از شکست یک چالش کدهای مخفی بین مأمورها رد و بدل میشه. مأمورهای دیگه رو بشناس تا بتونید راحت تر مأموریتتونو به اتمام برسونید. توجه کن که نباید برای صحبت کردن از پیام خصوصی استفاده کنی.";


            Script::$script["en"][Script::PR_YOUAREWITCH]
                = "You are Witch, an evil person. Your evil teams are %s. With your ability, you know that there are these roles on the good sides: %s. You should not use the Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUAREWITCH]
                = "Kamu adalah Witch (Penyihir), orang jahat. Tim jahatmu adalah %s. Dengan kemampuanmu, kamu tahu bahwa ada peran-peran ini di sisi baik: %s. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";
            Script::$script["it"][Script::PR_YOUAREWITCH]
                = "Sei la Strega, dalla parte dei cattivi. Il tuo team è composto da %s. Con la tua abilità, saprai quali ruoli buoni sono presenti in partita: %s. Non puoi usare i messaggi privati per comunicare.";
            Script::$script["cn"][Script::PR_YOUAREWITCH]
                = "你是巫師, 邪惡隊伍的引領者。你的隊員是%s。以你高強的法力，你能夠知道, 好人的角色有這些: %s. 你不能PM其他人。";
            Script::$script["pb"][Script::PR_YOUAREWITCH]
                = "Você é a Feiticeira, uma pessoa do Mal. Seu grupo do Mal é composto por %s. Você é capaz de saber que o grupo do Bem é composto por: %s.";
            Script::$script["ph"][Script::PR_YOUAREWITCH]
                = "Ikaw ang Bruha, Panget at masamang nilalang. Ang panget mong kakampi mo ay sina %s. Dahil sa Powers mo, alam mo ang role list ng Good Team: %s.(Bruha bawal mag PM!).";
            Script::$script["es"][Script::PR_YOUAREWITCH]
                = "Eres una Bruja, una mala persona. Tu equipo maligno es %s. Con tu habilidad, conoces que hay estos roles en el bando del Bien: %s.";
            Script::$script["zho"][Script::PR_YOUAREWITCH]
                = "你是<b>".Script::$script["zho"][Script::WITCH]."</b>，邪恶队伍的引领者。你的队员是%s。以你高强的法力，你能够知道好人的角色有这些: %s.";
            Script::$script["gdh"][Script::PR_YOUAREWITCH]
                = "你係<b>".Script::$script["gdh"][Script::WITCH]."</b>，壞人陣營有 %s。你用你個水晶球，睇到好人嗰邊有以下嘅角色： %s。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /witch 睇多啲。";
            Script::$script["och"][Script::PR_YOUAREWITCH]
                = "你是<b>".Script::$script["och"][Script::WITCH]."</b>，屬於壞人反派。你反派那夥人有 %s。以你能力許可，你亦已知曉正派有以下角色： %s。\n \n如有需要，輸入 /witch 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREWITCH]
                = "أنت ويتش. شخص شرير. فريقك الشرير هم %s. بقدراتك, أنت تعرف بأن هناك هذه الأدوار من الطيبين : %s. يجب عليك ألا تستخدم التواصل المنفرد.";
            Script::$script["fa"][Script::PR_YOUAREWITCH]
                = "تو جادوگر هستی. یه یاغی علیه دربار. هم تیمی های تو این افراد هستن: %s. با قدرت شیطانی‌ای که داری می تونی درباری ها رو که این افراد هستن شناسایی کنی: %s. توجه کن که نباید برای صحبت کردن از پیام خصوصی استفاده کنی.";


            Script::$script["en"][Script::PR_YOUAREAUDITOR]
                = "You are Auditor, a good person. When you are assigned for a quest, there is 20% chance you can eliminate 1 FAIL for that quest.";
            Script::$script["id"][Script::PR_YOUAREAUDITOR]
                = "Kamu adalah Auditor, orang baik. Ketika kamu ditunjuk di sebuah quest, ada 20% kemungkinan kamu dapat menghilangkan 1 FAIL dari quest itu.";
            Script::$script["it"][Script::PR_YOUAREAUDITOR]
                = "Sei un Revisore, e faresti di tutto per completare le missioni. Quando vieni assegnato ad una missione, hai il 20% di probabilità di annullare un FALLIMENTO per quella missione.";
            Script::$script["cn"][Script::PR_YOUAREAUDITOR]
                = "你是善於溝通的外交達人,當你被委派做任務的時候你有20%的機率去讓壞人造成的任務失敗無效化。";
            Script::$script["pb"][Script::PR_YOUAREAUDITOR]
                = "Você é o Auditor. Está do lado do Bem. Quando estiver em uma Missão, existe 20% de chance de você ser capaz de eliminar 1 FRACASSO.";
            Script::$script["ph"][Script::PR_YOUAREAUDITOR]
                = "Ikaw ang Auditor, mabuting tao. Kapag ikaw ay naitalaga sa Quest, mayroong 20% chance na matanggal mo ang 1 FAIL sa Quest (No PM For the Win!).";
            Script::$script["es"][Script::PR_YOUAREAUDITOR]
                = "Eres un Auditor, una buena persona. Cuando seas asignado a una gesta, hay una probabilidad del 20% de eliminar 1 FRACASO para esa gesta.";
            Script::$script["zho"][Script::PR_YOUAREAUDITOR]
                = "你是善於沟通的<b>".Script::$script["zho"][Script::AUDITOR]
                ."</b>，当你被委派做任务的时候你有 20% 的机率去让坏人造成的任务失败无效化。";
            Script::$script["gdh"][Script::PR_YOUAREAUDITOR]
                = "你係<b>".Script::$script["gdh"][Script::AUDITOR]
                ."</b>，只要有你份做嘅任務，有 20% 機會可以抵銷其中一次失敗。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /auditor 睇多啲。";
            Script::$script["och"][Script::PR_YOUAREAUDITOR]
                = "你係<b>".Script::$script["och"][Script::AUDITOR]
                ."</b>，屬於正派。當挑選你去任務時，有 20% 會防止到 1 次任務失敗。\n \n如有需要，輸入 /auditor 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREAUDITOR]
                = "أنت المراجح, شخص جيد. عندما ترشح إلى المهمة, هناك إحتمال 20% بأن تزيل الفشل من هذه المهمة.";
            Script::$script["fa"][Script::PR_YOUAREAUDITOR]
                = "تو وکیل هستی. به خاطر تواناییت توی حرف زدن، می تونی به احتمال 20 درصد یه باخت رو توی چالشی که مأمورش شدی از بین ببری چون تو از درباریا هستی. توجه کن که نباید برای صحبت کردن از پیام خصوصی استفاده کنی.";

            // NEW
            Script::$script["en"][Script::PR_YOUAREGOODLANCELOT]
                = "You are <b>".Script::$script["en"][Script::GOOD_LANCELOT]
                ."</b>. Your allegiance is not stable. Sometimes, you cannot control your emotion and become evil.";
            Script::$script["id"][Script::PR_YOUAREGOODLANCELOT]
                = "You are <b>".Script::$script["id"][Script::GOOD_LANCELOT]
                ."</b>. Kepercayaanmu terhadap kebenaran goyah. Kadang kamu tidak dapat mengontrol emosi dan menjadi jahat.";
            Script::$script["it"][Script::PR_YOUAREGOODLANCELOT]
                = "You are <b>".Script::$script["it"][Script::GOOD_LANCELOT]
                ."</b>. La tua lealtà non è stabile. Delle volte, non puoi controllare le tue emozioni e diventi cattivo.";
            Script::$script["cn"][Script::PR_YOUAREGOODLANCELOT]
                = "你是<b>".Script::$script["cn"][Script::GOOD_LANCELOT]
                ."</b>.你所屬陣型是不穩定的。有時候，你無法控制你的理智，而選擇成為了邪惡的蘭斯洛特。";
            Script::$script["pb"][Script::PR_YOUAREGOODLANCELOT]
                = "You are <b>".Script::$script["pb"][Script::GOOD_LANCELOT]
                ."</b>. Your allegiance is not stable. Sometimes, you cannot control your emotion and become evil.";
            Script::$script["ph"][Script::PR_YOUAREGOODLANCELOT]
                = "Ikaw ang <b>".Script::$script["ph"][Script::GOOD_LANCELOT]
                ."</b>. Ang iyong katapatan ay hindi matatag. Minsan, hindi mo mapigilang maging Pusong Bato.";
            Script::$script["es"][Script::PR_YOUAREGOODLANCELOT]
                = "You are <b>".Script::$script["es"][Script::GOOD_LANCELOT]
                ."</b>. Your allegiance is not stable. Sometimes, you cannot control your emotion and become evil.";
            Script::$script["zho"][Script::PR_YOUAREGOODLANCELOT]
                = "你是善变的<b>".Script::$script["zho"][Script::GOOD_LANCELOT]
                ."</b>，毫无忠心可言，有机会就夺位，成为邪恶的兰斯洛特。";
            Script::$script["gdh"][Script::PR_YOUAREGOODLANCELOT]
                = "你係<b>".Script::$script["gdh"][Script::GOOD_LANCELOT]
                ."</b>，暫時喺好人，但係你隨時有機會叛變做壞人。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /goodlancelot 睇多啲。";
            Script::$script["och"][Script::PR_YOUAREGOODLANCELOT]
                = "你是<b>".Script::$script["och"][Script::GOOD_LANCELOT]
                ."</b>，暫定屬於正派，但不太忠誠。一時變心就會成反派。\n \n如有需要，輸入 /goodlancelot 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREGOODLANCELOT]
                = "أنت <b>".Script::$script["ar"][Script::GOOD_LANCELOT]
                ."</b>. ولاءك ليس مستقر. بعض المرات لا يمكنك بأن تتحكم بعواطفك و تصبح شرير.";
            Script::$script["fa"][Script::PR_YOUAREGOODLANCELOT]
                = "تو <b>".Script::$script["fa"][Script::GOOD_LANCELOT]
                ."</b>. از سلامت روحی و روانی درستی بهره نمی بری (بعد از بازی به روانشناس مراجعه کن!) واسه ی همین بعضی وقتا تبدیل به یه فرد شیطانی و یاغی میشی.";

            // NEW
            Script::$script["en"][Script::PR_YOUAREEVILLANCELOT]
                = "You are <b>".Script::$script["en"][Script::EVIL_LANCELOT]
                ."</b>. You don't know your any evil friends. Your allegiance is not stable. Sometimes, you cannot control your emotion and become good.";
            Script::$script["id"][Script::PR_YOUAREEVILLANCELOT]
                = "Kamu adalah <b>".Script::$script["id"][Script::EVIL_LANCELOT]
                ."</b>. Kamu tidak tahu satu pun teman jahatmu. Pendirianmu tidak kuat. Kadang, kamu tidak bisa mengontrol emosi dan menjadi baik.";
            Script::$script["it"][Script::PR_YOUAREEVILLANCELOT]
                = "You are <b>".Script::$script["it"][Script::EVIL_LANCELOT]
                ."</b>. Non conosci i tuoi amici cattivi. La tua lealtù non è stabile. A volte, non puoi controllare le emozioni e diventi buono.";
            Script::$script["cn"][Script::PR_YOUAREEVILLANCELOT]
                = "你是<b>".Script::$script["cn"][Script::EVIL_LANCELOT]
                ."</b>. 你不會知道會有誰是你邪惡陣型的隊員。你所屬的陣型是不一定的。有時候你可能無法控制自己的情緒，願意投靠好人的一方，幫助好人取得意外的勝利。";
            Script::$script["pb"][Script::PR_YOUAREEVILLANCELOT]
                = "You are <b>".Script::$script["pb"][Script::EVIL_LANCELOT]
                ."</b>. You don't know your any evil friends. Your allegiance is not stable. Sometimes, you cannot control your emotion and become good.";
            Script::$script["ph"][Script::PR_YOUAREEVILLANCELOT]
                = "Ikaw ang <b>".Script::$script["ph"][Script::EVIL_LANCELOT]
                ."</b>. Wala kang kilala sino man sa Evil Friends mo. Ang iyong katapatan ay hindi matatag. Minsan, di mo kayang layuan ang tukso at nagiging Pusong Mamon.";
            Script::$script["es"][Script::PR_YOUAREEVILLANCELOT]
                = "You are <b>".Script::$script["es"][Script::EVIL_LANCELOT]
                ."</b>. You don't know your any evil friends. Your allegiance is not stable. Sometimes, you cannot control your emotion and become good.";
            Script::$script["zho"][Script::PR_YOUAREEVILLANCELOT]
                = "你是善变的<b>".Script::$script["zho"][Script::EVIL_LANCELOT]
                ."</b>>，对邪恶队伍亦毫忠心可言，有机会就变心，反成为正义的兰斯洛特。";
            Script::$script["gdh"][Script::PR_YOUAREEVILLANCELOT]
                = "你係<b>".Script::$script["gdh"][Script::EVIL_LANCELOT]
                ."</b>，暫時喺壞人，並且唔知壞人陣營有咩人。遊戲中途有機會轉做好人。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /badlancelot 睇多啲。";
            Script::$script["och"][Script::PR_YOUAREEVILLANCELOT]
                = "你是<b>".Script::$script["och"][Script::EVIL_LANCELOT]
                ."</b>，暫定屬於反派，卻又不知悉自己反派有何人。一時變心就會成正派。\n \n如有需要，輸入 /badlancelot 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREEVILLANCELOT]
                = "أنت <b>".Script::$script["ar"][Script::EVIL_LANCELOT]
                ."</b>. أنت لا تعرف أي أحد من فريقك. ولاءك ليس ثابت, بعض المرات تحكمك عواطفك و تصبح طيب.";
            Script::$script["fa"][Script::PR_YOUAREEVILLANCELOT]
                = "تو<b>".Script::$script["fa"][Script::EVIL_LANCELOT]
                ."</b>. از سلامت روحی و روانی درستی بهره نمی بری (بعد از بازی به روانشناس مراجعه کن!) واسه ی همین بعضی وقتا تبدیل به یه فرد خوب و همراه درباریا میشی.";


            Script::$script["en"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "Lancelot roles have entered. Use the following forecast to see the future!\n";
            Script::$script["id"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "Peran Lancelot sudah masuk. Gunakan ramalan berikut untuk melihat masa depan!\n";
            Script::$script["it"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "I ruoli di Lancillotto sono presenti. Usa le previsioni qui sotto per vedere il futuro!\n";
            Script::$script["cn"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "本局有好及壞蘭斯洛特，請使用下面的預測去預示未來幾個任務的情況！\n";
            Script::$script["pb"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "Lancelot roles are in. Use below forecast to see the future!\n";
            Script::$script["ph"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "Ang Lancelot roles ay kasali. Tignan ang Ulat Panahon!\n";
            Script::$script["es"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "Lancelot roles are in. Use below forecast to see the future!\n";
            Script::$script["zho"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "兰斯洛特已全面进驻，下面预告将来局势！\n";
            Script::$script["gdh"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "今局遊戲有蘭斯洛特，請留意下面嘅提示！\n";
            Script::$script["och"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "蘭斯洛特現身在今場中，請使用下面的預測報告去猜測未來幾個任務的情況！\n";
            Script::$script["ar"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "أُدخل أدوار اللانسوت. إستخدم التوقعات التالية لمعرفة المستقبل !\n";
            Script::$script["fa"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "نقش های لنسلات وارد شدند. از پیشگویی زیر برای دیدن آینده استفاده کنید!\n";


            Script::$script["en"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "This turn Evil Lancelot is evil and Good Lancelot is good. As usual. " . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["id"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "Di giliran ini, Evil Lancelot tetap jahat dan Good Lancelot tetap baik, seperti biasa. " . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["it"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "Questo turno Il Lancillotto cattivo è cattivo e Lancillotto buono è buono.. Come il solito. " . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["cn"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "本回合".Script::$script["cn"][Script::EVIL_LANCELOT]
                ."仍是壞人，而".Script::$script["cn"][Script::GOOD_LANCELOT]."也仍是好人。" . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["pb"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "This turn Evil Lancelot is evil and Good Lancelot is good. As usual. " . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["ph"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "Sa turn na ito ang Evil Lancelot ay masama at ang Good Lancelot ay mabuti. Gaya ng dati. " . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["es"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "This turn Evil Lancelot is evil and Good Lancelot is good. As usual. " . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["zho"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "這次".Script::$script["zho"][Script::EVIL_LANCELOT]
                ."是奸人，而".Script::$script["zho"][Script::GOOD_LANCELOT]."是好人。" . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["gdh"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "呢輪".Script::$script["gdh"][Script::EVIL_LANCELOT]
                ."同".Script::$script["gdh"][Script::GOOD_LANCELOT]."做返自己。" . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["och"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "此回合".Script::$script["och"][Script::EVIL_LANCELOT]
                ."仍是反派，而".Script::$script["och"][Script::GOOD_LANCELOT]."是正派。" . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["ar"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "هذا الدور اللانسوت الشرير يبقى شرير و اللانسوت الطيب يبقى طيب. كما هو معتاد. " . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["fa"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "این دست لنسلات شیطانی شیطانیه و لنسلات خوب خوبه. همه چی آرومه من چقد خوشحالم! " . Constant::EMO_HEART_NOT_SWITCH;


            Script::$script["en"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "This turn Evil Lancelot becomes good and Good Lancelot becomes evil! " . Constant::EMO_HEART_SWITCH;
            Script::$script["id"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "Di giliran ini, Evil Lancelot menjadi baik dan Good Lancelot menjadi jahat. " . Constant::EMO_HEART_SWITCH;
            Script::$script["it"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "Questo turno Lancillotto cattivo diventa buono e quello cattivo diventa cattivo! " . Constant::EMO_HEART_SWITCH;
            Script::$script["cn"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "本回合".Script::$script["cn"][Script::EVIL_LANCELOT]. "已變好，而".Script::$script["cn"][Script::GOOD_LANCELOT]
                . "變壞！" . Constant::EMO_HEART_SWITCH;
            Script::$script["pb"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "This turn Evil Lancelot becomes good and Good Lancelot becomes evil! " . Constant::EMO_HEART_SWITCH;
            Script::$script["ph"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "Sa turn na ito ang Evil Lancelot at Good Lancelot ay nanlamig sa kanilang Team (Switch Heart). Mga Balimbing! " . Constant::EMO_HEART_SWITCH;
            Script::$script["es"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "This turn Evil Lancelot becomes good and Good Lancelot becomes evil! " . Constant::EMO_HEART_SWITCH;
            Script::$script["zho"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "這次".Script::$script["zho"][Script::EVIL_LANCELOT]."变好，而".Script::$script["zho"][Script::GOOD_LANCELOT]
                . "变坏！" . Constant::EMO_HEART_SWITCH;
            Script::$script["gdh"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "呢輪".Script::$script["gdh"][Script::EVIL_LANCELOT]."變咗好，而".Script::$script["gdh"][Script::GOOD_LANCELOT]
                . "變咗壞！" . Constant::EMO_HEART_SWITCH;
            Script::$script["och"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "此回合".Script::$script["och"][Script::EVIL_LANCELOT]. "已為正派，而".Script::$script["och"][Script::GOOD_LANCELOT]
                . "為反派！" . Constant::EMO_HEART_SWITCH;
            Script::$script["ar"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "هذا الدور اللانسوت الجيد يصبح شرير و اللانسوت الشرير يصبح طيب! " . Constant::EMO_HEART_SWITCH;
            Script::$script["fa"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "این دست لنسلات شیطانی، لنسلات خوب و لنسلات خوب، لنسلات شیطانی شد! " . Constant::EMO_HEART_SWITCH;



            Script::$script["en"][Script::PR_FAILDECREASE1]
                = "You use the ability of auditor. You have decreased the 1 FAIL for this quest.";
            Script::$script["id"][Script::PR_FAILDECREASE1]
                = "Kamu menggunakan kemampuan auditor. Kamu berhasil mengurangi 1 FAIL for this quest.";
            Script::$script["it"][Script::PR_FAILDECREASE1]
                = "Usi l'abilità del revisore. Hai diminuito di 1 FALLIMENTO questa missione.";
            Script::$script["cn"][Script::PR_FAILDECREASE1]
                = "由於你出面溝通，成功說服壞人。因此你令到本次任務的其中一個失敗無效化。";
            Script::$script["pb"][Script::PR_FAILDECREASE1]
                = "Você usou a habilidade do Auditor. Foi retirado 1 FRACASSO para esta Missão.";
            Script::$script["ph"][Script::PR_FAILDECREASE1]
                = "Ginamit mo na ang Power ng Auditor. Nabawasan mo ng 1 FAIL ang Quest.";
            Script::$script["es"][Script::PR_FAILDECREASE1]
                = "Usaste la habilidad del auditor. Has eliminado 1 FRACASO en esta gesta.";
            Script::$script["zho"][Script::PR_FAILDECREASE1]
                = "由於你出面沟通，成功说服坏人。因此你令到本次任务的其中一个失败无效化。";
            Script::$script["gdh"][Script::PR_FAILDECREASE1]
                = "你用咗外交官嘅權力，收咗壞人本護照，佢仲以為自己去到馬爾代夫做任務，太平山頂就有佢份！";
            Script::$script["och"][Script::PR_FAILDECREASE1]
                = "你使用了使節的權力，令此任務減少機會失敗 1 次。";
            Script::$script["ar"][Script::PR_FAILDECREASE1]
                = "إستخدامت قدرة المراجح. لقد قلصت خطأ واحد من هذه المهمة.";
            Script::$script["fa"][Script::PR_FAILDECREASE1]
                = "تو از شانست برای سخنوری استفاده کردی و یک باخت رو در این چالش خنثی کردی.";

            Script::$script["en"][Script::PR_AUDITORDECREASE1]
                = "Auditor has used the ability to decrease 1 FAIL for this quest.";
            Script::$script["id"][Script::PR_AUDITORDECREASE1]
                = "Auditor berhasil mengurangi 1 FAIL di quest ini.";
            Script::$script["it"][Script::PR_AUDITORDECREASE1]
                = "Il Revisore ha diminuito di 1 FALLIMENTO questa missione.";
            Script::$script["cn"][Script::PR_AUDITORDECREASE1]
                = "外交達人令到本次任務的其中一個失敗無效化。";
            Script::$script["pb"][Script::PR_AUDITORDECREASE1]
                = "Auditor usou a habilidade do Auditor. Foi retirado 1 FRACASSO para esta Missão.";
            Script::$script["ph"][Script::PR_AUDITORDECREASE1]
                = "OMG may Auditor sa Quest bawas ng 1 FAIL.";
            Script::$script["es"][Script::PR_AUDITORDECREASE1]
                = "El Auditor ha usado la habilidad de desechar 1 FRACASO para esta gesta.";
            Script::$script["zho"][Script::PR_AUDITORDECREASE1]
                = "外交官令到本次任务的其中一个失败无效化。";
            Script::$script["gdh"][Script::PR_AUDITORDECREASE1]
                = "外交官靜雞雞收埋咗你其中一個壞人本護照，搞到今次任務少咗一個壞人。";
            Script::$script["och"][Script::PR_AUDITORDECREASE1]
                = "使節令此任務減少機會失敗 1 次。";
            Script::$script["ar"][Script::PR_AUDITORDECREASE1]
                = "المراجح إستخدم قدرته و قلص خطأً واحد.";
            Script::$script["fa"][Script::PR_AUDITORDECREASE1]
                = "وکیل با استفاده از تواناییش یک باخت رو در این چالش از بین برد.";


            Script::$script["en"][Script::PR_YOUAREASSASSIN]
                = "You are Assassin. Your team are %s. At the end of the game, you can kill Merlin to win.";
            Script::$script["id"][Script::PR_YOUAREASSASSIN]
                = "Kamu adalah Assassin. Tim jahatmu adalah %s. Di akhir permainan, kamu bisa membunuh Merlin untuk menang.";
            Script::$script["it"][Script::PR_YOUAREASSASSIN]
                = "Sei l'Assassino. La tua squadra è composta da %s. Alla fine della partita, se il team buono riesce a completare 3 missioni, potrai uccidere Merlino per vincere.";
            Script::$script["cn"][Script::PR_YOUAREASSASSIN]
                = "你是刺客。你的隊友有%s，你需要並協助他們令到好人們任務失敗。一旦好人成功完成3個任務，你有1次機會去刺殺梅林。梅林一死，壞人就贏。";
            Script::$script["pb"][Script::PR_YOUAREASSASSIN]
                = "Você é a Assassina. Seu grupo do Mal é composto por %s. Ao final do jogo, você terá uma chance de matar Merlin para o Mal vencer o jogo.";
            Script::$script["ph"][Script::PR_YOUAREASSASSIN]
                = "Ikaw ang Assasin. Ang kakampi mo ay sina %s. Sa pagtatapos ng Laro, Paslangin mo ang Merlin para manalo (Wag na PM Mahahanap mo din ang Merlin!).";
            Script::$script["es"][Script::PR_YOUAREASSASSIN]
                = "Eres el Asesino. Tu equipo es %s. Al final del juego, puedes matar a Merlín para ganar.";
            Script::$script["zho"][Script::PR_YOUAREASSASSIN]
                = "你是<b>".Script::$script["zho"][Script::ASSASSIN]."</b>。你的队友有%s，你需要并协助他们令到好人们任务失败。一旦好人成功完成3个任务，你有 1 次机会去刺杀梅林。梅林一死，坏人就赢。";
            Script::$script["gdh"][Script::PR_YOUAREASSASSIN]
                = "你係<b>".Script::$script["gdh"][Script::ASSASSIN]."</b>。壞人陣營有 %s。如果好人成功執行三個任務，你要負責喺最後關頭隊死梅林。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /assassin 睇多啲。";
            Script::$script["och"][Script::PR_YOUAREASSASSIN]
                = "你是<b>".Script::$script["och"][Script::ASSASSIN]."</b>。你反派那夥人有 %s。如果反派敗走後，你還可以暗殺梅林，令整局反敗為勝。\n \n如有需要，輸入 /assassin 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREASSASSIN]
                = "أنت حشاش. فريقك هو %s. في نهاية اللعبة, يمكنك قتل مرلين و تفوز.";
            Script::$script["fa"][Script::PR_YOUAREASSASSIN]
                = "تو قاتل هستی. این افراد از ترس جونشون خودشون رو لو دادن که هم تیمی های تو هستن و حرفشونم درسته: %s. اگه اینهمه قتل سیرت نکرده، می تونی آخر بازی مرلین رو بکشی تا برنده بشید.";

            Script::$script["en"][Script::PR_YOUAREMORGANA]
                = "You are Morgana. Your evil team are %s. On Percival's eyes, you are Merlin.";
            Script::$script["id"][Script::PR_YOUAREMORGANA]
                = "Kamu adalah Morgana. Tim jahatmu adalah %s. Di mata Percival, kamu adalah Merlin.";
            Script::$script["it"][Script::PR_YOUAREMORGANA]
                = "Sei Morgana. Il tuo team è composto da %s. Negli occhi di Percival, tu sei Merlino.";
            Script::$script["cn"][Script::PR_YOUAREMORGANA]
                = "你是摩甘娜。你的隊友有 %s。你要專門放流料，給好人以為是梅林，好讓派西維爾更難找到真梅林。";
            Script::$script["pb"][Script::PR_YOUAREMORGANA]
                = "Você é Morgana. Seu grupo do Mal é composto por %s. Aos olhos de Percival, você pode ser Merlin.";
            Script::$script["ph"][Script::PR_YOUAREMORGANA]
                = "Ikaw ang Morgana. Ang kakampi mo ay sina %s. Sa paningin ng Percival ikaw ay Merlin, Utuin mo ang Percival para magduda siya sa True Merlin (Act safe Bes Wag mag PM!).";
            Script::$script["es"][Script::PR_YOUAREMORGANA]
                = "Eres Morgana. Tu equipo maligno es %s. A ojos de Perceval, eres Merlín.";
            Script::$script["zho"][Script::PR_YOUAREMORGANA]
                = "你是<b>".Script::$script["zho"][Script::MORGANA]."</b>。你的队友有 %s。你要专门放流料，给好人以为是梅林，好让派西维尔更难找到真梅林。";
            Script::$script["gdh"][Script::PR_YOUAREMORGANA]
                = "你係<b>".Script::$script["gdh"][Script::MORGANA]."</b>。壞人陣營有 %s。喺珀西瓦里嘅資訊入面，你可能係梅林。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /morgana 睇多啲。";
            Script::$script["och"][Script::PR_YOUAREMORGANA]
                = "你是<b>".Script::$script["och"][Script::MORGANA]."</b>。你反派那夥人有 %s。派西維爾會見到你是梅林。\n \n如有需要，輸入 /morgana 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREMORGANA]
                = "أنت مورقانا. فريقك الشرير هو %s. بأعين البريفسال, أنت مرلين.";
            Script::$script["fa"][Script::PR_YOUAREMORGANA]
                = "تو مورگانا هستی. هم تیمی های توی این افراد هستن: %s. تو چشمهای پرسیوال درباری ها تو مرلین هستی.";

            Script::$script["en"][Script::PR_YOUAREOBERON]
                = "You are Oberon. Your evil teams are %s. The other evil teams don't know that you are evil. You should not use Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUAREOBERON]
                = "Kamu adalah Oberon. Tim jahatmu adalah %s. Tim jahat yang lain tidak tahu bahwa kamu adalah jahat. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";
            Script::$script["it"][Script::PR_YOUAREOBERON]
                = "Sei Oberon. Il tuo team è composto da %s. Gli altri non sanno che tu sei cattivo. Nota: Non puoi usare i messaggi privati per comunicare.";
            Script::$script["cn"][Script::PR_YOUAREOBERON]
                = "你是奧北朗，最神秘的壞人，一開始能知道所有壞人，但其他壞人卻不會知道他的存在。你的隊友是：%s。梅林能知道你就是壞人卻不會知道你是奧比郎。此角色不能PM其他壞人玩家。";
            Script::$script["pb"][Script::PR_YOUAREOBERON]
                = "Você é Oberon. Seu grupo do Mal é composto por %s. Os outros membros do grupo não sabem que você também faz parte dele. Vocês não devem comunicar-se por mensagens privadas.";
            Script::$script["ph"][Script::PR_YOUAREOBERON]
                = "Ikaw ang Oberon. Ang kakampi mo ay sina %s. Hindi nila alam na Evil Team ka (Panira ng Laro ang PM wag Epal bes!).";
            Script::$script["es"][Script::PR_YOUAREOBERON]
                = "Eres Oberón. Tu equipo maligno es %s. El resto del equipo maligno no sabe que eres malvado. No debes usar un Mensaje Privado para comunicarte.";
            Script::$script["zho"][Script::PR_YOUAREOBERON]
                = "你是<b>".Script::$script["zho"][Script::OBERON]."</b>，最神秘的坏人，一开始能知道所有坏人，但其他坏人却不会知道他的存在。你的队友是：%s。梅林能知道你就是坏人却不会知道你是欧泊朗。此角色不能PM其他坏人玩家。";
            Script::$script["gdh"][Script::PR_YOUAREOBERON]
                = "你係<b>".Script::$script["gdh"][Script::OBERON]."</b>，壞人陣營有 %s，但其他壞人喺唔知你係壞。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /oberon 溫故知新。";
            Script::$script["och"][Script::PR_YOUAREOBERON]
                = "你是<b>".Script::$script["och"][Script::OBERON]."</b>，你反派那夥人是： %s，但你的反派同伴卻不認識你。\n注意：你是不可以用任何私訊去聯絡其他人。\n \n如有需要，輸入 /oberon 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREOBERON]
                = "أنت أوبرين. فريقك الشرير هو %s. الأشرار الباقين لا يعرفون أنك معهم. يجب عليك ألا تستخدم التواصل المنفرد.";
            Script::$script["fa"][Script::PR_YOUAREOBERON]
                = "تو اوبرن هستی. هم تیمی های تو اینا هستن: %s. یاغی های هم تیمی تو نمیدونن که توهم شیطانی هستی. توجه کن که نمی تونی از طریق پیام خصوصی کسی رو مطلع کنی.";


            Script::$script["en"][Script::PR_YOUAREBADNORMAL]
                = "You are the bad guy. Your evil team are %s.";
            Script::$script["id"][Script::PR_YOUAREBADNORMAL]
                = "Kamu adalah Pejahat kacangan. Tim jahatmu adalah %s.";
            Script::$script["it"][Script::PR_YOUAREBADNORMAL]
                = "Sei un cattivo. I tuoi compagni sono %s.";
            Script::$script["cn"][Script::PR_YOUAREBADNORMAL]
                = "你是小偷，最普通的壞人。你的隊友有%s。";
            Script::$script["pb"][Script::PR_YOUAREBADNORMAL]
                = "Você faz parte do grupo do Mal. Seu grupo é composto por %s.";
            Script::$script["ph"][Script::PR_YOUAREBADNORMAL]
                = "Ikaw ay Evil Team. Ang kakampi mo ay sina %s.";
            Script::$script["es"][Script::PR_YOUAREBADNORMAL]
                = "Eres malvado. Tu equipo maligno es %s.";
            Script::$script["zho"][Script::PR_YOUAREBADNORMAL]
                = "你是<b>".Script::$script["zho"][Script::THIEF]."</b>，最普通的坏人。你的队友有%s。";
            Script::$script["gdh"][Script::PR_YOUAREBADNORMAL]
                = "你係<b>".Script::$script["gdh"][Script::THIEF]."</b>。你知壞人嗰邊有 %s。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /thief 溫故知新。";
            Script::$script["och"][Script::PR_YOUAREBADNORMAL]
                = "你是<b>".Script::$script["och"][Script::THIEF]."</b>，而一夥人其他是 %s。\n \n如有需要，輸入 /thief 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREBADNORMAL]
                = "أنت شخص سيء. فريقك الشرير هو %s.";
            Script::$script["fa"][Script::PR_YOUAREBADNORMAL]
                = "تو یکی از یاغی ها هستی. هم تیمی ها تو اینا هستن: %s.";

            Script::$script["en"][Script::PR_YOUAREMORGAUSE]
                = "You are Morgause (Morgana with assassin ability). Your team are %s.  On Percival's eyes, you were Merlin. At the end of the game, you can kill Merlin to win.";
            Script::$script["id"][Script::PR_YOUAREMORGAUSE]
                = "Kamu adalah Morgause (Morgana dengan kemampuan assassin). Tim jahatmu adalah %s. Di mata Percival, kamu adalah Merlin. Di akhir permainan, kamu bisa membunuh Merlin untuk menang.";
            Script::$script["it"][Script::PR_YOUAREMORGAUSE]
                = "Sei Morgause (Morgana con l'abilità dell'assassino). I tuoi compagni sono %s. Agli occhi di Percival, tu sei Merlino. A fine partita, se i buoni riescono a completare 3 missioni, potrai uccidere Merlino per vincere.";
            Script::$script["cn"][Script::PR_YOUAREMORGAUSE]
                = "你是摩高斯。你的隊員有 %s。在派西維爾對你的認知當中，你會是梅林。因此你要欺騙派西維爾相信你是真梅林，並在遊戲結束時候刺殺梅林。";
            Script::$script["pb"][Script::PR_YOUAREMORGAUSE]
                = "Você é Morgause. Seu grupo do Mal é composto por %s.  Aos olhos de Percival você pode ser Merlin. Ao final do jogo, você terá uma chance de matar Merlin para o Mal vencer o jogo.";
            Script::$script["ph"][Script::PR_YOUAREMORGAUSE]
                = "Ikaw ang Morgause (Morgana na may Power ng isang assassin). Ang kakampi mo ay sina %s.  Sa paningin ng Percival ikaw ay Merlin, Utuin ang Percival para magduda siya sa True Merlin (Bawal PM Act Safe lang Bes!).";
            Script::$script["es"][Script::PR_YOUAREMORGAUSE]
                = "Eres Morgause (Morgana con habilidad de asesinar). Tu equipo es %s. A ojos de Perceval, eres Merlín. Al final del juego, puedes matar a Merlín para ganar.";
            Script::$script["zho"][Script::PR_YOUAREMORGAUSE]
                = "你是<b>".Script::$script["zho"][Script::MORGAUSE]."</b>。你的队员有 %s。在派西维尔对你的认知当中，你会是梅林。因此你要欺骗派西维尔相信你是真梅林，并在遊戏结束时候刺杀梅林。";
            Script::$script["gdh"][Script::PR_YOUAREMORGAUSE]
                = "你係<b>".Script::$script["gdh"][Script::MORGAUSE]."</b>。壞人陣營有：%s。珀西瓦里見到你可能係梅林。如果好人成功執行三個任務，你要負責喺最後關頭隊死梅林。\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /morgause 溫故知新。";
            Script::$script["och"][Script::PR_YOUAREMORGAUSE]
                = "你是<b>".Script::$script["och"][Script::MORGAUSE]."</b>。你反派那夥人有 %s。在派西維爾眼中，你是梅林。如果反派敗走後，你還可以暗殺梅林，令整局反敗為勝。\n \n如有需要，輸入 /morgause 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREMORGAUSE]
                = "أنت مورقوس ( مورقانا بقدرات الحشاش). فريقك هم %s.  بأعين البريفسال أنت مرلين. في نهاية اللعبة, يمكنك قتل مرلين و تفوز.";
            Script::$script["fa"][Script::PR_YOUAREMORGAUSE]
                = "تو مورگاس هستی ( ترکیبی از مورگانا و قاتل). هم تیمی های تو اینا هستن: %s.  تو چشمهای پرسیوال درباری ها تو مرلین هستی. تو می تونی در آخر بازی مرلین رو بکشی و پیروز بشی.";


            Script::$script["en"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "You are Knight, a good person whose job is to succeed the mission. Between %s and %s, there is at least 1 person is bad role. (Remember, knight cannot detect Mordred)";
            Script::$script["id"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "Kamu adalah seorang Knight (Ksatria) yang bertugas untuk mensukseskan misi. Di antara %s dan %s, terdapat setidaknya 1 orang jahat (Ingat, knight tidak dapat mendeteksi Mordred)";
            Script::$script["it"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "Sei un Cavaliere, una buona persona il cui scopo è completare le missioni. Tra %s e %s, Sembra ci sia almeno un cattivo. (Ricorda, i cavalieri non possono rilevare Mordred)";
            Script::$script["cn"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "你是英勇善戰的騎士, 你要負責幫好人完成任務。在%s和%s之間,至少有1人會是壞人。切記：你是無法發現你左右的人真實身份有可能是莫德雷德。";
            Script::$script["pb"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "Você é um Cavaleiro, alguém do Bem cujo objetivo é o SUCESSO da Missão. Entre %s e %s, há, no mínimo, 1 pessoa do Mal. (Lembre-se de que o Cavaleiro não consegue perceber Mordred)";
            Script::$script["ph"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "Ikaw ang Kawal, mabuting tao na ang misyon ay manalo. Ang kapitbahay mo ay si %s at %s at least 1 sa kanila ay masama. (Tandaan, hindi mo nakikita ang Mordred!)";
            Script::$script["es"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "Eres un caballero, una buena persona cuyo trabajo es completar las misiones. Entre %s y %s, al menos 1 de ellos es malvado. (Recuerda, un caballero no puede detectar a Mordred)";
            Script::$script["zho"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "你是英勇善战的<b>".Script::$script["zho"][Script::KNIGHT]."</b>，你要负责帮好人完成任务。在%s和%s之间,至少有1人会是坏人。切记：你是无法发现你左右的人真实身份有可能是莫德雷德或忍者。";
            Script::$script["gdh"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "你係<b>".Script::$script["gdh"][Script::KNIGHT]."</b>，你知道 %s 同 %s之間，起碼有 1 個係壞人。（不過，你喺會當咗莫德雷德或忍者係好人！）\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /knight 溫故知新。";
            Script::$script["och"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "你是<b>".Script::$script["och"][Script::KNIGHT]."</b>，屬於正派更會令任務成功。比較 %s 與 %s，至少有 1 位屬於反派。（注意，你卻不曉得分辨莫德雷德或忍者屬正派與否！）\n \n如有需要，輸入 /knight 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "أنت الفارس, شخص طيب هدفه بأن يفوز بالمهام. بين %s و %s, يوجد شخص واحد على الأقل يلعب بدور شرير. (تذكر, الفارس لا يمكنه رؤية موردريد)";
            Script::$script["fa"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "تو شوالیه هستی. بين %s و %s, حداقل یکیشون یاغیه. وظیفه ی تو پیروزی در مأموریته. (توجه کن که شوالیه نمی تونه موردرد رو تشخیص بده.)";


            Script::$script["en"][Script::PR_YOUAREKNIGHTNOBAD]
                = "You are Knight, a good person whose job it to succeed the quests. Between %s and %s, it seems that there is no bad guys. (Remember, knight cannot detect Mordred or Ninja)";
            Script::$script["id"][Script::PR_YOUAREKNIGHTNOBAD]
                = "Kamu adalah seorang Knight (Ksatria) yang bertugas menyukseskan misi. Di antara %s dan %s, sepertinya tidak terdapat orang jahat. (Ingat, knight tidak dapat mendeteksi Mordred)";
            Script::$script["it"][Script::PR_YOUAREKNIGHTNOBAD]
                = "Sei un Cavaliere, una buona persona il cui scopo è completare le missioni. Tra %s e %s, sembra non ci siano cattivi. (Ricorda, i cavalieri non possono rilevare Mordred)";
            Script::$script["cn"][Script::PR_YOUAREKNIGHTNOBAD]
                = "你是英勇善戰的騎士, 你要負責幫好人完成任務。在%s和%s之間, 你知道他們似乎都是好人。切記：你是無法發現你左右的人真實身份有可能是莫德雷德。";
            Script::$script["pb"][Script::PR_YOUAREKNIGHTNOBAD]
                = "Você é um Cavaleiro, alguém do Bem cujo objetivo é o SUCESSO da Missão. Entre %s e %s, não parece haver ninguém do Mal. (Lembre-se de que o Cavaleiro não consegue perceber Mordred)";
            Script::$script["ph"][Script::PR_YOUAREKNIGHTNOBAD]
                = "Ikaw ang Kawal, mabuting tao na ang misyon ay manalo. Ang kapitbahay mo ay si %s at %s, mukha namang walang masama sa kanila. (Tandaan, hindi mo nakikita ang Mordred!)";
            Script::$script["es"][Script::PR_YOUAREKNIGHTNOBAD]
                = "Eres un caballero, una buena persona cuyo trabajo es completar las misiones. Entre %s y %s, parece que ninguno es malvado. (Recuerda, un caballero no puede detectar a Mordred)";
            Script::$script["zho"][Script::PR_YOUAREKNIGHTNOBAD]
                = "你是英勇善战的<b>".Script::$script["zho"][Script::KNIGHT]."</b>，你要负责帮好人完成任务。在%s和%s之间，你知道他们似乎都是好人。切记：你是无法发现你左右的人真实身份有可能是莫德雷德或忍者。";
            Script::$script["gdh"][Script::PR_YOUAREKNIGHTNOBAD]
                = "你係<b>".Script::$script["gdh"][Script::KNIGHT]."</b>，你係一個好人。你知道 %s 同 %s，應該都係好人。（不過，你喺會當咗莫德雷德或忍者喺好人！）\n<b>記住：唔可以PM其他人。</b>\n \n可以打 /knight 睇到多啲解説。";
            Script::$script["och"][Script::PR_YOUAREKNIGHTNOBAD]
                = "你是<b>".Script::$script["och"][Script::KNIGHT]."</b>，屬於正派更會令任務成功。比較 %s 與 %s，無人屬於反派。（注意，你卻不曉得分辨莫德雷德或者忍者屬正派與否！）\n \n如有需要，輸入 /knight 會查看更多描述。";
            Script::$script["ar"][Script::PR_YOUAREKNIGHTNOBAD]
                = "أنت الفارس, شخص طيب هدفه بأن يفوز في المهام. بين %s و %s, يبدو أنه لا يوجد أي أحد منهم يلعب دور شرير. (تذكر, الفارس لا يمكنه رؤية موردريد و نينجا.)";
            Script::$script["fa"][Script::PR_YOUAREKNIGHTNOBAD]
                = "تو شوالیه هستی. بين %s و %s, یاغی وجود نداره. وظیفه ی تو پیروزی در چالشه. (توجه کن که شوالیه نمی تونه موردرد رو تشخیص بده.)";

            Script::$script["en"][Script::PR_AGENTSECRETCODE]
                = "The secret codes have been decrypted: %s. Use this code to find the other agents! Note: you cannot use Private Message to communicate.";
            Script::$script["id"][Script::PR_AGENTSECRETCODE]
                = "Kode rahasia sudah terpecahkan: %s. gunakan kode ini untuk menemukan agent lainnya! Catatan: kamu tidak boleh menggunakan PM untuk berkomunikasi.";
            Script::$script["it"][Script::PR_AGENTSECRETCODE]
                = "I codici segreti sono stati decrittografati: %s. Usa questo codice per trovare gli altri agenti! Nota: non puoi usare i messaggi privati per comunicare.";
            Script::$script["cn"][Script::PR_AGENTSECRETCODE]
                = "暗號已經成功被解開了:%s。現在你可以使用暗號找出你的同伴了，切記不可以用PM方式找出你的同伴。";
            Script::$script["pb"][Script::PR_AGENTSECRETCODE]
                = "Os códigos secretos foram decodificados: %s. Use-o para encontar os outros agentes! Nota: Vocês não devem se comunicar por mensagens privadas.";
            Script::$script["ph"][Script::PR_AGENTSECRETCODE]
                = "Ang Secret Code ay naDecrypt na: %s. Gamitin ang Code para mahanap ang co-Agent! Note: Wag pahalata sa pag gamit ng Code (Bawal mag PM!).";
            Script::$script["es"][Script::PR_AGENTSECRETCODE]
                = "Los códigos secretos fueron decodificados: %s. Usa estos códigos para encontrar a otros agentes! Nota: no puedes usar un Mensaje Privado para comunicarte.";
            Script::$script["zho"][Script::PR_AGENTSECRETCODE]
                = "暗号已经成功被解开了:%s。现在你可以使用暗号找出你的同伴了，切记不可以用PM方式找出你的同伴。";
            Script::$script["gdh"][Script::PR_AGENTSECRETCODE]
                = "暗號已破解: %s。用呢兩個喑號去搵出你嘅同伴啦！\n<b>記住：唔可以PM你既同伴。</b>";
            Script::$script["och"][Script::PR_AGENTSECRETCODE]
                = "暗號已遭破譯: %s。請運用此倆喑號找出其他密探！\n注意：你是不可以用任何私訊去聯絡其他人。";
            Script::$script["ar"][Script::PR_AGENTSECRETCODE]
                = "تم فك تشفير الرموز السرية : %s. إستخدام هذا الكود للبحث عن الوكيل الآخر. تذكر : لا يمكنك إستخدام التواصل المنفرد.";
            Script::$script["fa"][Script::PR_AGENTSECRETCODE]
                = "کد های دریافت شده این ها هستن : %s. از این کد ها برای پیدا کردن بقیه ی مأمورها استفاده کن (من که نمیدونم چطوری!). توجه کن که پیام خصوصی ممنوعه!";



            Script::$script["en"][Script::PU_APPROVE]
                = "Approve ".Constant::EMO_YES_B;
            Script::$script["id"][Script::PU_APPROVE]
                = "Setuju ".Constant::EMO_YES_B;
            Script::$script["it"][Script::PU_APPROVE]
                = "Approva ".Constant::EMO_YES_B;
            Script::$script["cn"][Script::PU_APPROVE]
                = "贊成 ".Constant::EMO_YES_B;
            Script::$script["pb"][Script::PU_APPROVE]
                = "Aprovar ".Constant::EMO_YES_B;
            Script::$script["ph"][Script::PU_APPROVE]
                = "Approve ".Constant::EMO_YES_B;
            Script::$script["es"][Script::PU_APPROVE]
                = "Aprobar ".Constant::EMO_YES_B;
            Script::$script["zho"][Script::PU_APPROVE]
                = "赞成 ".Constant::EMO_YES_B;
            Script::$script["gdh"][Script::PU_APPROVE]
                = "贊成 ".Constant::EMO_YES_B;
            Script::$script["och"][Script::PU_APPROVE]
                = "贊成 ".Constant::EMO_YES_B;
            Script::$script["ar"][Script::PU_APPROVE]
                = "موافق ".Constant::EMO_YES_B;
            Script::$script["fa"][Script::PU_APPROVE]
                = "موافقت ".Constant::EMO_YES_B;

            Script::$script["en"][Script::PU_REJECT]
                = "Reject ".Constant::EMO_NO_B;
            Script::$script["id"][Script::PU_REJECT]
                = "Menolak ".Constant::EMO_NO_B;
            Script::$script["it"][Script::PU_REJECT]
                = "Rifiuta ".Constant::EMO_NO_B;
            Script::$script["cn"][Script::PU_REJECT]
                = "反對 ".Constant::EMO_NO_B;
            Script::$script["pb"][Script::PU_REJECT]
                = "Rejeitar ".Constant::EMO_NO_B;
            Script::$script["ph"][Script::PU_REJECT]
                = "Reject ".Constant::EMO_NO_B;
            Script::$script["es"][Script::PU_REJECT]
                = "Rechazar ".Constant::EMO_NO_B;
            Script::$script["zho"][Script::PU_REJECT]
                = "反对 ".Constant::EMO_NO_B;
            Script::$script["gdh"][Script::PU_REJECT]
                = "反對 ".Constant::EMO_NO_B;
            Script::$script["och"][Script::PU_REJECT]
                = "反對 ".Constant::EMO_NO_B;
            Script::$script["ar"][Script::PU_REJECT]
                = "أرفض ".Constant::EMO_NO_B;
            Script::$script["fa"][Script::PU_REJECT]
                = "مخالفت ".Constant::EMO_NO_B;

            Script::$script["en"][Script::PU_APPREJ_BOARD_REVEAL]
                = "Approve (<b>%d</b>) : %s\n"
                ."Reject (<b>%d</b>) : %s";
            Script::$script["id"][Script::PU_APPREJ_BOARD_REVEAL]
                = "Setuju (<b>%d</b>) : %s\n"
                ."Menolak (<b>%d</b>) : %s";
            Script::$script["it"][Script::PU_APPREJ_BOARD_REVEAL]
                = "Approvano (<b>%d</b>) : %s\n"
                ."Rifiutano (<b>%d</b>) : %s";
            Script::$script["cn"][Script::PU_APPREJ_BOARD_REVEAL]
                = "贊成 (<b>%d</b>) : %s\n"
                ."反對 (<b>%d</b>) : %s";
            Script::$script["pb"][Script::PU_APPREJ_BOARD_REVEAL]
                = "Aprovaram (<b>%d</b>): %s\n"
                ."Rejeitaram (<b>%d</b>): %s";
            Script::$script["ph"][Script::PU_APPREJ_BOARD_REVEAL]
                = "Approve (<b>%d</b>) : %s\n"
                ."Reject (<b>%d</b>) : %s";
            Script::$script["es"][Script::PU_APPREJ_BOARD_REVEAL]
                = "Aprueban (<b>%d</b>) : %s\n"
                ."Rechazan (<b>%d</b>) : %s";
            Script::$script["zho"][Script::PU_APPREJ_BOARD_REVEAL]
                = "赞成（<b>%d</b>）: %s\n"
                ."反对（<b>%d</b>）: %s";
            Script::$script["gdh"][Script::PU_APPREJ_BOARD_REVEAL]
                = "贊成（<b>%d</b>）： %s\n"
                ."反對（<b>%d</b>）： %s";
            Script::$script["och"][Script::PU_APPREJ_BOARD_REVEAL]
                = "贊成（<b>%d</b>）： %s\n"
                ."反對（<b>%d</b>）： %s";
            Script::$script["ar"][Script::PU_APPREJ_BOARD_REVEAL]
                = "قبول (<b>%d</b>) : %s\n"
                ."رفض (<b>%d</b>) : %s";
            Script::$script["fa"][Script::PU_APPREJ_BOARD_REVEAL]
                = "قبول (<b>%d</b>) : %s\n"
                ."رد (<b>%d</b>) : %s";

            Script::$script["en"][Script::PU_APPREJ_BOARD_HIDE]
                = "Approve/Reject?? (<b>%d</b>) : %s";
            Script::$script["id"][Script::PU_APPREJ_BOARD_HIDE]
                = "Setuju/Menolak?? (<b>%d</b>) : %s";
            Script::$script["it"][Script::PU_APPREJ_BOARD_HIDE]
                = "Approvano/Rifiutano?? (<b>%d</b>) : %s";
            Script::$script["cn"][Script::PU_APPREJ_BOARD_HIDE]
                = "贊成/反對?? (<b>%d</b>) : %s";
            Script::$script["pb"][Script::PU_APPREJ_BOARD_HIDE]
                = "Aprovar/Rejeitar? (<b>%d</b>): %s";
            Script::$script["ph"][Script::PU_APPREJ_BOARD_HIDE]
                = "Approve/Reject?? (<b>%d</b>) : %s";
            Script::$script["es"][Script::PU_APPREJ_BOARD_HIDE]
                = "¿¿Aprobar/Rechazar?? (<b>%d</b>) : %s";
            Script::$script["zho"][Script::PU_APPREJ_BOARD_HIDE]
                = "赞成/反对？（<b>%d</b>）: %s";
            Script::$script["gdh"][Script::PU_APPREJ_BOARD_HIDE]
                = "贊成／反對？（<b>%d</b>）： %s";
            Script::$script["och"][Script::PU_APPREJ_BOARD_HIDE]
                = "贊成／反對？（<b>%d</b>）： %s";
            Script::$script["ar"][Script::PU_APPREJ_BOARD_HIDE]
                = "مقبول أو مرفوض؟؟ (<b>%d</b>) : %s";
            Script::$script["fa"][Script::PU_APPREJ_BOARD_HIDE]
                = "قبول کردن یا رد کردن؟؟ (<b>%d</b>) : %s";


            Script::$script["en"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." : %s\n";
            Script::$script["id"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." : %s\n";
            Script::$script["it"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." : %s\n";
            Script::$script["cn"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." : %s\n";
            Script::$script["pb"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." : %s\n";
            Script::$script["ph"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." : %s\n";
            Script::$script["es"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." : %s\n";
            Script::$script["zho"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." ： %s\n";
            Script::$script["gdh"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." ： %s\n";
            Script::$script["och"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." ： %s\n";
            Script::$script["ar"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." : %s\n";
            Script::$script["fa"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." : %s\n";


            Script::$script["en"][Script::PU_KINGNEEDASSIGN]
                = "%s as king will assign <b>%d persons</b> to execute the quest. The king is given time <b>%d seconds</b>";
            Script::$script["id"][Script::PU_KINGNEEDASSIGN]
                = "%s sebagai raja akan menunjuk <b>%d orang</b> untuk menyelesaikan quest. Raja diberikan waktu sebanyak <b>%d detik</b>";
            Script::$script["it"][Script::PU_KINGNEEDASSIGN]
                = "%s, in qualità di Re, assegnerà <b>%d persone</b> per completare la missione. Il Re ha <b>%d secondi</b> per scegliere";
            Script::$script["cn"][Script::PU_KINGNEEDASSIGN]
                = "國王%s會委任<b>%d人</b>去執行任務。國王有<b>%d秒</b>的時間去做出選擇。";
            Script::$script["pb"][Script::PU_KINGNEEDASSIGN]
                = "%s irá nomear <b>%d escolhidos</b> para realizar a Missão. Tempo de <b>%d segundos</b> para isso.";
            Script::$script["ph"][Script::PU_KINGNEEDASSIGN]
                = "Si %s bilang hari ay nagtalaga ng <b>%d persons</b> para isagawa ang Quest. Ang hari ay nagbigay ng <b>%d segundo</b>";
            Script::$script["es"][Script::PU_KINGNEEDASSIGN]
                = "El rey %s asignará <b>%d personas</b> para ejecutar la gesta. El rey tiene <b>%d segundos</b>";
            Script::$script["zho"][Script::PU_KINGNEEDASSIGN]
                = "国王已委任 %s 挑选 <b>%d 人</b>去执行任务。現有 <b>%d 秒</b>的时间去考虑。";
            Script::$script["gdh"][Script::PU_KINGNEEDASSIGN]
                = "國王 %s 會揀 <b>%d 個人</b>去做呢次任務，而家有 <b>%d 秒</b>諗下人選。";
            Script::$script["och"][Script::PU_KINGNEEDASSIGN]
                = "亞瑟王已經委任 %s 選擇 <b>%d 人</b>協助執行此任務。現有 <b>%d 秒</b>作出考慮。";
            Script::$script["ar"][Script::PU_KINGNEEDASSIGN]
                = "%s كـ ملك رشّح <b>%d أشخاص</b> للقيام بالمهمة. سيعطى للملك فترة <b>%d ثانية </b>";
            Script::$script["fa"][Script::PU_KINGNEEDASSIGN]
                = "%s به عنوان پادشاه <b>%d نفر</b> را برای اجرای چالش انتخاب کرد. مهلت داده شده از طرف پادشاه <b>%d ثانيه </b>";


            Script::$script["en"][Script::PR_SENDONEPLAYER]
                = "Choose person no.%d (from %d persons) to execute the quest";
            Script::$script["id"][Script::PR_SENDONEPLAYER]
                = "Pilih orang ke-%d (dari %d orang) untuk menyelesaikan quest";
            Script::$script["it"][Script::PR_SENDONEPLAYER]
                = "Scegli %d persone(da %d giocatori) per eseguire la missione";
            Script::$script["cn"][Script::PR_SENDONEPLAYER]
                = "選擇第%d個人(從第 %d個人)去執行任務。";
            Script::$script["pb"][Script::PR_SENDONEPLAYER]
                = "Nomeie o escolhido %d (de %d) para realizar a Missão.";
            Script::$script["ph"][Script::PR_SENDONEPLAYER]
                = "Pumili ng Tao no.%d (sa %d persons) upang isagawa ang Quest";
            Script::$script["es"][Script::PR_SENDONEPLAYER]
                = "Selecciona a la persona no.%d (de %d personas) para ejecutar la gesta";
            Script::$script["zho"][Script::PR_SENDONEPLAYER]
                = "选择第 %d 个人（最多 %d 个人）去执行任务。";
            Script::$script["gdh"][Script::PR_SENDONEPLAYER]
                = "揀第 %d 個人（總數 %d 個）去做呢次任務。";
            Script::$script["och"][Script::PR_SENDONEPLAYER]
                = "請揀選第 %d 位幫手（總共 %d 人）去執行此任務。";
            Script::$script["ar"][Script::PR_SENDONEPLAYER]
                = "إختار الشخص رقم %d (من بين %d أشخاص) للقيام بالمهمة.";
            Script::$script["fa"][Script::PR_SENDONEPLAYER]
                = "انتخاب کن شخص شماره ی %d (از بين %d شخص) را برای اجرای چالش.";


            Script::$script["en"][Script::PR_KILLMERLIN]
                = "You evil team has lost the missions. But, you still have the last weapon. Kill Merlin!";
            Script::$script["id"][Script::PR_KILLMERLIN]
                = "Tim jahatmu sudah kalah dalam misi. Namun, kamu masih punya senjata terakhir. Bunuh Merlin!";
            Script::$script["it"][Script::PR_KILLMERLIN]
                = "Il team buono ha completato 3 missioni. Però, avete ancora il vostro ultimo asso nella manica. Assassino, Uccidi Merlino!";
            Script::$script["cn"][Script::PR_KILLMERLIN]
                = "壞人雖然無法成功阻止任務的執行，但你們依然有最後的必殺技在手，是時候派出你們的高手殺死梅林吧！";
            Script::$script["pb"][Script::PR_KILLMERLIN]
                = "O Bem conseguiu completar 3 Missões. Mas o Mal ainda tem sua última chance de vencer: assassinar Merlin!";
            Script::$script["ph"][Script::PR_KILLMERLIN]
                = "Kayong mga Evil Team ay hindi nagtagumpay sa mga misyon. Ngunit, mayroon pa kayong huling  Alas(Death Note). Paslangin ang Merlin!";
            Script::$script["es"][Script::PR_KILLMERLIN]
                = "Tu equipo maligno ha perdido sus msiones. Pero, aún te queda un as en la manga. ¡Matar a Merlín!";
            Script::$script["zho"][Script::PR_KILLMERLIN]
                = "坏人虽然无法成功阻止任务的执行，但你们依然有最後的必杀技在手，是时候派出你们的高手杀死梅林吧！";
            Script::$script["gdh"][Script::PR_KILLMERLIN]
                = "壞人冇辦法阻止好人成功執行任務，但仲可以殺死梅林，反敗為勝！";
            Script::$script["och"][Script::PR_KILLMERLIN]
                = "反派敗得一面倒，但是還有最後絕地反擊能力反敗為勝，殺死梅林就成！";
            Script::$script["ar"][Script::PR_KILLMERLIN]
                = "فريقك الشرير قد خسر بالمهام, و لكن لديك السلاح الأخير...قتل مرلين!";
            Script::$script["fa"][Script::PR_KILLMERLIN]
                = "یاغی های نادون شما باختید, اما نه صبر کنید شما سلاح آخرتون رو دارید...قتل مرلين!";


            Script::$script["en"][Script::PR_LADYCHOOSE]
                = "Choose one person you want to see its true identity.";
            Script::$script["id"][Script::PR_LADYCHOOSE]
                = "Pilih orang untuk diterawang.";
            Script::$script["it"][Script::PR_LADYCHOOSE]
                = "Scegli una persona da scrutare per vedere la sua vera identità";
            Script::$script["cn"][Script::PR_LADYCHOOSE]
                = "湖中之女，選擇一個你想知道身份的人吧！";
            Script::$script["pb"][Script::PR_LADYCHOOSE]
                = "Escolha alguém para ver sua verdadeira identidade.";
            Script::$script["ph"][Script::PR_LADYCHOOSE]
                = "Pumili ng isang tao na gusto mong makita ang tunay na pagkatao.";
            Script::$script["es"][Script::PR_LADYCHOOSE]
                = "Selecciona una persona a la que quieras ver su verdadera identidad.";
            Script::$script["zho"][Script::PR_LADYCHOOSE]
                = "湖中仙女，希望你话我知此人的身份吧！";
            Script::$script["gdh"][Script::PR_LADYCHOOSE]
                = "你擁有湖女嘅能力，揀一位你想知佢係好定壞嘅人啦。";
            Script::$script["och"][Script::PR_LADYCHOOSE]
                = "請選擇一位你對他身份感到好奇。";
            Script::$script["ar"][Script::PR_LADYCHOOSE]
                = "إختار شخص واحد لترى شخصيته الحقيقية.";
            Script::$script["fa"][Script::PR_LADYCHOOSE]
                = "کسی که میخوای نقش واقعیش رو بفهمی انتخاب کن.";


            Script::$script["en"][Script::PU_APPRREJINST]
                = "%s has assigned %s to do the quest.\n\nYou have <b>%d seconds</b> to choose. Type /showvote to show the voting buttons.";
            Script::$script["id"][Script::PU_APPRREJINST]
                = "%s telah menunjuk %s untuk menyelesaikan quest.\n\nDiberikan waktu <b>%d detik</b> untuk memilih. Ketik /showvote untuk melihat tombol vote.";
            Script::$script["it"][Script::PU_APPRREJINST]
                = "%s ha assegnato %s per la missione.\n\nAvete <b>%d secondi</b> per scegliere. Scrivete /showvote per mostrare i pulsanti di voto.";
            Script::$script["cn"][Script::PU_APPRREJINST]
                = "國王%s委任%s去執行任務。\n\n你們有<b>%d秒</b>去表決這次的委任是否成立。打 /showvote 可以見到投票按鈕。";
            Script::$script["pb"][Script::PU_APPRREJINST]
                = "%s escolheu %s para a Missão.\n\nRestam <b>%d segundos</b> para votar aprovar ou rejeitar. Envie /showvote para mostrar as opções de votação.";
            Script::$script["ph"][Script::PU_APPRREJINST]
                = "Si %s ay itinalaga sina %s para isagawa ang Quest.\n\nMerong kang <b>%d segundo </b> para pumili. I-type ang /showvote para makita ang voting buttons.";
            Script::$script["es"][Script::PU_APPRREJINST]
                = "%s ha asignado a %s para hacer la gesta.\n\nTienes <b>%d segundos </b> para decidir. Escribe el comando /showvote para ver los botones de votación.";
            Script::$script["zho"][Script::PU_APPRREJINST]
                = "%s 已挑选 %s 去执行任务。\n\n你们有 <b>%d 秒</b>去表决这次的委任，可以输入 /showvote 见到投票按钮。"; // 如果你赞成可以输入 /approve，否则就输入 /reject。
            Script::$script["gdh"][Script::PU_APPRREJINST]
                = "%s 揀咗 %s 做呢次任務。\n\n你哋而家有 <b>%d 秒</b>投票表决。如果唔見個投票掣，打 /showvote 就可以搵得返。";
            Script::$script["och"][Script::PU_APPRREJINST]
                = "%s 選擇了 %s 執行此任務。\n\n現在有 <b>%d 秒</b>讓你們表决此次的委任應否通過；當中可以輸入 /showvote 再次見到投票按鈕。";
            Script::$script["ar"][Script::PU_APPRREJINST]
                = "%s قد أختير %s للقيام بالمهمة. \n\n لديك <b>%d ثانية </b> للإختيار. أكتب /showvote لرؤية أزرار التصويت.";
            Script::$script["fa"][Script::PU_APPRREJINST]
                = "%s برای انجام چالش %s را مأمور کرده. \n\n شما <b>%d ثانيه </b> برای انتخاب در اختیار دارید. /showvote را برای رأی گیری بنویسید.";


            Script::$script["en"][Script::PU_SHOWVOTE]
                = "Click the above reply message to vote.";
            Script::$script["id"][Script::PU_SHOWVOTE]
                = "Klik pesan reply di atas untuk vote.";
            Script::$script["it"][Script::PU_SHOWVOTE]
                = "Fare clic sul messaggio quotato per votare.";
            Script::$script["cn"][Script::PU_SHOWVOTE]
                = "請按上面的回复信息來投票";
            Script::$script["pb"][Script::PU_SHOWVOTE]
                = "Vá para a mensagem respondida acima para votar.";
            Script::$script["ph"][Script::PU_SHOWVOTE]
                = "I-click ang mensahe sa itaas para makaboto.";
            Script::$script["es"][Script::PU_SHOWVOTE]
                = "Haga click en el mensaje anterior para votar.";
            Script::$script["zho"][Script::PU_SHOWVOTE]
                = "请按上面的回复信息来表決";
            Script::$script["gdh"][Script::PU_SHOWVOTE]
                = "㩒上面嘅留言嚟投票。";
            Script::$script["och"][Script::PU_SHOWVOTE]
                = "請按上面的信息來投票。";
            Script::$script["ar"][Script::PU_SHOWVOTE]
                = "إضغط على الرد المرفق للتصويت.";
            Script::$script["fa"][Script::PU_SHOWVOTE]
                = "برای رأی دادن روی این پیام ریپلای شده کلیک کنید.";

            Script::$script["en"][Script::PU_REJECT5TIMES]
                = "Quest was rejected 5 times, so it's failed.";
            Script::$script["id"][Script::PU_REJECT5TIMES]
                = "Quest sudah di-reject 5 kali, sehingga dianggap gagal.\n";
            Script::$script["it"][Script::PU_REJECT5TIMES]
                = "La missione è stata rifiutata 5 volte, perciò è FALLITA.";
            Script::$script["cn"][Script::PU_REJECT5TIMES]
                = "任務的執行人選擇已經被反對5次,所以此次任務唯有以失敗告終。";
            Script::$script["pb"][Script::PU_REJECT5TIMES]
                = "A Missão foi rejeitada 5 vezes. Então ela FRACASSOU.";
            Script::$script["ph"][Script::PU_REJECT5TIMES]
                = "Ang Quest ay naReject ng 5 beses, kaya ito ay Failed.";
            Script::$script["es"][Script::PU_REJECT5TIMES]
                = "La gesta fue rechazada 5 veces, por lo que ha fracasado.";
            Script::$script["zho"][Script::PU_REJECT5TIMES]
                = "任务已经被反对 5 次，所以任务正式以失败告终。";
            Script::$script["gdh"][Script::PU_REJECT5TIMES]
                = "呢個任務已經畀班傻仔反對咗 5 次，係 5 次阿，我依家宣佈，任務失敗。";
            Script::$script["och"][Script::PU_REJECT5TIMES]
                = "任務已慘遭否決 5 次，所以此次任務唯有當作失敗。";
            Script::$script["ar"][Script::PU_REJECT5TIMES]
                = "المهمة رفضت 5 مرات, إذا حُبطت.";
            Script::$script["fa"][Script::PU_REJECT5TIMES]
                = "چالش برای 5 بار رد شد! خب شما باختید.";

            Script::$script["en"][Script::PU_FAILWITHXFAIL]
                = "In quest, we found <b>%d FAIL</b>! Quest is failed.";
            Script::$script["id"][Script::PU_FAILWITHXFAIL]
                = "Dalam menyelesaikan quest ditemukan <b>%d FAIL</b>! Quest dianggap gagal.";
            Script::$script["it"][Script::PU_FAILWITHXFAIL]
                = "Nella missione, sono stati trovati <b>%d FAIL</b>! La Missione è fallita.";
            Script::$script["cn"][Script::PU_FAILWITHXFAIL]
                = "在這次任務中, 發現到有<b>%d 次失敗</b>!所以這次任務失敗。";
            Script::$script["pb"][Script::PU_FAILWITHXFAIL]
                = "A Missão teve <b>%d FRACASSO(S)</b>! A Missão FRACASSOU.";
            Script::$script["ph"][Script::PU_FAILWITHXFAIL]
                = "Sa Quest, may <b>%d FAIL</b>! na Hunyango tayo.";
            Script::$script["es"][Script::PU_FAILWITHXFAIL]
                = "En la gesta, ¡se ha encontrado <b>%d FRACASO</b>! La gesta ha fallado.";
            Script::$script["zho"][Script::PU_FAILWITHXFAIL]
                = "在这次任务中，发现到有 <b>%d 次失败</b>！所以这次任务失败。";
            Script::$script["gdh"][Script::PU_FAILWITHXFAIL]
                = "喺行動搵到有 <b>%d 次失敗</b>！任務失敗！";
            Script::$script["och"][Script::PU_FAILWITHXFAIL]
                = "在此任務有 <b>%d 次失敗</b>！任務已經失敗。";
            Script::$script["ar"][Script::PU_FAILWITHXFAIL]
                = "في المهمة وجدنا <b>%d فشل </b>! المهمة حُبطت.";
            Script::$script["fa"][Script::PU_FAILWITHXFAIL]
                = "در چالش ما <b>%d باخت </b> پیدا کردیم! خب این چالش شکست خورد.";

            Script::$script["en"][Script::PU_BADGUYSWONQUEST]
                = "The good guys cried, they didn't have any chance. The evil team held a party, celebrating their victory..";
            Script::$script["id"][Script::PU_BADGUYSWONQUEST]
                = "Tim baik menangis, mereka tidak diberi kesempatan ole tim jahat. Tim jahat pun mengadakan pesta, merayakan kemenangan mereka.";
            Script::$script["it"][Script::PU_BADGUYSWONQUEST]
                = "Il team dei buoni piange, non avevano nessuna possibilità di vittoria. Il team dei cattivi celebra la loro vittoria in una grande festa.";
            Script::$script["cn"][Script::PU_BADGUYSWONQUEST]
                = "好人隊無法阻止壞人的陰謀，他們哭得眼都腫了，也只能眼睜睜的看著壞人隊伍以無比驕傲的神情慶祝他們的勝利！";
            Script::$script["pb"][Script::PU_BADGUYSWONQUEST]
                = "As forças do Mal venceram! Seus membros deram uma festa para celebrar sua vitória!";
            Script::$script["ph"][Script::PU_BADGUYSWONQUEST]
                = "Akala nila naisahan na nila ang evil team pero nagkakamali sila! Ngiting tagumpay ang evil team. Mga weak good team, try harder next time!!";
            Script::$script["es"][Script::PU_BADGUYSWONQUEST]
                = "Los buenos tipos se lamentan, no tienen otra opción. El equipo maligno tiene una fiesta, celebrando su victoria... ";
            Script::$script["zho"][Script::PU_BADGUYSWONQUEST]
                = "坏人队伍获得了胜利，他们拥有的经验超越了 1 个世纪，他们的实力强到好人们都自叹不如，科科！";
            Script::$script["gdh"][Script::PU_BADGUYSWONQUEST]
                = "班壞人奸到出汁，個個都係影帝影后，前前後後破壞咗三次任務！好人返去好好檢討下！";
            Script::$script["och"][Script::PU_BADGUYSWONQUEST]
                = "反派勝利！他們經驗多，為他們勝利多番慶祝。";
            Script::$script["ar"][Script::PU_BADGUYSWONQUEST]
                = "الأشخاص الطيبون يبكون, ليس لديهم أي فرصة للفوز. أقاموا الأشرار حفلة يحتفلوا بالفوز...";
            Script::$script["fa"][Script::PU_BADGUYSWONQUEST]
                = "درباری ها شروع به گریه کردن. یاغی ها پیروز شدن و شروع کردن به جشن گرفتن...";


            Script::$script["en"][Script::PU_BADGUYSWONKILL]
                = "The good guys thought they'd won, but they now realize that it is merely a ruse of the wicked. The evil team laugh over their victory...";
            Script::$script["id"][Script::PU_BADGUYSWONKILL]
                = "Orang baik pikir mereka sudah menang, namun sesunggunya itu hanyalah jebakan dari orang jahat. Para penjahat tertawa atas kemenangan mereka...";
            Script::$script["it"][Script::PU_BADGUYSWONKILL]
                = "Il team dei buoni pensa di aver vinto, ma ora si accorgono che era solo uno stratagemma dei malvagi! Il team dei cattivi ride alla faccia del povero Merlino.";
            Script::$script["cn"][Script::PU_BADGUYSWONKILL]
                = "好人以為邪不能勝正，但很可惜的是事與願違。壞人隊伍獲得了勝利！";
            Script::$script["pb"][Script::PU_BADGUYSWONKILL]
                = "Os membros do Bem nem conseguiram sentir o gostinho da vitória. Sua ilusão acabou quando perceberam que era uma cilada dos maus!";
            Script::$script["ph"][Script::PU_BADGUYSWONKILL]
                = "Good job evil team! Tinapay na naging bato pa. Tuwang tuwa ang evil team sa kanilang tagumpay! Next time wag pahalata bes ah!!";
            Script::$script["es"][Script::PU_BADGUYSWONKILL]
                = "Los buenos creyeron que habían ganado, pero ahora se dan cuenta de que es sólo un ardid de los malvados. El equipo maligno se ríe de su victoria...";
            Script::$script["zho"][Script::PU_BADGUYSWONKILL]
                = "好人以为邪不能胜正，但很可惜的是事与愿违。坏人队伍获得了胜利！";
            Script::$script["gdh"][Script::PU_BADGUYSWONKILL]
                = "好人以為贏硬，點知原來喺空歡喜一場。壞人陣營反敗為勝刺殺梅林，個個笑到碌晒地……";
            Script::$script["och"][Script::PU_BADGUYSWONKILL]
                = "正派以為邪不能勝正，但更可惜的是一個圈套。反派為他們勝利慶祝中！";
            Script::$script["ar"][Script::PU_BADGUYSWONKILL]
                = "إعتقدوا الفريق الطيب أنهم فازوا, و لكنهم أدركوا الآن بأنها مجرد خدعة من الأشرار. يضحك الفريق الشرير بفوزهم.";
            Script::$script["fa"][Script::PU_BADGUYSWONKILL]
                = "درباری ها فکر میکردن که پیروز شدن. اما فهمیدن که این فقط یه دروغ از طرف یاغی ها بوده... یاغی ها شروع به خندیدن به پیروزیشون کردن.";


            Script::$script["en"][Script::PU_GOODGUYSWON]
                = "Congratulations! The good team won! The good team are really solid and very clever deceiving evil team.";
            Script::$script["id"][Script::PU_GOODGUYSWON]
                = "Selamat! Tim baik menang! Tim baik memang kompak dan pintar menipu orang jahat..";
            Script::$script["it"][Script::PU_GOODGUYSWON]
                = "Congratulationi! Il team dei buoni ha vinto! Siete stati davvero uniti e intelligenti a ingannare il team avversario.";
            Script::$script["cn"][Script::PU_GOODGUYSWON]
                = "好人隊伍勝利了，你們真的是實至名歸。在對抗壞人中，你們完美的互相配合，粉碎了壞人的陰謀。";
            Script::$script["pb"][Script::PU_GOODGUYSWON]
                = "Parabéns! As forças do Bem venceram! Sua união e inteligência enganaram o grupo adversário.";
            Script::$script["ph"][Script::PU_GOODGUYSWON]
                = "Congrats! Nanalo ang Good Team! Puso lang ang puhunan, tiwala lang (PALOE).";
            Script::$script["es"][Script::PU_GOODGUYSWON]
                = "¡Felicidades! ¡El lado del Bien ganó! El lado del bien es realmente sólido e inteligente para engañar al bando maligno.";
            Script::$script["zho"][Script::PU_GOODGUYSWON]
                = "好人队伍获得了胜利，他们真的是实至名归。在对抗坏人中，他们完美的互相配合，粉碎了坏人的阴谋。";
            Script::$script["gdh"][Script::PU_GOODGUYSWON]
                = "恭喜，好人贏咗啦！佢地好叻吖，睇穿晒壞人嘅真面目。";
            Script::$script["och"][Script::PU_GOODGUYSWON]
                = "恭賀，正派勝利！他們贏得實至名歸，完全擊退反派的陰謀。";
            Script::$script["ar"][Script::PU_GOODGUYSWON]
                = "تهانينا! فاز الفريق الطيب! الفريق الطيب كانوا أذكياء و صلبين بخداع الفريق الشرير.";
            Script::$script["fa"][Script::PU_GOODGUYSWON]
                = "تبریک به من! تبریک به شما! تبریک به همه! درباری ها پیروز شدن! اونها با شجاعت و زیرکی مبارزه کردن و یاغی ها رو از بین بردن.";



            Script::$script["en"][Script::PU_LADYLAKEINST]
                = "%s as Lady of the Lake may use the power to see the true identity of one player. The other team members may give the advice.. <b>%d seconds</b> are given to do the action.";
            Script::$script["id"][Script::PU_LADYLAKEINST]
                = "%s sebagai Lady of the Lake dapat menggunakan kekuatannya untuk menerawang salah seorang anggota tim. Anggota tim lain boleh memberikan petunjuk... Diberikan waktu <b>%d detik</b>.";
            Script::$script["it"][Script::PU_LADYLAKEINST]
                = "%s come Ragazza del Lago può usare il potere per vedere la vera identità di un giocatore. Gli altri giocatori possono dare consigli... Rimangono <b>%d secondi</b> per compiere l'azione.";
            Script::$script["cn"][Script::PU_LADYLAKEINST]
                = "%s可以使用湖女獨有的法力知道某個人的身份。你們有<b>%d秒的時間</b>去討論出該去查處誰的身份。";
            Script::$script["pb"][Script::PU_LADYLAKEINST]
                = "%s como Dama do Lago pode usar seu poder para revelar a verdadeira identidade de alguém. Os outros membros do grupo podem aconselhar... <b>%d segundos</b> para completar a ação.";
            Script::$script["ph"][Script::PU_LADYLAKEINST]
                = "Si %s ang Babae sa Septic tank ay may Telescope na gamit upang makita ang tunay na pagkatao ng isang player. Ang mga kakampi ay pwedeng magbigay ng Advice.. <b>%d segundo</b> para gamitin ang Telescope.";
            Script::$script["es"][Script::PU_LADYLAKEINST]
                = "%s como la Dama del Lago usa el poder para ver la verdadera identidad de un jugador. Los otros jugadores pueden dar consejo, tienen <b>%d segundos</b> para hacerlo.";
            Script::$script["zho"][Script::PU_LADYLAKEINST]
                = "%s 可以使用湖中仙女独有的法力知道某个人的身份。其他人可以提供意见。有 <b>%d 秒</b>要决定该去查处谁的身份。";
            Script::$script["gdh"][Script::PU_LADYLAKEINST]
                = "%s 可以用湖女嘅法力睇某個人嘅身份好定壞。快啲傾下查邊個，但湖女仲有 <b>%d 秒</b>法力就會消失。";
            Script::$script["och"][Script::PU_LADYLAKEINST]
                = "%s 正得到湖中仙女幫忙，可以知曉某人的身份。其他人可以從旁規勸，但只有 <b>%d 秒</b>做決定。";
            Script::$script["ar"][Script::PU_LADYLAKEINST]
                = "%s كـ سيدة البحار, بإمكانه إستخدام طاقتها لرؤية هوية شخص واحد. الأعضاء الآخرين بإمكانهم إعطاءها نصيحة... <b>%d ثانية </b> لها لإختيار الشخص.";
            Script::$script["fa"][Script::PU_LADYLAKEINST]
                = "%s به عنوان بانوی دریاچه, امکان دیدن نقش یه نفر رو داره. بقیه ی اعضای تیم باید راهنمایی ارائه بدن... <b>%d ثانيه </b> برای انجام این کار وقت دارید.";



            Script::$script["en"][Script::PU_KILLMERLIN]
                = "3 Quest has been successfully done by the team. However, evil team still has the last weapon. The evil team are %s. If the assassin can guess the Merlin, the evil team will win! Evil team has <b>%d seconds</b> to decide.";
            Script::$script["id"][Script::PU_KILLMERLIN]
                = "3 Quest berhasil disukseskan oleh tim. Namun, tim jahat masih mempunyai senjata terakhir. Tim jahat membuka kedok mereka %s.. Jika assassin berhasil menebak merlin, maka tim jahatlah yang menang! Diberikan waktu <b>%d detik</b>.";
            Script::$script["it"][Script::PU_KILLMERLIN]
                = "3 Missioni sono state completate con successo dal team. Però, il team dei malvagi ha ancora l'ultima arma. I cattivi sono %s. Se l'assassino riesce a uccidere Merlino, il team dei cattivi vince! Essi hanno <b>%d secondi</b> per decidere.";
            Script::$script["cn"][Script::PU_KILLMERLIN]
                = "好人們完美的執行了3個任務。但是先別太過高興，壞人隊伍依然有最後的殺手鐧。壞人隊伍就是這些人：%s。如果刺客成功殺掉梅林，他們就有機會反敗為勝。壞人隊伍，你們有<b>%d秒</b>去決定想殺掉的人。";
            Script::$script["pb"][Script::PU_KILLMERLIN]
                = "3 Missões foram bem sucedidas pelo Bem. Porém, o Mal ainda tem uma última chance. Os membros das forças do Mal eram %s. Se a Assassina matar Merlin, o Mal vence! Membros do Mal, vocês têm <b>%d segundos</b> para discussões.";
            Script::$script["ph"][Script::PU_KILLMERLIN]
                = "3 Quest ay napagtagumpayan ng Good Team. Ngunit Subalit Datapwat, ang Evil Team ay may huling Alas(Death Note). Ang Evil Team ay sina %s. Kung mahulaan ng Assassin kung sino ang Merlin, Panalo ang Evil Team! May <b>%d segundo</b> ang Evil Team para magdesisyon.";
            Script::$script["es"][Script::PU_KILLMERLIN]
                = "3 Gestas se han completado satisfactoriamente por el lado del Bien. Sin embargo, el bando maligno aún tiene una última arma. El equipo maligno es %s. Si el asesino puede adivinar quién es Merlín, ¡el equipo maligno gana! El equipo maligno tiene <b>%d segundos</b> para decidir.";
            Script::$script["zho"][Script::PU_KILLMERLIN]
                = "好人们完美的执行了 3 个任务。但是先别高兴著，坏人队伍依然有最後的杀手鐧。坏人队伍就是这些人： %s。如果刺客成功杀掉梅林，他们就会反败为胜。坏人队伍，你们有 <b>%d 秒</b> 去决定想杀掉的人。";
            Script::$script["gdh"][Script::PU_KILLMERLIN]
                = "三個任務順利完成，壞人係：%s。不過，佢地仲有最後武器，如果壞人隊冧梅林，佢哋先係大贏家！壞人而家有 <b>%d 秒</b> 諗下人選。";
            Script::$script["och"][Script::PU_KILLMERLIN]
                = "有 3 次任務成功，但是反派未完全輸，還有最後一著。反派一夥有： %s。只要殺死梅林，反派就反敗為勝！反派現在有 <b> %d 秒</b> 去决定。";
            Script::$script["en"][Script::PU_KILLMERLIN]
                = "3 مهمات قد نجحت بالفعل للطيبين. على أي حال, الفريق الشرير لديهم خيار واحد. الفريق الشرير هم %s. إذا توقع الحشاش مرلين, الفريق الشرير سيفوز! الفريق الشرير له  <b>%d ثانية </b> للإختيار.";
            Script::$script["fa"][Script::PU_KILLMERLIN]
                = " اوه خدای من درباری ها 3 چالش رو با موفقیت پشت سر گذاشتن و حالا پیروز این میدان هستن. اما یاغی ها یعنی %s هنوز سلاح نهایی خودشون رو دارن. اگه قاتل بتونه مرلین رو درست حدس بزنه و بکشه اونها پیروز میشن! یاغی ها فقط <b>%d ثانيه </b> وقت دارید.";


            Script::$script["en"][Script::PU_QSUCCESSNOFAIL]
                = "Quest has been successfully done! ";
            Script::$script["id"][Script::PU_QSUCCESSNOFAIL]
                = "Quest berhasil diselesaikan dengan baik sekali. ";
            Script::$script["it"][Script::PU_QSUCCESSNOFAIL]
                = "Missione completata con successo! ";
            Script::$script["cn"][Script::PU_QSUCCESSNOFAIL]
                = "任務成功被執行。";
            Script::$script["pb"][Script::PU_QSUCCESSNOFAIL]
                = "O resultado da missão foi: SUCESSO! ";
            Script::$script["ph"][Script::PU_QSUCCESSNOFAIL]
                = "Ang Quest ay Success! (PALOE) ";
            Script::$script["es"][Script::PU_QSUCCESSNOFAIL]
                = "¡La gesta se ha completado exitosamente! ";
            Script::$script["zho"][Script::PU_QSUCCESSNOFAIL]
                = "任务完满成功被执行。";
            Script::$script["gdh"][Script::PU_QSUCCESSNOFAIL]
                = "任務成功咗。";
            Script::$script["och"][Script::PU_QSUCCESSNOFAIL]
                = "任務成功。";
            Script::$script["ar"][Script::PU_QSUCCESSNOFAIL]
                = "المهمة قد نجحت بالفعل! ";
            Script::$script["fa"][Script::PU_QSUCCESSNOFAIL]
                = "چالش با موفقیت انجام شد! ";

            Script::$script["en"][Script::PU_QSUCCESSXXFAIL]
                = "However, team found there is <b>%d FAIL</b> in this quest..";
            Script::$script["id"][Script::PU_QSUCCESSXXFAIL]
                = "Namun, tim menemukan <b>%d FAIL </b> dalam quest ini..";
            Script::$script["it"][Script::PU_QSUCCESSXXFAIL]
                = "Però, il team trova che sono presenti <b>%d FAIL</b> in questa Missione..";
            Script::$script["cn"][Script::PU_QSUCCESSXXFAIL]
                = "很可惜,大家在這次任務中發現有<b>%d個失敗。</b>";
            Script::$script["pb"][Script::PU_QSUCCESSXXFAIL]
                = "No entanto, a Missão teve <b>%d FRACASSO(S)</b>.";
            Script::$script["ph"][Script::PU_QSUCCESSXXFAIL]
                = "Ngunit Subalit Datapwat, Nakita ng Team may <b>%d FAIL</b> may Hunyango sa Quest..";
            Script::$script["es"][Script::PU_QSUCCESSXXFAIL]
                = "Sin embargo, el equipo encontró que hay un <b>%d FRACASO </b> en esta gesta.";
            Script::$script["zho"][Script::PU_QSUCCESSXXFAIL]
                = "很可惜，大家在这次任务中发现有 <b>%d 个失败。</b>";
            Script::$script["gdh"][Script::PU_QSUCCESSXXFAIL]
                = "不過，但呢次行動中有 <b>%d 個失敗</b>……";
            Script::$script["och"][Script::PU_QSUCCESSXXFAIL]
                = "不幸此任務顯示有 <b>%d 個失敗</b>。";
            Script::$script["ar"][Script::PU_QSUCCESSXXFAIL]
                = "على أي حال, وجد الفريق أن هناك <b>%d فشل </b> في هذه المهمة...";
            Script::$script["fa"][Script::PU_QSUCCESSXXFAIL]
                = "متأسفانه... درباری ها <b>%d شکست </b> در این چالش پیدا کردن...";

            Script::$script["en"][Script::PR_ASSIGNONEQUEST]
                = "You have successfully assigned %s in quest.";
            Script::$script["id"][Script::PR_ASSIGNONEQUEST]
                = "Kamu berhasil memilih %s dalam quest.";
            Script::$script["it"][Script::PR_ASSIGNONEQUEST]
                = "Hai assegnato con successo %s nella missione.";
            Script::$script["cn"][Script::PR_ASSIGNONEQUEST]
                = "你成功委任 %s 去完成任務。";
            Script::$script["pb"][Script::PR_ASSIGNONEQUEST]
                = "%s foi escolhido(a) para a Missão.";
            Script::$script["ph"][Script::PR_ASSIGNONEQUEST]
                = "Itinalaga mo si %s sa Quest.";
            Script::$script["es"][Script::PR_ASSIGNONEQUEST]
                = "Has asignado satisfactoriamente a %s en la gesta.";
            Script::$script["zho"][Script::PR_ASSIGNONEQUEST]
                = "你己成功委任 %s 去完成任务。";
            Script::$script["gdh"][Script::PR_ASSIGNONEQUEST]
                = "你揀咗 %s 去做呢次任務。";
            Script::$script["och"][Script::PR_ASSIGNONEQUEST]
                = "你成功選擇了 %s 去執行任務。";
            Script::$script["ar"][Script::PR_ASSIGNONEQUEST]
                = "لقد تم تعيين %s بنجاح في هذه المهمة.";
            Script::$script["fa"][Script::PR_ASSIGNONEQUEST]
                = "شما با موفقیت %s را در چالش قرار دادید..";

            Script::$script["en"][Script::PU_ASSIGNONEQUEST]
                = "%s assigned %s in quest.";
            Script::$script["id"][Script::PU_ASSIGNONEQUEST]
                = "%s memilih %s dalam quest.";
            Script::$script["it"][Script::PU_ASSIGNONEQUEST]
                = "%s ha assegnato %s nella missione.";
            Script::$script["cn"][Script::PU_ASSIGNONEQUEST]
                = "%s 在任務中委任了%s。";
            Script::$script["pb"][Script::PU_ASSIGNONEQUEST]
                = "%s escolheu %s para a Missão.";
            Script::$script["ph"][Script::PU_ASSIGNONEQUEST]
                = "Itinalaga ni %s si %s sa Quest.";
            Script::$script["es"][Script::PU_ASSIGNONEQUEST]
                = "%s asignó a %s a la gesta.";
            Script::$script["zho"][Script::PU_ASSIGNONEQUEST]
                = "%s 在任务中已委任了 %s。";
            Script::$script["gdh"][Script::PU_ASSIGNONEQUEST]
                = "%s 揀咗 %s 做任務。";
            Script::$script["och"][Script::PU_ASSIGNONEQUEST]
                = "%s 在此任務中已選擇了 %s。";
            Script::$script["ar"][Script::PU_ASSIGNONEQUEST]
                = "%s إختار %s في المهمة";
            Script::$script["fa"][Script::PU_ASSIGNONEQUEST]
                = "%s قرار داد %s را در چالش.";

            Script::$script["en"][Script::PR_BADGUYSUCCESS]
                = "Although you are evil, you have successfully made a good impression.";
            Script::$script["id"][Script::PR_BADGUYSUCCESS]
                = "Meskipun kamu jahat, kamu berhasil membuat pencitraan yang baik.";
            Script::$script["it"][Script::PR_BADGUYSUCCESS]
                = "Nonostante tu sia cattivo, completi la missione per fare una bella impressione... E ingannare il team dei buoni, ovviamente!";
            Script::$script["cn"][Script::PR_BADGUYSUCCESS]
                = "雖然你是壞人，但你成功的讓好人們對你留下很好的印象。";
            Script::$script["pb"][Script::PR_BADGUYSUCCESS]
                = "Embora você faça parte do Mal, sua escolha pelo SUCESSO poderá causar uma boa impressão.";
            Script::$script["ph"][Script::PR_BADGUYSUCCESS]
                = "Kahit ikaw ay Evil Team, Success ang pinili mo upang di paghinalaan.(Act Safe lang Bes!)";
            Script::$script["es"][Script::PR_BADGUYSUCCESS]
                = "Aunque seas malvado, has causado una buena impresión.";
            Script::$script["zho"][Script::PR_BADGUYSUCCESS]
                = "虽然你是坏人，你成功的让好人们对你留下很好的印象。";
            Script::$script["gdh"][Script::PR_BADGUYSUCCESS]
                = "雖然你係壞人，但覺得時機未成熟，暫時幫手做個任務先。";
            Script::$script["och"][Script::PR_BADGUYSUCCESS]
                = "雖則你是反派，你成功的留下很好的印象。";
            Script::$script["ar"][Script::PR_BADGUYSUCCESS]
                = "بالرغم من أنك شرير, لقد نجحت بإعطاء إنطباع جيد!";
            Script::$script["fa"][Script::PR_BADGUYSUCCESS]
                = "با اینکه تو یه آدم شرور هستی اما تونستی یه تصور خوب به وجود بیاری!";


            Script::$script["en"][Script::PR_BADGUYFAIL]
                = "You have successfully failed the quest.";
            Script::$script["id"][Script::PR_BADGUYFAIL]
                = "Kamu berhasil menggagalkan quest.";
            Script::$script["it"][Script::PR_BADGUYFAIL]
                = "Hai fallito con successo la missione.";
            Script::$script["cn"][Script::PR_BADGUYFAIL]
                = "你成功的讓今次的任務失敗了。";
            Script::$script["pb"][Script::PR_BADGUYFAIL]
                = "Escolha pelo FRACASSO registrada.";
            Script::$script["ph"][Script::PR_BADGUYFAIL]
                = "Ayos Failed hahahaha.(Act Safe Bes! ibintang mo sa iba.)";
            Script::$script["es"][Script::PR_BADGUYFAIL]
                = "Has saboteado la gesta satisfactoriamente.";
            Script::$script["zho"][Script::PR_BADGUYFAIL]
                = "你成功的让今次的任务失败了。";
            Script::$script["gdh"][Script::PR_BADGUYFAIL]
                = "你破壞咗呢個任務啦。";
            Script::$script["och"][Script::PR_BADGUYFAIL]
                = "你成功地令任務失敗了。";
            Script::$script["ar"][Script::PR_BADGUYFAIL]
                = "لقد نجحت بإحباط هذه المهمة!";
            Script::$script["fa"][Script::PR_BADGUYFAIL]
                = "شما با موفقیت، در چالش شکست خوردید!";


            Script::$script["en"][Script::PR_BADGUY2FAIL]
                = "You have successfully used ninja ability. This quest is given 2 FAILS!";
            Script::$script["id"][Script::PR_BADGUY2FAIL]
                = "Kamu berhasil menggunakan kemampuan ninja. Quest ini diberikan 2 kegagalan!";
            Script::$script["it"][Script::PR_BADGUY2FAIL]
                = "Hai usato con successo l'abilità ninja. In questa missione verranno contati 2 FALLIMENTI!";
            Script::$script["cn"][Script::PR_BADGUY2FAIL]
                = "你靠著那優秀的忍者能力，令這次的任務失敗2次。";
            Script::$script["pb"][Script::PR_BADGUY2FAIL]
                = "Você usou com sucesso a habilidade ninja. Nesta Missão serão associados mais 2 FRACASSOS!";
            Script::$script["ph"][Script::PR_BADGUY2FAIL]
                = "Ginamit mo na ang 2 Fails Ninjutsu. Ang Quest na ito ay mayroon ng 2 FAILS!";
            Script::$script["es"][Script::PR_BADGUY2FAIL]
                = "Has usado la habilidad ninja satisfactoriamente. ¡Esta gesta contendrá 2 FRACASOS!";
            Script::$script["zho"][Script::PR_BADGUY2FAIL]
                = "你靠著那优秀的忍者能力，令这次的任务失败 2 次！";
            Script::$script["gdh"][Script::PR_BADGUY2FAIL]
                = "你用咗忍者分身術，連續破壞咗呢個任務 2 次！";
            Script::$script["och"][Script::PR_BADGUY2FAIL]
                = "你行使了忍者能力，令此任務疊敗 2 陣！";
            Script::$script["ar"][Script::PR_BADGUY2FAIL]
                = "لقد نجحت بالفعل بإستخدام ميزة النينجا. هذه المهمة أُعطيت 2 فشل!";
            Script::$script["fa"][Script::PR_BADGUY2FAIL]
                = "شما با موفقیت از قابلیت نینجایی خودتون استفاده کردید و 2 شکست وارد این چالش کردید!";


            Script::$script["en"][Script::PR_LADYNOTSEE]
                = "You decided to not use your power to see.";
            Script::$script["id"][Script::PR_LADYNOTSEE]
                = "Kamu memilih untuk tidak menerawang..";
            Script::$script["it"][Script::PR_LADYNOTSEE]
                = "Hai deciso di non usare il tuo potere per scrutare.";
            Script::$script["cn"][Script::PR_LADYNOTSEE]
                = "你選擇不要使用你的能力去查看";
            Script::$script["pb"][Script::PR_LADYNOTSEE]
                = "Você decidiu não usar seu poder da revelação.";
            Script::$script["ph"][Script::PR_LADYNOTSEE]
                = "Nagdesisyon kang hindi na gamitin ang Telescope.";
            Script::$script["es"][Script::PR_LADYNOTSEE]
                = "Decidiste no usar tu poder para ver.";
            Script::$script["zho"][Script::PR_LADYNOTSEE]
                = "你选择不要使用湖中仙女的能力去查看。";
            Script::$script["gdh"][Script::PR_LADYNOTSEE]
                = "你選擇唔用湖女嘅能力去睇其他人。";
            Script::$script["och"][Script::PR_LADYNOTSEE]
                = "你已決定不使用湖中仙女的能力去查看。";
            Script::$script["ar"][Script::PR_LADYNOTSEE]
                = "لقد إخترت بأنك لن تستخدم الميزة.";
            Script::$script["fa"][Script::PR_LADYNOTSEE]
                = "شما تصمیم گرفتید از توانایی خود برای شناختن استفاده نکنید.";


            Script::$script["en"][Script::PU_LADYNOTSEE]
                = "%s decided to not use the power to see.";
            Script::$script["id"][Script::PU_LADYNOTSEE]
                = "%s memilih untuk tidak menerawang.";
            Script::$script["it"][Script::PU_LADYNOTSEE]
                = "%s ha deciso di non usare il potere per scrutare.";
            Script::$script["cn"][Script::PU_LADYNOTSEE]
                = "湖女，%s 選擇不用他的能力來查看";
            Script::$script["pb"][Script::PU_LADYNOTSEE]
                = "%s decidiu não usar o poder da revelação.";
            Script::$script["ph"][Script::PU_LADYNOTSEE]
                = "Si %s ay nagdesisyong hindi na gamitin ang Telescope.";
            Script::$script["es"][Script::PU_LADYNOTSEE]
                = "%s decidió no usar el poder de ver.";
            Script::$script["zho"][Script::PU_LADYNOTSEE]
                = "%s 选择不用湖中仙女的能力来查看。";
            Script::$script["gdh"][Script::PU_LADYNOTSEE]
                = "%s 唔諗住用湖女嘅能力去睇其他人。";
            Script::$script["och"][Script::PU_LADYNOTSEE]
                = "%s 已決定不會使用湖中仙女的能力去查看。";
            Script::$script["ar"][Script::PU_LADYNOTSEE]
                = "%s إختار بأنه لن يستخدم الميزة.";
            Script::$script["fa"][Script::PU_LADYNOTSEE]
                = "%s تصمیم گرفت از تواناییش برای شناختن استفاده نکنه.";


            Script::$script["en"][Script::PR_LADYSEE]
                = "You have seen %s.. He/she is ";
            Script::$script["id"][Script::PR_LADYSEE]
                = "Kamu berhasil menerawang %s.. Dia adalah orang ";
            Script::$script["it"][Script::PR_LADYSEE]
                = "Hai scrutato %s.. Lui/Lei è";
            Script::$script["cn"][Script::PR_LADYSEE]
                = "你運用你的法力去查看 %s 的身份。他是";
            Script::$script["pb"][Script::PR_LADYSEE]
                = "Você vê %s.. Ele é ";
            Script::$script["ph"][Script::PR_LADYSEE]
                = "Nakita mo si %s.. Siya ay ";
            Script::$script["es"][Script::PR_LADYSEE]
                = "Has visto a %s... Él/Ella es del bando del ";
            Script::$script["zho"][Script::PR_LADYSEE]
                = "你查看到 %s 的身份……他／她是";
            Script::$script["gdh"][Script::PR_LADYSEE]
                = "你知道咗 %s 嘅身份……佢喺";
            Script::$script["och"][Script::PR_LADYSEE]
                = "你查看到 %s 的身份……他／她是";
            Script::$script["ar"][Script::PR_LADYSEE]
                = "لقد رأيت %s..إنه هي/هو ";
            Script::$script["fa"][Script::PR_LADYSEE]
                = "تو خواستی شخصی رو به این اسم بشناسی: %s... نقش اون هست  ";


            Script::$script["en"][Script::PR_GOOD]
                = "good.";
            Script::$script["id"][Script::PR_GOOD]
                = "baik.";
            Script::$script["it"][Script::PR_GOOD]
                = "buono.";
            Script::$script["cn"][Script::PR_GOOD]
                = "好人。";
            Script::$script["pb"][Script::PR_GOOD]
                = "do Bem.";
            Script::$script["ph"][Script::PR_GOOD]
                = "Mabuti.";
            Script::$script["es"][Script::PR_GOOD]
                = "Bien.";
            Script::$script["zho"][Script::PR_GOOD]
                = "好人";
            Script::$script["gdh"][Script::PR_GOOD]
                = "好人。";
            Script::$script["och"][Script::PR_GOOD]
                = "正派。";
            Script::$script["ar"][Script::PR_GOOD]
                = "طيب.";
            Script::$script["fa"][Script::PR_GOOD]
                = "درباری.";


            Script::$script["en"][Script::PR_BAD]
                = "evil.";
            Script::$script["id"][Script::PR_BAD]
                = "jahat.";
            Script::$script["it"][Script::PR_BAD]
                = "cattivo.";
            Script::$script["cn"][Script::PR_BAD]
                = "壞人。";
            Script::$script["pb"][Script::PR_BAD]
                = "do Mal.";
            Script::$script["ph"][Script::PR_BAD]
                = "Masama.";
            Script::$script["es"][Script::PR_BAD]
                = "Mal.";
            Script::$script["zho"][Script::PR_BAD]
                = "坏人。";
            Script::$script["gdh"][Script::PR_BAD]
                = "壞人。";
            Script::$script["och"][Script::PR_BAD]
                = "反派。";
            Script::$script["ar"][Script::PR_BAD]
                = "شرير.";
            Script::$script["fa"][Script::PR_BAD]
                = "یاغی.";


            Script::$script["en"][Script::PU_LADYSEE]
                = "%s use its power to see %s.";
            Script::$script["id"][Script::PU_LADYSEE]
                = "%s menerawang %s.";
            Script::$script["it"][Script::PU_LADYSEE]
                = "%s usa il suo potere per scrutare %s.";
            Script::$script["cn"][Script::PU_LADYSEE]
                = "%s用他的法力來查看%s的身份。";
            Script::$script["pb"][Script::PU_LADYSEE]
                = "%s usou seu poder para ver %s.";
            Script::$script["ph"][Script::PU_LADYSEE]
                = "Si %s ay ginamit ang Telescope upang makita si %s.";
            Script::$script["es"][Script::PU_LADYSEE]
                = "%s usa el poder para ver a %s.";
            Script::$script["zho"][Script::PU_LADYSEE]
                = "%s 选择使用湖中仙女的能力来查看 %s 的身份。";
            Script::$script["gdh"][Script::PU_LADYSEE]
                = "%s 用湖女嘅能力去睇 %s。";
            Script::$script["och"][Script::PU_LADYSEE]
                = "%s 已決定運用湖中仙女的能力去查看 %s。";
            Script::$script["ar"][Script::PU_LADYSEE]
                = "%s إستخدم الميزة لرؤية %s.";
            Script::$script["fa"][Script::PU_LADYSEE]
                = "%s از توانایی خودش برای دیدن %s استفاده کرد.";


            Script::$script["en"][Script::PR_KILLMERLINSUCCESS]
                = "You have successfully killed %s.";
            Script::$script["id"][Script::PR_KILLMERLINSUCCESS]
                = "Kamu berhasil membunuh %s.";
            Script::$script["it"][Script::PR_KILLMERLINSUCCESS]
                = "Hai ucciso con successo %s.";
            Script::$script["cn"][Script::PR_KILLMERLINSUCCESS]
                = "你成功殺死了 %s。";
            Script::$script["pb"][Script::PR_KILLMERLINSUCCESS]
                = "Você assassinou %s.";
            Script::$script["ph"][Script::PR_KILLMERLINSUCCESS]
                = "Tagumpay mong napaslang si %s.";
            Script::$script["es"][Script::PR_KILLMERLINSUCCESS]
                = "Has matado satisfactoriamente a %s.";
            Script::$script["zho"][Script::PR_KILLMERLINSUCCESS]
                = "你成功杀死了 %s。";
            Script::$script["gdh"][Script::PR_KILLMERLINSUCCESS]
                = "你成功刺殺 %s。";
            Script::$script["och"][Script::PR_KILLMERLINSUCCESS]
                = "你成功地擊殺了 %s。";
            Script::$script["ar"][Script::PR_KILLMERLINSUCCESS]
                = "لقد نجحت بقتل %s.";
            Script::$script["fa"][Script::PR_KILLMERLINSUCCESS]
                = "شما با موفقیت %s را به قتل رسوندید.";


            Script::$script["en"][Script::PU_KILLMERLINSUCCESS]
                = "%s have successfully killed %s and in fact %s ";
            Script::$script["id"][Script::PU_KILLMERLINSUCCESS]
                = "%s berhasil membunuh %s dan ternyata %s ";
            Script::$script["it"][Script::PU_KILLMERLINSUCCESS]
                = "%s ha ucciso con successo %s, dato il fatto che %s ";
            Script::$script["cn"][Script::PU_KILLMERLINSUCCESS]
                = "%s 不負眾望，刺殺了 %s，原來 %s ";
            Script::$script["pb"][Script::PU_KILLMERLINSUCCESS]
                = "%s assassinou %s. E, na verdade, %s ";
            Script::$script["ph"][Script::PU_KILLMERLINSUCCESS]
                = "Si %s ay tagumpay na napaslang si %s sa katunayan si %s ";
            Script::$script["es"][Script::PU_KILLMERLINSUCCESS]
                = "%s asesinó a %s que es %s ";
            Script::$script["zho"][Script::PU_KILLMERLINSUCCESS]
                = "%s 不负众望刺杀了 %s，原来 %s ";
            Script::$script["gdh"][Script::PU_KILLMERLINSUCCESS]
                = "%s 刺殺咗 %s，而 %s ";
            Script::$script["och"][Script::PU_KILLMERLINSUCCESS]
                = "%s 成功地擊殺了 %s，而 %s 原來";
            Script::$script["ar"][Script::PU_KILLMERLINSUCCESS]
                = "%s قد نجح بقتل %s كان في الواقع %s ";
            Script::$script["fa"][Script::PU_KILLMERLINSUCCESS]
                = "%s موفق به قتل %s شد و درواقع %s ";


            Script::$script["en"][Script::PU_MERLIN]
                = "is <b>MERLIN</b>!";
            Script::$script["id"][Script::PU_MERLIN]
                = "adalah <b>MERLIN</b>!";
            Script::$script["it"][Script::PU_MERLIN]
                = "è <b>MERLINO</b>!";
            Script::$script["cn"][Script::PU_MERLIN]
                = "<b>是梅林</b>!";
            Script::$script["pb"][Script::PU_MERLIN]
                = "é <b>MERLIN</b>!";
            Script::$script["ph"][Script::PU_MERLIN]
                = "ang <b>MERLIN</b>!";
            Script::$script["es"][Script::PU_MERLIN]
                = "es <b>MERLÍN</b>!";
            Script::$script["zho"][Script::PU_MERLIN]
                = "<b>就是梅林</b>！";
            Script::$script["gdh"][Script::PU_MERLIN]
                = "<b>就係梅林</b>！";
            Script::$script["och"][Script::PU_MERLIN]
                = "<b>就是梅林</b>！";
            Script::$script["ar"][Script::PU_MERLIN]
                = "إنه <b>مرلين</b>!";
            Script::$script["fa"][Script::PU_MERLIN]
                = "اون هست <b>مرلین</b>!";


            Script::$script["en"][Script::PU_NOTMERLIN]
                = "is <b>not MERLIN</b>!";
            Script::$script["id"][Script::PU_NOTMERLIN]
                = "<b>bukan MERLIN</b>!";
            Script::$script["it"][Script::PU_NOTMERLIN]
                = "<b>non è MERLINO</b>!";
            Script::$script["cn"][Script::PU_NOTMERLIN]
                = "<b>不是梅林</b>!";
            Script::$script["pb"][Script::PU_NOTMERLIN]
                = "<b>não é MERLIN</b>!";
            Script::$script["ph"][Script::PU_NOTMERLIN]
                = "ay <b>hindi MERLIN</b>!";
            Script::$script["es"][Script::PU_NOTMERLIN]
                = " <b>no es MERLÍN</b>!";
            Script::$script["zho"][Script::PU_NOTMERLIN]
                = "<b>不是梅林</b>！";
            Script::$script["gdh"][Script::PU_NOTMERLIN]
                = "<b>唔係梅林</b>！";
            Script::$script["och"][Script::PU_NOTMERLIN]
                = "<b>不是梅林</b>！";
            Script::$script["ar"][Script::PU_NOTMERLIN]
                = "إنه <b>ليس مرلين</b>!";
            Script::$script["fa"][Script::PU_NOTMERLIN]
                = "اون <b> مرلين نیست</b>!";


            Script::$script["en"][Script::PR_ASSIGNLATE]
                = "The time's up. The rest of players are assigned randomly. ";
            Script::$script["id"][Script::PR_ASSIGNLATE]
                = "Jawabanmu terlambat, sisa player dipilih secara random. ";
            Script::$script["it"][Script::PR_ASSIGNLATE]
                = "Il tempo è scaduto. Gli altri giocatori verranno assegnati casualmente. ";
            Script::$script["cn"][Script::PR_ASSIGNLATE]
                = "時間到，剩下的玩家將會由系統隨意委任去當任務執行者。";
            Script::$script["pb"][Script::PR_ASSIGNLATE]
                = "O tempo acabou. O restante dos escolhidos foi nomeado aleatoriamente. ";
            Script::$script["ph"][Script::PR_ASSIGNLATE]
                = "Oops time's up. Random! kahit sino na lang ang italagang player. ";
            Script::$script["es"][Script::PR_ASSIGNLATE]
                = "Se acabó el tiempo. El resto de jugadores se han asignado al azar. ";
            Script::$script["zho"][Script::PR_ASSIGNLATE]
                = "时间到了，剩下未决定的玩家将会由系统随意委任去。";
            Script::$script["gdh"][Script::PR_ASSIGNLATE]
                = "夠晒鐘喇，剩低未揀嘅求其幫你揀埋。";
            Script::$script["och"][Script::PR_ASSIGNLATE]
                = "時間到了，剩下未選的人數要由系统隨機挑選了。";
            Script::$script["ar"][Script::PR_ASSIGNLATE]
                = "إنتهى الوقت. بقية اللاعبين أختيروا عشوائياً. ";
            Script::$script["fa"][Script::PR_ASSIGNLATE]
                = "وقت تموم شد. بازیکنا به صورت اتفاقی انتخاب میشن. ";


            Script::$script["en"][Script::PU_ASSIGNLATE]
                = "Because the time's up, the rest of players are assigned randomly: %s.";
            Script::$script["id"][Script::PU_ASSIGNLATE]
                = "Karena waktu habis, sisa pemain dipilih secara random: %s.";
            Script::$script["it"][Script::PU_ASSIGNLATE]
                = "Visto che il tempo è scaduto, il resto dei giocatori verrà assegnato casualmente: %s.";
            Script::$script["cn"][Script::PU_ASSIGNLATE]
                = "時間到了，所以系統之後隨意委任剩下的這些玩家去： %s去做任務。";
            Script::$script["pb"][Script::PU_ASSIGNLATE]
                = "Como o tempo acabou, o restante dos escolhidos foi nomeado aleatoriamente: %s.";
            Script::$script["ph"][Script::PU_ASSIGNLATE]
                = "Dahil time's up, Random! kahit sino na lang ang itatalaga (paReport kung <b>AFK KING</b>): %s.";
            Script::$script["es"][Script::PU_ASSIGNLATE]
                = "Debido a que el tiempo se ha acabado, el resto de jugadores se han asignado al azar: %s.";
            Script::$script["zho"][Script::PU_ASSIGNLATE]
                = "时间到了，所以系统随意委任剩下的这些玩家去： %s。";
            Script::$script["gdh"][Script::PU_ASSIGNLATE]
                = "夠晒鐘喇，求其幫你揀咗幾個人去做任務： %s。";
            Script::$script["och"][Script::PU_ASSIGNLATE]
                = "時間到了，剩下未選的人數要由系统隨機挑選了，名單有： %s。";
            Script::$script["ar"][Script::PU_ASSIGNLATE]
                = "لأن الوقت إنتهى, إختير بقية اللاعبين عشوائياً : %s.";
            Script::$script["fa"][Script::PU_ASSIGNLATE]
                = "چون وقت تموم شد. این بازیکنا به صورت اتفاقی انتخاب شدن: %s.";


            Script::$script["en"][Script::PU_APPRREJLATE]
                = "Because the time's up, the rest of the members are assumed abstain.";
            Script::$script["id"][Script::PU_APPRREJLATE]
                = "Karena waktu habis, pemain lain dianggap memilih abstain.";
            Script::$script["it"][Script::PU_APPRREJLATE]
                = "Visto che il tempo è scaduto, gli altri giocatori verranno contati come astenuti.";
            Script::$script["cn"][Script::PU_APPRREJLATE]
                = "時間到，剩下的人就當作棄權。";
            Script::$script["pb"][Script::PU_APPRREJLATE]
                = "O tempo acabou. Aqueles que não votaram serão considerados como abstenções.";
            Script::$script["ph"][Script::PU_APPRREJLATE]
                = "Dahil time's up, Di na nakaboto ang ibang miyembro, baka Busy!.";
            Script::$script["es"][Script::PU_APPRREJLATE]
                = "Debido a que el tiempo se ha acabado, el resto de miembros se asume que se abstienen de votar.";
            Script::$script["zho"][Script::PU_APPRREJLATE]
                = "时间到了，剩下的人就当作弃权。";
            Script::$script["gdh"][Script::PU_APPRREJLATE]
                = "夠晒鐘喇，未投嘅就當棄權啦。";
            Script::$script["och"][Script::PU_APPRREJLATE]
                = "時間到了，未投票的人會視作棄權。";
            Script::$script["ar"][Script::PU_APPRREJLATE]
                = "لأن الوقت إنتهى, بقية اللاعبين أُعتبروا غير مصوتين.";
            Script::$script["fa"][Script::PU_APPRREJLATE]
                = "چون وقت تموم شد تعدادی از بازیکنا منصرف شدن.";


            Script::$script["en"][Script::PU_APPRREJREMIND]
                = "The assignees in this quest are %s\n\n<b>%d seconds</b> left to choose <b>approve</b> or <b>reject</b>. If there is minimum <b>%d member(s)</b> fail the quest, the quest will be failed.";
            Script::$script["id"][Script::PU_APPRREJREMIND]
                = "Pejuang di quest ini %s\n\n<b>%d detik</b> lagi untuk memilih <b>setuju</b> atau <b>menolak</b>. Jika ada minimal <b>%d anggota</b> menggagalkan quest, maka quest akan dianggap gagal!";
            Script::$script["it"][Script::PU_APPRREJREMIND]
                = "Gli incaricati di questa missione sono %s\n\n<b>%d secondi</b> rimanenti per scegliere <b>approva</b> o <b>rifiuta</b>. Se almeno <b>%d membri(s)</b> falliscono la missione, la missione verrà fallita.";
            Script::$script["cn"][Script::PU_APPRREJREMIND]
                = "被國王委任的人是%s，你們有<b>%d秒</b>去表達你們的立場是 <b>贊成</b> 還是<b>反對</b>. 如果任務執行期間有 <b>%d位成員</b>選擇令到該任務失敗，這個任務就會被宣布失敗。";
            Script::$script["pb"][Script::PU_APPRREJREMIND]
                = "Foram escolhidos %s para a Missão.\n\nRestam <b>%d segundos</b> para decidir <b>aprovar</b> ou <b>rejeitar</b>. (Para a Missão falhar, o número mínimo de FRACASSOS é <b>%d</b>).";
            Script::$script["ph"][Script::PU_APPRREJREMIND]
                = "Ang mga naitalaga sa Quest na ito ay sina %s\n\n<b>%d segundo</b> ang nalalabi upang pumili kung <b>Approve</b> o <b>Reject</b>. Kung may <b>%d member(s)</b> na nagFail sa Quest, Ang Quest ay Failed na.";
            Script::$script["es"][Script::PU_APPRREJREMIND]
                = "Los elegidos para esta gesta son %s\n\nQuedan <b>%d segundos</b> para elegir <b>Aprobar</b> o <b>Rechazar</b>. Si un mínimo de <b>%d miembro(s)</b> sabotean la gesta, la gesta fracasará.";
            Script::$script["zho"][Script::PU_APPRREJREMIND]
                = "被挑选的人是 %s。\n\n现还有<b> %d 秒</b>让大家去表达立场是 <b>赞成</b> 还是<b>反对</b>。如果任务执行期间有  <b>%d 名成员</b> 选择该任务失败，这个任务就会被宣布失败。";
            Script::$script["gdh"][Script::PU_APPRREJREMIND]
                = "被指派去做任務嘅人有 %s。\n\n而家仲有<b> %d 秒</b>投票表示係 <b>贊成</b> 定 <b>反對</b>。如果有 <b>%d 個</b> 失敗，整個任務就算衰咗。";
            Script::$script["och"][Script::PU_APPRREJREMIND]
                = "獲委任的人是 %s。\n\n現正還有<b> %d 秒</b>投票表示 <b>贊成</b> 或是 <b>反對</b>。如果任務中有 <b>%d 名成員</b> 令到此任務行動失敗，整個任務就當作失敗。";
            Script::$script["ar"][Script::PU_APPRREJREMIND]
                = "المختارين لهذه المهمة هم %s\n\n<b>%d ثانية</b> متبقية لإختيار <b>موافق</b> or <b>أعترض</b>. إن كان هناك الحد الأدنى من <b>%d الأشخاص </b> رفضوا المهمة, المهمة ستُحبط.";
            Script::$script["fa"][Script::PU_APPRREJREMIND]
                = "انتخاب شده ها برای انجام این مأموریت: %s\n\n<b>%d ثانيه</b> وقت دارن تا انتخاب کنن <b>موافق</b> or <b>مخالف</b>. اگه حداقل <b>%d الأشخاص </b> چالش رو ناموفق کنن, چالش شکست میخوره.";


            Script::$script["en"][Script::PR_BADGUYLATESUCCESS]
                = "You answered late. Boss forced you to give the good impression this time.";
            Script::$script["id"][Script::PR_BADGUYLATESUCCESS]
                = "Jawabanmu terlambat. Boss memaksamu untuk memberikan pencitraan yang baik.";
            Script::$script["it"][Script::PR_BADGUYLATESUCCESS]
                = "Hai risposto troppo tardi. Il Boss ti ha costretto a dare una buona impressione questa volta.";
            Script::$script["cn"][Script::PR_BADGUYLATESUCCESS]
                = "你太遲做出回應，你的首領唯有命令你讓任務成功。";
            Script::$script["pb"][Script::PR_BADGUYLATESUCCESS]
                = "Você demorou demais para responder. O Rei forçou-o a dar uma boa impressão dessa vez.";
            Script::$script["ph"][Script::PR_BADGUYLATESUCCESS]
                = "Late ang sagot mo. Pinilit ka ni Boss na i-Success ang Quest upang di ka paghinalaan.(Wag kang AFK Galingan mo umActing).";
            Script::$script["es"][Script::PR_BADGUYLATESUCCESS]
                = "Contestaste tarde. El jefe te fuerza a dar una buena impresión esta vez.";
            Script::$script["zho"][Script::PR_BADGUYLATESUCCESS]
                = "你太迟做出回应，你的首领唯有命令你让任务成功。";
            Script::$script["gdh"][Script::PR_BADGUYLATESUCCESS]
                = "夠晒鐘喇，你做咩咁好人俾個任務過阿。";
            Script::$script["och"][Script::PR_BADGUYLATESUCCESS]
                = "你回應太遲，唯有命令你要令任務成功。";
            Script::$script["ar"][Script::PR_BADGUYLATESUCCESS]
                = "جاوبت متأخر. أجبرك الرئيس بإعطاء الإنطباع الجيد هذه المرة.";
            Script::$script["fa"][Script::PR_BADGUYLATESUCCESS]
                = "شما دیر جواب دادید. رئیس شما رو مجبور کرد به دادن تصور خوب برای این مرتبه.";



            Script::$script["en"][Script::PR_BADGUYLATEFAIL]
                = "You answered late. Boss forced you to fail the quest.";
            Script::$script["id"][Script::PR_BADGUYLATEFAIL]
                = "Jawabanmu terlambat. Kamu dipaksa menggagalkan quest dari boss.";
            Script::$script["it"][Script::PR_BADGUYLATEFAIL]
                = "Hai risposto troppo tardi. Il Boss ti ha costretto a FALLIRE la missione.";
            Script::$script["cn"][Script::PR_BADGUYLATEFAIL]
                = "太遲做出回應，你的首領唯有命令你讓任務失敗。";
            Script::$script["pb"][Script::PR_BADGUYLATEFAIL]
                = "Você demorou demais para responder. O Rei forçou-o a escolher pelo FRACASSO a Missão.";
            Script::$script["ph"][Script::PR_BADGUYLATEFAIL]
                = "Late ang sagot mo. Pinilit ka ni Boss na i-Fail ang Quest.(Wag kang AFK Galingan mo umActing).";
            Script::$script["es"][Script::PR_BADGUYLATEFAIL]
                = "Respondista tarde. El jefe te obliga a desechar la gesta.";
            Script::$script["zho"][Script::PR_BADGUYLATEFAIL]
                = "太迟做出回应，你的首领唯有命令你让任务失败。";
            Script::$script["gdh"][Script::PR_BADGUYLATEFAIL]
                = "夠晒鐘喇，等我幫你去破壞個任務。";
            Script::$script["och"][Script::PR_BADGUYLATEFAIL]
                = "你回應太遲，唯有命令你要令任務失敗。";
            Script::$script["ar"][Script::PR_BADGUYLATEFAIL]
                = "جاوبت متأخر. الرئيس أجبرك بإحباط هذه المهمة.";
            Script::$script["fa"][Script::PR_BADGUYLATEFAIL]
                = "شما دیر جواب دادید و رئیس شما رو مجبور به باخت در این چالش کرد.";


            Script::$script["en"][Script::PU_DISCUSSREMIND]
                = "<b>%d seconds</b> left to discuss... %s may type /done if you are ready to give the assignment.";
            Script::$script["id"][Script::PU_DISCUSSREMIND]
                = "<b>%d detik</b> lagi untuk berdiskusi... %s boleh mengetik /done jika sudah mendapat pencerahan.";
            Script::$script["it"][Script::PU_DISCUSSREMIND]
                = "<b>%d secondi</b> rimanenti per discutere... %s può usare /done se è già pronto ad assegnare gli incaricati.";
            Script::$script["cn"][Script::PU_DISCUSSREMIND]
                = "大家還有<b>%d秒</b>的時間去討論。%s，如果你決定好要委任的人選，你可以打 /done。";
            Script::$script["pb"][Script::PU_DISCUSSREMIND]
                = "Restam <b>%d segundos</b> para discussão. O Rei %s pode enviar /done se já estiver pronto para escolher.";
            Script::$script["ph"][Script::PU_DISCUSSREMIND]
                = "<b>%d segundo</b> ang nalalabi upang mag usap-usap... %s pwede i-type /done kung handa ka na magbigay ng itatalaga.";
            Script::$script["es"][Script::PU_DISCUSSREMIND]
                = "Quedan <b>%d segundos</b> para discutir. %s puede escribir el comando /done si está listo para la asignación.";
            Script::$script["zho"][Script::PU_DISCUSSREMIND]
                = "大家还有<b>%d秒</b>的时间去讨论。%s，如果你决定好要委任的人选，你可以打 /done。";
            Script::$script["gdh"][Script::PU_DISCUSSREMIND]
                = "仲剩返 <b>%d 秒</b>做討論…… %s 可以打 /done 提早提交要揀嘅人選。";
            Script::$script["och"][Script::PU_DISCUSSREMIND]
                = "現有 <b>%d 秒</b>作討論。只要決定好人選， %s 可以輸入 /done 提早完成。";
            Script::$script["ar"][Script::PU_DISCUSSREMIND]
                = "<b>%d ثانية </b> تبعت للإختيار... %s يمكنك كتابة /done إن كنت على إستعداد لإعطاء المهمة.";
            Script::$script["fa"][Script::PU_DISCUSSREMIND]
                = "<b>%d ثانيه </b> باقی مانده برای بحث... %s میتونه بنویسه /done وقتی که برای واگذاری مأموریت آماده باشید.";

            Script::$script["en"][Script::PR_LADYLATE]
                = "You answered late to see the person's identity.";
            Script::$script["id"][Script::PR_LADYLATE]
                = "Kamu terlambat memilih untuk menerawang..";
            Script::$script["it"][Script::PR_LADYLATE]
                = "Hai risposto troppo tardi per scrutare qualcuno.";
            Script::$script["cn"][Script::PR_LADYLATE]
                = "湖女，你太遲做出回應了，所以你無法查看某個人的身份。";
            Script::$script["pb"][Script::PR_LADYLATE]
                = "Você demorou a responder para revelar a identidade de alguém.";
            Script::$script["ph"][Script::PR_LADYLATE]
                = "Late ang sagot mo para magamit ang Telescope upang makita ang tunay na pagkatao ng isang Player.";
            Script::$script["es"][Script::PR_LADYLATE]
                = "Respondiste tarde la identidad de qué persona quieres ver.";
            Script::$script["zho"][Script::PR_LADYLATE]
                = "你太迟做出回应了，所以你无法查看某个人的身份。";
            Script::$script["gdh"][Script::PR_LADYLATE]
                = "夠晒鐘喇，有得俾你用湖女法力睇你唔睇，等輸啦你。";
            Script::$script["och"][Script::PR_LADYLATE]
                = "你回應太遲，不得使用湖中仙女的能力去查看。";
            Script::$script["ar"][Script::PR_LADYLATE]
                = "أجبت متأخر لترى هوية شخص.";
            Script::$script["fa"][Script::PR_LADYLATE]
                = "شما برای دیدن هویت این شخص دیر جواب دادید.";

            Script::$script["en"][Script::PU_LADYLATE]
                = "%s answered late so the power to see is not used.";
            Script::$script["id"][Script::PU_LADYLATE]
                = "%s terlambat memilih sehingga tidak bisa menerawang.";
            Script::$script["it"][Script::PU_LADYLATE]
                = "%s ha risposto troppo tardi, quindi il potere non verrà usato.";
            Script::$script["cn"][Script::PU_LADYLATE]
                = "湖女%s,太遲做出回應了，所以他無法查看某個人的身份。";
            Script::$script["pb"][Script::PU_LADYLATE]
                = "%s demorou a responder, por isso o poder da revelação não será usado.";
            Script::$script["ph"][Script::PU_LADYLATE]
                = "Si %s ay AFK hindi niya nagamit ang Telescope. Sayang!.";
            Script::$script["es"][Script::PU_LADYLATE]
                = "%s respondió tarde así que el poder de ver no es usado.";
            Script::$script["zho"][Script::PU_LADYLATE]
                = "%s 太迟做出回应了，所以他无法查看某个人的身份。";
            Script::$script["gdh"][Script::PU_LADYLATE]
                = "%s 佢冇用到佢湖女嘅法力，要做咗下個任務先有得再睇啦。";
            Script::$script["och"][Script::PU_LADYLATE]
                = "%s 回應太遲，不得使用湖中仙女的能力去查看。";
            Script::$script["ar"][Script::PU_LADYLATE]
                = "%s إختار متأخراً, لذا الطاقة لن تستخدم.";
            Script::$script["fa"][Script::PU_LADYLATE]
                = "%s دیر جواب داد و خب... از قدرت تشخیص هویت استفاده نشد.";

            Script::$script["en"][Script::PR_KILLMERLINLATE]
                = "You answered late to kill Merlin.";
            Script::$script["id"][Script::PR_KILLMERLINLATE]
                = "Kamu terlambat memilih untuk membunuh Merlin..";
            Script::$script["it"][Script::PR_KILLMERLINLATE]
                = "Hai risposto troppo tardi per uccidere Merlino.";
            Script::$script["cn"][Script::PR_KILLMERLINLATE]
                = "你太遲做出殺害梅林的選擇了。";
            Script::$script["pb"][Script::PR_KILLMERLINLATE]
                = "Você demorou a se decidir pelo assassinato de Merlin.";
            Script::$script["ph"][Script::PR_KILLMERLINLATE]
                = "Late ang sagot mo upang mapatay ang Merlin.";
            Script::$script["es"][Script::PR_KILLMERLINLATE]
                = "Respondiste tarde para matar a Merlín.";
            Script::$script["zho"][Script::PR_KILLMERLINLATE]
                = "你太迟做出杀害梅林的选择了。";
            Script::$script["gdh"][Script::PR_KILLMERLINLATE]
                = "喂，訓醒未阿？梅林走咗佬啦。";
            Script::$script["och"][Script::PR_KILLMERLINLATE]
                = "你回應太遲，不能擊殺梅林。";
            Script::$script["ar"][Script::PR_KILLMERLINLATE]
                = "لقد أجبت متأخر لتقتل مرلين.";
            Script::$script["fa"][Script::PR_KILLMERLINLATE]
                = "تو برای قتل مرلین دیر جواب دادی و مرلین با محیرضا فرار کرد.";

            Script::$script["en"][Script::PU_KILLMERLINLATE]
                = "%s answered late. It seems Merlin is saved this time.";
            Script::$script["id"][Script::PU_KILLMERLINLATE]
                = "%s terlambat memilih.. Sepertinya Merlin selamat kali ini..";
            Script::$script["it"][Script::PU_KILLMERLINLATE]
                = "%s ha risposto troppo lentamente. Sembra che sia la giornata fortunata per Merlino.";
            Script::$script["cn"][Script::PU_KILLMERLINLATE]
                = "%s太遲做出殺害梅林的選擇了。梅林幸運的逃過一劫了。";
            Script::$script["pb"][Script::PU_KILLMERLINLATE]
                = "%s demorou a se decidir. Parece que Merlin se salvou dessa vez.";
            Script::$script["ph"][Script::PU_KILLMERLINLATE]
                = "Si %s ay hindi nakapili. Mukhang ligtas ang Merlin ngayon.";
            Script::$script["es"][Script::PU_KILLMERLINLATE]
                = "%s respondió tarde. Merlín se ha salvado esta vez.";
            Script::$script["zho"][Script::PU_KILLMERLINLATE]
                = "%s 太迟做出杀害梅林的选择了。梅林幸运的逃过一劫了。";
            Script::$script["gdh"][Script::PU_KILLMERLINLATE]
                = "%s 諗咗到過晒鐘都唔行動，梅林就咁走甩咗。";
            Script::$script["och"][Script::PU_KILLMERLINLATE]
                = "%s 回應太遲，不能擊殺梅林。梅林死裡逃生了。";
            Script::$script["ar"][Script::PU_KILLMERLINLATE]
                = "%s أجاب متأخراً. يبدو أن مرلين قد نجى هذه المرة.";
            Script::$script["fa"][Script::PU_KILLMERLINLATE]
                = "%s دیر جواب داد و مرلین با خوش شانسی این مرتبه جون سالم به در برد.";

            Script::$script["en"][Script::PU_KILLMERLINREMIND]
                = "<b>%d seconds</b> left for assassin to guess and kill Merlin...";
            Script::$script["id"][Script::PU_KILLMERLINREMIND]
                = "<b>%d detik</b> lagi waktu yang dibutuhkan assassin untuk membunuh Merlin...";
            Script::$script["it"][Script::PU_KILLMERLINREMIND]
                = "<b>%d secondi</b> rimanenti all'assassino per indovinare e uccidere Merlino...";
            Script::$script["cn"][Script::PU_KILLMERLINREMIND]
                = "<b>還有%d秒</b>讓刺客去討論到底誰會才是他們要殺的梅林";
            Script::$script["pb"][Script::PU_KILLMERLINREMIND]
                = "Restam <b>%d segundos</b> para a Assassina se decidir e tentar matar Merlin...";
            Script::$script["ph"][Script::PU_KILLMERLINREMIND]
                = "<b>%d segundo</b> ang nalalabi upang mahulaan at mapaslang ng Assassin ang Merlin...";
            Script::$script["es"][Script::PU_KILLMERLINREMIND]
                = "Quedan <b>%d segundos</b> para que el asesino adivine y mate a Merlín...";
            Script::$script["zho"][Script::PU_KILLMERLINREMIND]
                = "还有 <b>%d 秒</b> 让刺客去讨论到底谁会才是他们要杀的梅林。";
            Script::$script["gdh"][Script::PU_KILLMERLINREMIND]
                = "剩返 <b>%d 秒</b> ，壞人陣營快啲討論下隊死邊個。";
            Script::$script["och"][Script::PU_KILLMERLINREMIND]
                = "現有 <b>%d 秒</b> 等待刺客猜測及按計劃一擊砍死梅林……";
            Script::$script["ar"][Script::PU_KILLMERLINREMIND]
                = "<b>%d ثانية </b> تبقت للحشاش لتخمين و قتل مرلين.";
            Script::$script["fa"][Script::PU_KILLMERLINREMIND]
                = "<b>%d ثانيه </b> برای قاتل باقی مونده برای تشخیص و قتل مرلين.";

            Script::$script["en"][Script::PU_NOHISTFOUND]
                = "No History found for the current game.";
            Script::$script["id"][Script::PU_NOHISTFOUND]
                = "Tidak ditemukan history untuk game yang sedang berlangsung.";
            Script::$script["it"][Script::PU_NOHISTFOUND]
                = "Non è stata trovata nessuna Cronologia per la partita corrente.";
            Script::$script["cn"][Script::PU_NOHISTFOUND]
                = "找不到任何關於這局遊戲的歷史記錄。";
            Script::$script["pb"][Script::PU_NOHISTFOUND]
                = "A partida atual não possui histórico.";
            Script::$script["ph"][Script::PU_NOHISTFOUND]
                = "Walang History na nakita sa kasalukuyang laro.";
            Script::$script["es"][Script::PU_NOHISTFOUND]
                = "No se ha encontrado Historial en el juego actual.";
            Script::$script["zho"][Script::PU_NOHISTFOUND]
                = "找不到任何关於这局遊戏的历史记录。";
            Script::$script["gdh"][Script::PU_NOHISTFOUND]
                = "搵唔到有關嘅歷史紀錄。";
            Script::$script["och"][Script::PU_NOHISTFOUND]
                = "找不到任何相關的歷史記錄。";
            Script::$script["ar"][Script::PU_NOHISTFOUND]
                = "لا يوجد تاريخ لهذه اللعبة بعد.";
            Script::$script["fa"][Script::PU_NOHISTFOUND]
                = "تاریخچه ای برای بازی فعلی پیدا نشد.";

            Script::$script["en"][Script::PU_HISTQEXECBY]
                = "Quest no.%d %s lead by %s %s, executed by %s";
            Script::$script["id"][Script::PU_HISTQEXECBY]
                = "Quest ke-%d %s dipimpin oleh %s %s, dieksekusi oleh %s";
            Script::$script["it"][Script::PU_HISTQEXECBY]
                = "Missione numero %d %s condotta da %s %s, eseguita da %s";
            Script::$script["cn"][Script::PU_HISTQEXECBY]
                = "任務%d %s，由國王%s %s委任，並由%s去執行。";
            Script::$script["pb"][Script::PU_HISTQEXECBY]
                = "Missão %d %s liderada por %s %s, realizada por %s";
            Script::$script["ph"][Script::PU_HISTQEXECBY]
                = "Ang Quest no.%d %s na pinamunuan ni %s %s, na isinagawa nina %s";
            Script::$script["es"][Script::PU_HISTQEXECBY]
                = "Gesta no.%d %s liderada por %s %s, ejecutada por %s";
            Script::$script["zho"][Script::PU_HISTQEXECBY]
                = "任务%d %s，由国王委任%s %s 带领，并由 %s 去执行";
            Script::$script["gdh"][Script::PU_HISTQEXECBY]
                = "第 %d 次任務 %s，由國王 %s %s帶頭，再揀咗由 %s 呢啲人做";
            Script::$script["och"][Script::PU_HISTQEXECBY]
                = "任務 %d 號 %s，由國王委派%s %s所帶領，再挑選了 %s 去執行";
            Script::$script["ar"][Script::PU_HISTQEXECBY]
                = "مهمة رقم %d %s قادها %s %s, قام بتنفيذها : %s";
            Script::$script["fa"][Script::PU_HISTQEXECBY]
                = "چالش شماره ی %d %s که هدایت میشد توسط %s %s, اجرا شد توسط : %s";

            Script::$script["en"][Script::PU_HISTQREJECTBY]
                = ", rejected by %s\n\n";
            Script::$script["id"][Script::PU_HISTQREJECTBY]
                = ", ditolak oleh %s\n\n";
            Script::$script["it"][Script::PU_HISTQREJECTBY]
                = ", rifiutata da %s\n\n";
            Script::$script["cn"][Script::PU_HISTQREJECTBY]
                = ", 被%s反對。\n\n";
            Script::$script["pb"][Script::PU_HISTQREJECTBY]
                = ", rejeitada por %s\n\n";
            Script::$script["ph"][Script::PU_HISTQREJECTBY]
                = ", ni-reject ni %s\n\n";
            Script::$script["es"][Script::PU_HISTQREJECTBY]
                = ", rechazada por %s\n\n";
            Script::$script["zho"][Script::PU_HISTQREJECTBY]
                = "，但被 %s 反对。\n\n";
            Script::$script["gdh"][Script::PU_HISTQREJECTBY]
                = "，但 %s 反對。\n\n";
            Script::$script["och"][Script::PU_HISTQREJECTBY]
                = "，但遭 %s 反對。\n\n";
            Script::$script["ar"][Script::PU_HISTQREJECTBY]
                = ", رُفضت من قِبل : %s\n\n";
            Script::$script["fa"][Script::PU_HISTQREJECTBY]
                = ", رد شد توسط: %s\n\n";

            Script::$script["en"][Script::PU_HISTQFAILREJ]
                = "Quest no.%d [%s 5x REJECT]\n\n";
            Script::$script["id"][Script::PU_HISTQFAILREJ]
                = "Quest ke-%d [%s 5x DITOLAK]\n\n";
            Script::$script["it"][Script::PU_HISTQFAILREJ]
                = "Missione numero %d [%s 5x RIFIUTI]\n\n";
            Script::$script["cn"][Script::PU_HISTQFAILREJ]
                = "任務%d [%s 5x 反對]\n\n";
            Script::$script["pb"][Script::PU_HISTQFAILREJ]
                = "Missão %d [%s REJEITADA 5x]\n\n";
            Script::$script["ph"][Script::PU_HISTQFAILREJ]
                = "Ang Quest no.%d [%s 5x REJECT]\n\n";
            Script::$script["es"][Script::PU_HISTQFAILREJ]
                = "Gesta no.%d [%s 5x RECHAZOS]\n\n";
            Script::$script["zho"][Script::PU_HISTQFAILREJ]
                = "任务%d [%s 5x 反对]\n\n";
            Script::$script["gdh"][Script::PU_HISTQFAILREJ]
                = "第 %d 次任務[%s 5 次反對]\n\n";
            Script::$script["och"][Script::PU_HISTQFAILREJ]
                = "任务 %d 號[%s 5 次否決]\n\n";
            Script::$script["ar"][Script::PU_HISTQFAILREJ]
                = "مهمة رقم %d [%s 5x رُفضت]\n\n";
            Script::$script["fa"][Script::PU_HISTQFAILREJ]
                = "چالش شماره ی  %d [%s 5x رد شد]\n\n";

            Script::$script["en"][Script::PU_FAIL5XREJ]
                = "5x REJECT";
            Script::$script["id"][Script::PU_FAIL5XREJ]
                = "5x DITOLAK";
            Script::$script["it"][Script::PU_FAIL5XREJ]
                = "5x RIFIUTI";
            Script::$script["cn"][Script::PU_FAIL5XREJ]
                = "5x 反對";
            Script::$script["pb"][Script::PU_FAIL5XREJ]
                = "REJEITADA 5x";
            Script::$script["ph"][Script::PU_FAIL5XREJ]
                = "5x REJECT";
            Script::$script["es"][Script::PU_FAIL5XREJ]
                = "5x RECHAZOS";
            Script::$script["zho"][Script::PU_FAIL5XREJ]
                = "5x 反对";
            Script::$script["gdh"][Script::PU_FAIL5XREJ]
                = "5 次反對";
            Script::$script["och"][Script::PU_FAIL5XREJ]
                = "5 次否決";
            Script::$script["ar"][Script::PU_FAIL5XREJ]
                = "5x رُفضت";
            Script::$script["fa"][Script::PU_FAIL5XREJ]
                = "5x رد کرد";

            Script::$script["en"][Script::PU_CANNOTJOINFULL]
                = " cannot join. Already %d players.";
            Script::$script["id"][Script::PU_CANNOTJOINFULL]
                = " tidak bisa bergabung. Sudah %d pemain.";
            Script::$script["it"][Script::PU_CANNOTJOINFULL]
                = " non può unirsi. Son presenti già %d giocatori.";
            Script::$script["cn"][Script::PU_CANNOTJOINFULL]
                = " 無法加入遊戲。因為此遊戲已經有 %d 名玩家。";
            Script::$script["pb"][Script::PU_CANNOTJOINFULL]
                = " não pode juntar-se. Já existem %d jogadores.";
            Script::$script["ph"][Script::PU_CANNOTJOINFULL]
                = " hindi makasali. Puno na ang %d players.";
            Script::$script["es"][Script::PU_CANNOTJOINFULL]
                = " no puede unirse. Ya hay %d jugadores.";
            Script::$script["zho"][Script::PU_CANNOTJOINFULL]
                = " 无法加入遊戏。因为遊戏已经有 %d 名玩家。";
            Script::$script["gdh"][Script::PU_CANNOTJOINFULL]
                = " 截咗龍啦。已經有 %d 名玩家排緊隊。";
            Script::$script["och"][Script::PU_CANNOTJOINFULL]
                = " 不能參加。此遊戲已經有 %d 位選手。";
            Script::$script["ar"][Script::PU_CANNOTJOINFULL]
                = "لا يمكنك الدخول. هناك %d لاعب بالفعل.";
            Script::$script["fa"][Script::PU_CANNOTJOINFULL]
                = "نمیشه عضو شد.%d وارد بازی شدن.";

            Script::$script["en"][Script::PU_CANNOTJOIN]
                = " cannot join.";
            Script::$script["id"][Script::PU_CANNOTJOIN]
                = " tidak bisa bergabung.";
            Script::$script["it"][Script::PU_CANNOTJOIN]
                = " non puoi unirti!";
            Script::$script["cn"][Script::PU_CANNOTJOIN]
                = " 無法加入遊戲。";
            Script::$script["pb"][Script::PU_CANNOTJOIN]
                = " não pode juntar-se.";
            Script::$script["ph"][Script::PU_CANNOTJOIN]
                = " hindi makasali.";
            Script::$script["es"][Script::PU_CANNOTJOIN]
                = " no puede unirse.";
            Script::$script["zho"][Script::PU_CANNOTJOIN]
                = " 无法加入遊戏。";
            Script::$script["gdh"][Script::PU_CANNOTJOIN]
                = " 個bot唔鍾意你阿，下場先join得。";
            Script::$script["och"][Script::PU_CANNOTJOIN]
                = " 不能參加。";
            Script::$script["ar"][Script::PU_CANNOTJOIN]
                = "لا يمكنك الدخول.";
            Script::$script["fa"][Script::PU_CANNOTJOIN]
                = "نمیشه وارد شد.";

            Script::$script["en"][Script::PU_STARTMEFIRST]
                = " <a href=\"http://telegram.me/%s\">Start Me</a> first.";
            Script::$script["id"][Script::PU_STARTMEFIRST]
                = " <a href=\"http://telegram.me/%s\">Start Me</a> terlebih dahulu.";
            Script::$script["it"][Script::PU_STARTMEFIRST]
                = " <a href=\"http://telegram.me/%s\">Devi Startarmi</a> prima.";
            Script::$script["cn"][Script::PU_STARTMEFIRST]
                = "記得要<a href=\"http://telegram.me/%s\">Start Me</a>先。";
            Script::$script["pb"][Script::PU_STARTMEFIRST]
                = " Deve <a href=\"http://telegram.me/%s\">iniciar-me</a> antes.";
            Script::$script["ph"][Script::PU_STARTMEFIRST]
                = " <a href=\"http://telegram.me/%s\">Start Me</a> muna.";
            Script::$script["es"][Script::PU_STARTMEFIRST]
                = " <a href=\"http://telegram.me/%s\">Comenzar</a> primero.";
            Script::$script["zho"][Script::PU_STARTMEFIRST]
                = "记得要<a href=\"http://telegram.me/%s\">按這句私联</a>先。";
            Script::$script["gdh"][Script::PU_STARTMEFIRST]
                = "記得要撳 <a href=\"http://telegram.me/%s\">Start Me</a> 先可以玩到呀。";
            Script::$script["och"][Script::PU_STARTMEFIRST]
                = "一定先要 <a href=\"http://telegram.me/%s\">按此連結與我私聊</a> 在先。";
            Script::$script["ar"][Script::PU_STARTMEFIRST]
                = " <a href=\"http://telegram.me/%s\">شغلني</a> أولاً.";
            Script::$script["fa"][Script::PU_STARTMEFIRST]
                = " <a href=\"http://telegram.me/%s\">منو استارت کن</a> اول.";

            Script::$script["en"][Script::PU_CREATEFIRST]
                = "Game has not started yet. Type /start or /startchaos to start Avalon.";
            Script::$script["id"][Script::PU_CREATEFIRST]
                = "Game belum distart. Ketik /start atau /startchaos untuk memulai Avalon.";
            Script::$script["it"][Script::PU_CREATEFIRST]
                = "La partita non è in corso. Usa /start o /startchaos per iniziare una partita Avalon.";
            Script::$script["cn"][Script::PU_CREATEFIRST]
                = "遊戲並未開始。請打 /start 或者 /startchaos 來開始阿瓦隆遊戲。";
            Script::$script["pb"][Script::PU_CREATEFIRST]
                = "A partida ainda não foi iniciada. Envie /start ou /startchaos para iniciar Avalon.";
            Script::$script["ph"][Script::PU_CREATEFIRST]
                = "Wala pang nagsimulang Laro. I-type /start o /startchaos upang simulan ang Avalon.";
            Script::$script["es"][Script::PU_CREATEFIRST]
                = "El juego no ha empezadó todavía. Escribe el comando /start o /startcaos para empezar Avalon.";
            Script::$script["zho"][Script::PU_CREATEFIRST]
                = "遊戏并未开始。请输入 /start 或者 /startchaos 来开始阿瓦隆遊戏。";
            Script::$script["gdh"][Script::PU_CREATEFIRST]
                = "遊戲都未開始，打 /start 抑或 /startchaos 開始啦。";
            Script::$script["och"][Script::PU_CREATEFIRST]
                = "遊戲尚未開始，請輸入 /start 或者 /startchaos 來開始。";
            Script::$script["ar"][Script::PU_CREATEFIRST]
                = "اللعبة لم تبدأ بعد. أكتب /start أو /startchaos لبدء أفالون.";
            Script::$script["fa"][Script::PU_CREATEFIRST]
                = "هنوز بازی شروع نشده. بنویس /start یا /startchaos برای شروع بازی.";

            Script::$script["en"][Script::PU_GAMESTART]
                = "Game has been started. Please anyone check the private message to know your role.";
            Script::$script["id"][Script::PU_GAMESTART]
                = "Game sudah dimulai. Silakan cek PM masing-masing untuk melihat peran.";
            Script::$script["it"][Script::PU_GAMESTART]
                = "La partita è iniziata. Per favore, controllate i messaggi privati per sapere il vostro ruolo.";
            Script::$script["cn"][Script::PU_GAMESTART]
                = "遊戲已經開始，所有人記得查看Bot給你的Private Message。";
            Script::$script["pb"][Script::PU_GAMESTART]
                = "A partida foi iniciada. Veriquem as conversas privadas para conhecerem seus papéis.";
            Script::$script["ph"][Script::PU_GAMESTART]
                = "Ang Laro ay nagsimula na. Pakiusap i-check ang PM upang malaman ang iyong Role.";
            Script::$script["es"][Script::PU_GAMESTART]
                = "El juego ha comenzado. Por favor que cada uno compruebe su Mensaje Privado para conocer su rol.";
            Script::$script["zho"][Script::PU_GAMESTART]
                = "遊戏已经开始，所有人记得查看机器人给你的私信。";
            Script::$script["gdh"][Script::PU_GAMESTART]
                = "遊戲已經開始，所有人都睇下 Bot 俾你嘅PM。";
            Script::$script["och"][Script::PU_GAMESTART]
                = "遊戲剛已開始，所有人請查看機械人與你的私聊信息。";
            Script::$script["ar"][Script::PU_GAMESTART]
                = "اللعبة قد بدأت. الرجاء من الجميع رؤية الرسائل الخاصة ليعرف كل لاعب دوره.";
            Script::$script["fa"][Script::PU_GAMESTART]
                = "بازی شروع شد. لطفا همه پی وی هاشون رو برای فهمیدن نقش چک کنن.";

            Script::$script["en"][Script::PU_GAMECANCEL]
                = "Game is canceled because there is not enough players. Invite your friends to join.";
            Script::$script["id"][Script::PU_GAMECANCEL]
                = "Game dibatalkan karena tidak cukup pemain. Ayo ajak teman-temanmu untuk join";
            Script::$script["it"][Script::PU_GAMECANCEL]
                = "La partita è stata annullata perchè non ci sono stati abbastanza giocatori. Invita i tuoi amici a giocare!";
            Script::$script["cn"][Script::PU_GAMECANCEL]
                = "由於不夠人，所以遊戲取消了，你趕快叫你的朋友來一起玩吧。";
            Script::$script["pb"][Script::PU_GAMECANCEL]
                = "O jogo foi cancelado por não ter atingido o número mínimo de jogadores. Convide mais pessoas para participar.";
            Script::$script["ph"][Script::PU_GAMECANCEL]
                = "Bes! kulang ang players. i-Tag ang mga tropa.";
            Script::$script["es"][Script::PU_GAMECANCEL]
                = "El juego ha sido cancelado porque no hay suficientes jugadores. Invita a tus amigos para unirse.";
            Script::$script["zho"][Script::PU_GAMECANCEL]
                = "由於不足够人数，所以遊戏取消了，你赶快叫你的朋友来一起玩吧。";
            Script::$script["gdh"][Script::PU_GAMECANCEL]
                = "冇人想同你玩喎！快啲去識多啲朋友先啦。";
            Script::$script["och"][Script::PU_GAMECANCEL]
                = "遊戲取消了，參與度嚴重不足；請你找多一些朋友一起玩吧。";
            Script::$script["ar"][Script::PU_GAMECANCEL]
                = "اللعبة ألغيت لعدم توفر لاعبين كفاية. أضف أصحابك و ألعب.";
            Script::$script["fa"][Script::PU_GAMECANCEL]
                = "بازی لغو شد چون بازیکن کافی توی بازی نبود. دوستاتون رو دعوت به بازی کنید.";



            Script::$script["en"][Script::PU_SECONDSLEFT]
                = "<b>%d seconds</b> left.";
            Script::$script["id"][Script::PU_SECONDSLEFT]
                = "<b>%d detik</b> lagi.";
            Script::$script["it"][Script::PU_SECONDSLEFT]
                = "<b>%d secondi</b> rimanenti!";
            Script::$script["cn"][Script::PU_SECONDSLEFT]
                = "還剩下<b>%d 秒</b>就。";
            Script::$script["pb"][Script::PU_SECONDSLEFT]
                = "<b>%d segundos</b> restantes.";
            Script::$script["ph"][Script::PU_SECONDSLEFT]
                = "<b>%d segundo</b> ang nalalabi.";
            Script::$script["es"][Script::PU_SECONDSLEFT]
                = "Quedan <b>%d segundos</b>.";
            Script::$script["zho"][Script::PU_SECONDSLEFT]
                = "还剩下<b>%d 秒</b>。";
            Script::$script["gdh"][Script::PU_SECONDSLEFT]
                = "仲有 <b>%d 秒</b>。";
            Script::$script["och"][Script::PU_SECONDSLEFT]
                = "餘下 <b>%d 秒</b>。";
            Script::$script["ar"][Script::PU_SECONDSLEFT]
                = "<b>%d ثانية </b> تبقت.";
            Script::$script["fa"][Script::PU_SECONDSLEFT]
                = "<b>%d ثانيه </b> مونده.";

            Script::$script["en"][Script::PU_JOINREMIND]
                = "<b>%d seconds</b> left. Invite your friends to /join. Use /forcestart to immediately start the game.";
            Script::$script["id"][Script::PU_JOINREMIND]
                = "<b>%d detik</b> lagi. Ayo ajak teman-temanmu untuk /join. Gunakan /forcestart untuk langsung memulai game.";
            Script::$script["it"][Script::PU_JOINREMIND]
                = "<b>%d secondi</b> rimanenti! Invita i tuoi amici a usare /join. Use /forcestart to immediately start the game.";
            Script::$script["cn"][Script::PU_JOINREMIND]
                = "還剩下<b>%d 秒</b>就開始遊戲，趕快叫你朋友 /join 一起玩吧。想提早開始遊戲請打 /forcestart 。";
            Script::$script["pb"][Script::PU_JOINREMIND]
                = "<b>%d segundos</b> restantes. Convide mais pessoas para enviar /join. Use /forcestart to immediately start the game.";
            Script::$script["ph"][Script::PU_JOINREMIND]
                = "<b>%d segundo</b> ang nalalabi. Mga Bes i-Tag na mga tropa now na /join. Use /forcestart to immediately start the game.";
            Script::$script["es"][Script::PU_JOINREMIND]
                = "Quedan <b>%d segundos</b>. Invita a tus amigos a que escriban el comando /join. Use /forcestart to immediately start the game.";
            Script::$script["zho"][Script::PU_JOINREMIND]
                = "还剩下<b>%d 秒</b> 就开始遊戏，赶快叫你朋友 /join 一起玩吧。Use /forcestart to immediately start the game.";
            Script::$script["gdh"][Script::PU_JOINREMIND]
                = "仲有 <b>%d 秒</b>就開始，未入嘅好快啲 /join 。湊齊人想開始嘅就 /forcestart 。";
            Script::$script["och"][Script::PU_JOINREMIND]
                = "餘下 <b>%d 秒</b> 就開始，請邀請更多人輸入 /join 一起玩吧。Use /forcestart to immediately start the game.";
            Script::$script["ar"][Script::PU_JOINREMIND]
                = "<b>%d ثانية </b> تبقت. أضف أصحابك ليلعبون /join. Use /forcestart to immediately start the game.";
            Script::$script["fa"][Script::PU_JOINREMIND]
                = "<b>%d ثانيه </b> مونده. وارد بشید و یا دوستاتون رو دعوت به بازی کنید /join. Use /forcestart to immediately start the game.";

            Script::$script["en"][Script::PU_JOINSTART]
                = "%s has started the Avalon - %s. Type /join to join the game.";
            Script::$script["id"][Script::PU_JOINSTART]
                = "%s telah memulai Avalon - %s. Ketik /join untuk bergabung.";
            Script::$script["it"][Script::PU_JOINSTART]
                = "%s ha iniziato una partita ad Avalon, modalità %s. Usa /join per unirti!";
            Script::$script["cn"][Script::PU_JOINSTART]
                = "%s 開始了阿瓦隆遊戲- %s 。快打 /join 加入遊戲吧。";
            Script::$script["pb"][Script::PU_JOINSTART]
                = "%s iniciou Avalon - %s. Envie /join para juntar-se à partida.";
            Script::$script["ph"][Script::PU_JOINSTART]
                = "Si %s ay sinimulan ang Avalon - %s. I-type /join upang makasali sa Laro.";
            Script::$script["es"][Script::PU_JOINSTART]
                = "%s ha comenzado un Avalon - %s. Escribe el comando /join para unirte.";
            Script::$script["zho"][Script::PU_JOINSTART]
                = "%s 开了阿瓦隆遊戏 - %s 模式。快打 /join 加入遊戏吧。";
            Script::$script["gdh"][Script::PU_JOINSTART]
                = "%s 開咗個新一場 Avalon 遊戲 - %s 版。快啲打 /join 一齊玩吧。";
            Script::$script["och"][Script::PU_JOINSTART]
                = "%s 剛建立新一輪阿瓦隆遊戲 - 採用 %s 模式。Normal 為正常模式，Chaos 為混亂模式。快些輸入 /join 參加遊戲。";
            Script::$script["ar"][Script::PU_JOINSTART]
                = "%s قد بدأ أفالون %s. أكتب /join للدخول إلى اللعبة.";
            Script::$script["fa"][Script::PU_JOINSTART]
                = "%s بازی رو راه انداخت %s. بنویس /join برای ورود به بازی.";

            Script::$script["en"][Script::PU_JOINSUCCESS]
                = "%s joined. <b>%d</b> players. min <b>%d</b>. max <b>%d</b>.";
            Script::$script["id"][Script::PU_JOINSUCCESS]
                = "%s bergabung. <b>%d</b> pemain. min <b>%d</b>. max <b>%d</b>.";
            Script::$script["it"][Script::PU_JOINSUCCESS]
                = "%s si è unito. <b>%d</b> giocatori. <b>%d</b> minimo, <b>%d</b> massimo.";
            Script::$script["cn"][Script::PU_JOINSUCCESS]
                = "%s加入了遊戲。現在有 <b>%d</b>名玩家。最少<b>%d</b>人。最多<b>%d</b>人。";
            Script::$script["pb"][Script::PU_JOINSUCCESS]
                = "%s juntou-se. Total de <b>%d</b> jogadores. Mínimo de <b>%d</b> e máximo de <b>%d</b>.";
            Script::$script["ph"][Script::PU_JOINSUCCESS]
                = "Si %s ay sumali. <b>%d</b> players. min <b>%d</b>. max <b>%d</b>.";
            Script::$script["es"][Script::PU_JOINSUCCESS]
                = "%s se unió. <b>%d</b> jugadores. min <b>%d</b>. max <b>%d</b>.";
            Script::$script["zho"][Script::PU_JOINSUCCESS]
                = "%s 加入了遊戏。现在有 <b>%d</b> 名玩家。最少 <b>%d</b> 人；最多 <b>%d</b> 人。";
            Script::$script["gdh"][Script::PU_JOINSUCCESS]
                = "%s 加入咗。而家有 <b>%d</b> 名玩家。最少要 <b>%d</b> 人；最多有 <b>%d</b> 人。";
            Script::$script["och"][Script::PU_JOINSUCCESS]
                = "%s 參加了。現時有 <b>%d</b> 位選手。最少要 <b>%d</b> 人；最多有 <b>%d</b> 人。";
            Script::$script["ar"][Script::PU_JOINSUCCESS]
                = "%s دخلوا. <b>%d</b> لاعبين. أقل حد <b>%d</b>. أقصى حد <b>%d</b>.";
            Script::$script["fa"][Script::PU_JOINSUCCESS]
                = "%s وارد شد. <b>%d</b> بازیکن. حداقل <b>%d</b>. و حداکثر <b>%d</b>.";

            Script::$script["en"][Script::PU_FLEE_SUCCESS]
                = "%s fleed. <b>%d</b> players remaining.";
            Script::$script["id"][Script::PU_FLEE_SUCCESS]
                = "%s kabur. <b>%d</b> pemain tersisa.";
            Script::$script["it"][Script::PU_FLEE_SUCCESS]
                = "%s è fuggito. <b>%d</b> giocatori rimanenti.";
            Script::$script["cn"][Script::PU_FLEE_SUCCESS]
                = "%s 離開了遊戲。現在還剩下<b>%d</b>名玩家。";
            Script::$script["pb"][Script::PU_FLEE_SUCCESS]
                = "%s saiu. <b>%d</b> jogadores restantes.";
            Script::$script["ph"][Script::PU_FLEE_SUCCESS]
                = "Si %s ay Natakot. <b>%d</b> players ang natira. Uso talaga ang Iwanan.";
            Script::$script["es"][Script::PU_FLEE_SUCCESS]
                = "%s abandonó. Quedan <b>%d</b> jugadores.";
            Script::$script["zho"][Script::PU_FLEE_SUCCESS]
                = "%s 离开了遊戏。现在还剩下 <b>%d</b> 名玩家。";
            Script::$script["gdh"][Script::PU_FLEE_SUCCESS]
                = "%s 走咗佬。而家只剩低 <b>%d</b> 個玩家。";
            Script::$script["och"][Script::PU_FLEE_SUCCESS]
                = "%s 放棄此遊戲。現在還剩下 <b>%d</b> 位選手。";
            Script::$script["ar"][Script::PU_FLEE_SUCCESS]
                = "%s هرب. <b>%d</b> لاعبين تبقوا.";
            Script::$script["fa"][Script::PU_FLEE_SUCCESS]
                = "%s بازی رو ترک کرد. <b>%d</b> باقی مونده.";

            Script::$script["en"][Script::PU_FLEE_FAIL]
                = "%s cannot flee. The game has already started.";
            Script::$script["id"][Script::PU_FLEE_FAIL]
                = "%s tidak dapat kabur. Game sudah dimulai";
            Script::$script["it"][Script::PU_FLEE_FAIL]
                = "%s non può fuggire! Il gioco è già iniziato!";
            Script::$script["cn"][Script::PU_FLEE_FAIL]
                = "%s 無法離開遊戲，因為遊戲已經開始了。";
            Script::$script["pb"][Script::PU_FLEE_FAIL]
                = "%s não pode sair. A partida já foi iniciada.";
            Script::$script["ph"][Script::PU_FLEE_FAIL]
                = "%s wala ng iwanan to. Rock na tayo.";
            Script::$script["es"][Script::PU_FLEE_FAIL]
                = "%s no puede abandoner. El juego ya ha comenzado.";
            Script::$script["zho"][Script::PU_FLEE_FAIL]
                = "%s 无法离开遊戏，因为遊戏已经开始了。";
            Script::$script["gdh"][Script::PU_FLEE_FAIL]
                = "%s 急到瀨但走唔切，遊戲已經開始咗。";
            Script::$script["och"][Script::PU_FLEE_FAIL]
                = "%s 無得放棄遊戲，遊戲已經開始了。";
            Script::$script["ar"][Script::PU_FLEE_FAIL]
                = "%s لا يمكنك الهروب. اللعبة قد بدأت بالفعل.";
            Script::$script["fa"][Script::PU_FLEE_FAIL]
                = "%s نمی تونی فرار کنی. بازی شروع شده ترسوی کوچولو.";

            Script::$script["en"][Script::PU_NEED_MORE_PLAYERS]
                = "We need minimum %d players to start the game.";
            Script::$script["id"][Script::PU_NEED_MORE_PLAYERS]
                = "Dibutuhkan min %d pemain untuk memulai game.";
            Script::$script["it"][Script::PU_NEED_MORE_PLAYERS]
                = "Ci servono almeno %d giocatori per iniziare la partita.";
            Script::$script["cn"][Script::PU_NEED_MORE_PLAYERS]
                = "至少需要 %d名玩家才能玩阿瓦隆。";
            Script::$script["pb"][Script::PU_NEED_MORE_PLAYERS]
                = "São necessários, no mínimo, %d jogadores para iniciar a partida.";
            Script::$script["ph"][Script::PU_NEED_MORE_PLAYERS]
                = "Kailangan naten min %d players upang masimulan na ang Laro.";
            Script::$script["es"][Script::PU_NEED_MORE_PLAYERS]
                = "Se necesitan un mínimo de %d jugadores para empezar.";
            Script::$script["zho"][Script::PU_NEED_MORE_PLAYERS]
                = "至少需要 %d 名玩家才能玩阿瓦隆遊戲。";
            Script::$script["gdh"][Script::PU_NEED_MORE_PLAYERS]
                = "要起碼 %d 名玩家先開到Game。";
            Script::$script["och"][Script::PU_NEED_MORE_PLAYERS]
                = "至少需要 %d 位選手才能開始阿瓦隆遊戲。";
            Script::$script["ar"][Script::PU_NEED_MORE_PLAYERS]
                = "نحتاج على الأقل %d لاعبين لبدء اللعبة.";
            Script::$script["fa"][Script::PU_NEED_MORE_PLAYERS]
                = "برای شروع بازی حداقل %d بازیکن نیاز داریم.";

            Script::$script["en"][Script::PU_REQUEST_STOP]
                = "%s requested to cancel the game. <b>%d</b> of <b>%d</b>.";
            Script::$script["id"][Script::PU_REQUEST_STOP]
                = "%s ingin membatalkan permainan. <b>%d</b> dari <b>%d</b>.";
            Script::$script["it"][Script::PU_REQUEST_STOP]
                = "%s ha richiesto di cancellare la partita. <b>%d</b> o <b>%d</b>.";
            Script::$script["cn"][Script::PU_REQUEST_STOP]
                = "%s 要求取消遊戲。 <b>%d</b>of<b>%d</b>.";
            Script::$script["pb"][Script::PU_REQUEST_STOP]
                = "%s solicitou o cancelamento da partida. <b>%d</b> de <b>%d</b>.";
            Script::$script["ph"][Script::PU_REQUEST_STOP]
                = "Si %s ay nag-request na ihinto ang Laro. <b>%d</b> of <b>%d</b>.";
            Script::$script["es"][Script::PU_REQUEST_STOP]
                = "%s solicitó cancelar el juego. <b>%d</b> de <b>%d</b>.";
            Script::$script["zho"][Script::PU_REQUEST_STOP]
                = "%s 要取消遊戏。 <b>%d</b>赞成，<b>%d</b>。";
            Script::$script["gdh"][Script::PU_REQUEST_STOP]
                = "%s 要求中止遊戲，有 <b>%d</b> 票贊成，總數要 <b>%d</b> 票。";
            Script::$script["och"][Script::PU_REQUEST_STOP]
                = "%s 要求取消遊戲。票數有 <b>%d</b> 票，總共要 <b>%d</b> 票。";
            Script::$script["ar"][Script::PU_REQUEST_STOP]
                = "%s طلب بإلغاء اللعبة. <b>%d</b> من <b>%d</b>.";
            Script::$script["fa"][Script::PU_REQUEST_STOP]
                = "%s خواست بازی لغو بشه. <b>%d</b> از <b>%d</b>.";


            Script::$script["en"][Script::PU_REQUEST_START]
                = "%s requests to start the game. <b>%d</b> of <b>%d</b>.";
            Script::$script["id"][Script::PU_REQUEST_START]
                = "%s ingin memulai permainan. <b>%d</b> dari <b>%d</b>.";
            Script::$script["it"][Script::PU_REQUEST_START]
                = "%s requests to start the game. <b>%d</b> of <b>%d</b>.";
            Script::$script["cn"][Script::PU_REQUEST_START]
                = "%s 要求開始遊戲。 <b>%d</b>of<b>%d</b>.";
            Script::$script["pb"][Script::PU_REQUEST_START]
                = "%s requests to start the game. <b>%d</b> of <b>%d</b>.";
            Script::$script["ph"][Script::PU_REQUEST_START]
                = "%s requests to start the game. <b>%d</b> of <b>%d</b>.";
            Script::$script["es"][Script::PU_REQUEST_START]
                = "%s requests to start the game. <b>%d</b> of <b>%d</b>.";
            Script::$script["zho"][Script::PU_REQUEST_START]
                = "%s requests to start the game. <b>%d</b> of <b>%d</b>.";
            Script::$script["gdh"][Script::PU_REQUEST_START]
                = "%s 要求開始遊戲，有 <b>%d</b> 票贊成，總數要 <b>%d</b> 票。";
            Script::$script["och"][Script::PU_REQUEST_START]
                = "%s requests to start the game. <b>%d</b> of <b>%d</b>.";
            Script::$script["ar"][Script::PU_REQUEST_START]
                = "%s requests to start the game. <b>%d</b> of <b>%d</b>.";
            Script::$script["fa"][Script::PU_REQUEST_START]
                = "%s requests to start the game. <b>%d</b> of <b>%d</b>.";


            Script::$script["en"][Script::PU_STOP_SUCCESS]
                = "The game is canceled.";
            Script::$script["id"][Script::PU_STOP_SUCCESS]
                = "Permainan dibatalkan.";
            Script::$script["it"][Script::PU_STOP_SUCCESS]
                =  "La partita è stata cancellata.";
            Script::$script["cn"][Script::PU_STOP_SUCCESS]
                =  "遊戲已經被取消。";
            Script::$script["pb"][Script::PU_STOP_SUCCESS]
                =  "A partida foi canceladahe game is canceled.";
            Script::$script["ph"][Script::PU_STOP_SUCCESS]
                =  "Ang Larong ito ay nahinto na.";
            Script::$script["es"][Script::PU_STOP_SUCCESS]
                =  "El juego se ha cancelado.";
            Script::$script["zho"][Script::PU_STOP_SUCCESS]
                =  "遊戏已经被取消。";
            Script::$script["gdh"][Script::PU_STOP_SUCCESS]
                =  "遊戲已取消。";
            Script::$script["och"][Script::PU_STOP_SUCCESS]
                =  "遊戲已被取消。";
            Script::$script["ar"][Script::PU_STOP_SUCCESS]
                = "اللعبة ألغيت.";
            Script::$script["fa"][Script::PU_STOP_SUCCESS]
                = "بازی لغو شده.";

            Script::$script["en"][Script::PR_QUEUE_ME]
                = "You have registered yourself to the next Avalon Game in %s group. Do not forget to /join when the game start. :D";
            Script::$script["id"][Script::PR_QUEUE_ME]
                = "Kamu sudah mendaftarkan diri pada permainan Avalon berikutnya di grup %s. Jangan lupa untuk /join saat game dimulai. :D";
            Script::$script["it"][Script::PR_QUEUE_ME]
                =  "Sei in lista d'attesa per la prossima partita di Avalon nel gruppo %s. Non scordarti di unirti quando la partita inizierà! :D";
            Script::$script["cn"][Script::PR_QUEUE_ME]
                =  "你已經在%s群組準備玩下一場的Avalon遊戲了。請在新遊戲開始時，打 /join 。:D";
            Script::$script["pb"][Script::PR_QUEUE_ME]
                =  "Você se inscreveu para a próxima partida de Avalon no grupo %s. Não se esqueça de enviar /join quando a partida começar! :D";
            Script::$script["ph"][Script::PR_QUEUE_ME]
                =  "Hintay lang Bes sa PM sa susunod na Larong Avalon sa grupong %s. Huwag kalimutang mag /join kapag nasimulan na ang laro. :D";
            Script::$script["es"][Script::PR_QUEUE_ME]
                =  "Te has registrado para la próxima partida de Avalon en el grupo %s. No olvides de escribir el comando /join cuando el juego comience. :D";
            Script::$script["zho"][Script::PR_QUEUE_ME]
                =  "你已经注册在 %s 群组準备玩下一场的遊戏了。请在新遊戏开始时，切记输入 /join 。:D";
            Script::$script["gdh"][Script::PR_QUEUE_ME]
                =  "你已經喺 %s 嗰邊攞咗籌玩下一鋪。一有新遊戲就會收到通知，到時去返群組入面打 /join 就得。:D";
            Script::$script["och"][Script::PR_QUEUE_ME]
                =  "你已經註冊 %s 群組的下一場阿瓦隆遊戲。請在新遊戲開始之時，輸入 /join。:D";
            Script::$script["ar"][Script::PR_QUEUE_ME]
                = "لقد سجلت نفسك في لعبة أفالون في مجموعة%s . لا تنسى بأن تكتب /join عندما تبدأ اللعبة :D";
            Script::$script["fa"][Script::PR_QUEUE_ME]
                = "شما ثبت نام کردید برای بازی بعدی در گروه%s . یادت نره که /join رو برای عضویت تو بازی بعدی بنویسی :D";

            Script::$script["en"][Script::PR_QUEUE_CALL]
                = "The Avalon game is going to start in %s group.";
            Script::$script["id"][Script::PR_QUEUE_CALL]
                = "Permainan Avalon akan dimulai di grup %s.";
            Script::$script["it"][Script::PR_QUEUE_CALL]
                =  "È iniziata una nuova partita Avalon nel gruppo %s.";
            Script::$script["cn"][Script::PR_QUEUE_CALL]
                =  "%s群組將會開始新的阿瓦隆遊戲。";
            Script::$script["pb"][Script::PR_QUEUE_CALL]
                =  "Uma partida de Avalon vai começar no grupo %s.";
            Script::$script["ph"][Script::PR_QUEUE_CALL]
                =  "Ang larong Avalon ay nagsimula na sa grupong %s.";
            Script::$script["es"][Script::PR_QUEUE_CALL]
                =  "La partida de Avalon va a empezar en el grupo %s.";
            Script::$script["zho"][Script::PR_QUEUE_CALL]
                =  "%s 群组将会开始新的阿瓦隆遊戏。";
            Script::$script["gdh"][Script::PR_QUEUE_CALL]
                =  "%s 有人開咗 Avalon 亞法隆遊戲，入去 join 啦。";
            Script::$script["och"][Script::PR_QUEUE_CALL]
                =  "%s 群組即將開始新遊戲。";
            Script::$script["ar"][Script::PR_QUEUE_CALL]
                = "لعبة أفالون ستبدأ في مجموعة %s .";
            Script::$script["fa"][Script::PR_QUEUE_CALL]
                = "یه بازی جدید توی گروه %s داره شروع میشه.";

            Script::$script["en"][Script::PR_QUEUE_FULL]
                = "You cannot join for the avalon next game. The queue is full. Try to start the game!";
            Script::$script["id"][Script::PR_QUEUE_FULL]
                = "Kamu tidak bisa bergabung ke permainan avalon berikutnya. Antrian penuh. Cobalah untuk memulai permainan!";
            Script::$script["it"][Script::PR_QUEUE_FULL]
                =  "Non puoi metterti in coda per la prossima partita di Avalon. la coda è piena. Prova a iniziare una partita!";
            Script::$script["cn"][Script::PR_QUEUE_FULL]
                =  "因為有人數已經爆滿，所以你現在不能玩阿瓦隆遊戲，請在之後嘗試啟動遊戲吧。";
            Script::$script["pb"][Script::PR_QUEUE_FULL]
                =  "Não foi possível se inscrever para a próxima partida de Avalon. A fila de espera está cheia. Que tal iniciar uma partida?";
            Script::$script["ph"][Script::PR_QUEUE_FULL]
                =  "Puno na ang mga naghihintay Bes. Subukan mong simulan ang laro!";
            Script::$script["es"][Script::PR_QUEUE_FULL]
                =  "No puedes unirte a la siguiente partida de Avalon. La cola está llena. ¡Intenta empezar el juego!";
            Script::$script["zho"][Script::PR_QUEUE_FULL]
                =  "因为有人数已满，所以你现在不能玩阿瓦隆遊戏，请在之後尝试启动遊戏吧。";
            Script::$script["gdh"][Script::PR_QUEUE_FULL]
                =  "今場 Avalon 亞法隆嘅滿晒，無得玩，下場啦。";
            Script::$script["och"][Script::PR_QUEUE_FULL]
                =  "人數已滿，不能參加阿瓦隆遊戲，請延後再嘗試吧。";
            Script::$script["ar"][Script::PR_QUEUE_FULL]
                = "لا يمكنك الدخول في لعبة أفالون القادمة. قائمة الإنتظار ممتلئة. جرب أن تبدأ اللعبة.";
            Script::$script["fa"][Script::PR_QUEUE_FULL]
                = "تو نمیتونی برای بازی بعد ثبت نام کنی چون سالن انتظار پر شده! سعی کن به موقع خودتو به بازی برسونی.";

            Script::$script["en"][Script::PU_IN_PROGRESS]
                = "In Progress~";
            Script::$script["id"][Script::PU_IN_PROGRESS]
                = "Sdg berlangsung";
            Script::$script["it"][Script::PU_IN_PROGRESS]
                = "In Corso~";
            Script::$script["cn"][Script::PU_IN_PROGRESS]
                = "在進行中";
            Script::$script["pb"][Script::PU_IN_PROGRESS]
                = "Em andamento~";
            Script::$script["ph"][Script::PU_IN_PROGRESS]
                = "In Progress~";
            Script::$script["es"][Script::PU_IN_PROGRESS]
                = "En Progreso~";
            Script::$script["zho"][Script::PU_IN_PROGRESS]
                = "正在迸行中……";
            Script::$script["gdh"][Script::PU_IN_PROGRESS]
                = "我忙緊，你等下先……";
            Script::$script["och"][Script::PU_IN_PROGRESS]
                = "正在進行中……";
            Script::$script["ar"][Script::PU_IN_PROGRESS]
                = "يتم الآن...";
            Script::$script["fa"][Script::PU_IN_PROGRESS]
                = "درحال پردازش...";

            Script::$script["en"][Script::NORMAL_MODE]
                = "Normal Mode";
            Script::$script["id"][Script::NORMAL_MODE]
                = "Mode Normal";
            Script::$script["it"][Script::NORMAL_MODE]
                = "Modalità Normale";
            Script::$script["cn"][Script::NORMAL_MODE]
                = "Normal Mode";
            Script::$script["pb"][Script::NORMAL_MODE]
                = "Normal Mode";
            Script::$script["ph"][Script::NORMAL_MODE]
                = "Normal Mode";
            Script::$script["es"][Script::NORMAL_MODE]
                = "Normal Mode";
            Script::$script["zho"][Script::NORMAL_MODE]
                = "正常模式";
            Script::$script["gdh"][Script::NORMAL_MODE]
                = "正常版";
            Script::$script["och"][Script::NORMAL_MODE]
                = "正常模式";
            Script::$script["ar"][Script::NORMAL_MODE]
                = "النمط الطبيعي";
            Script::$script["fa"][Script::NORMAL_MODE]
                = "حالت عادی";

            Script::$script["en"][Script::CHAOS_MODE]
                = "Chaos Mode";
            Script::$script["id"][Script::CHAOS_MODE]
                = "Mode Chaos";
            Script::$script["it"][Script::CHAOS_MODE]
                = "Modalità Chaos";
            Script::$script["cn"][Script::CHAOS_MODE]
                = "Chaos Mode";
            Script::$script["pb"][Script::CHAOS_MODE]
                = "Chaos Mode";
            Script::$script["ph"][Script::CHAOS_MODE]
                = "Chaos Mode";
            Script::$script["es"][Script::CHAOS_MODE]
                = "Chaos Mode";
            Script::$script["zho"][Script::CHAOS_MODE]
                = "混乱模式";
            Script::$script["gdh"][Script::CHAOS_MODE]
                = "混亂版";
            Script::$script["och"][Script::CHAOS_MODE]
                = "混亂模式";
            Script::$script["ar"][Script::CHAOS_MODE]
                = "الوضع الفوضوي.";
            Script::$script["fa"][Script::CHAOS_MODE]
                = "حالت هرج و مرج.";

            // NEW
            Script::$script["en"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " No Lancelot";
            Script::$script["id"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " No Lancelot";
            Script::$script["it"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " Nessun Lancillotto";
            Script::$script["cn"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " 沒有蘭斯洛特的存在";
            Script::$script["pb"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " No Lancelot";
            Script::$script["ph"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " No Lancelot";
            Script::$script["es"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " No Lancelot";
            Script::$script["zho"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " 没有兰斯洛特";
            Script::$script["gdh"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " 蘭斯洛特";
            Script::$script["och"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " 沒有蘭斯洛特";
            Script::$script["ar"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " بدون لانسوت";
            Script::$script["fa"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " بدون لنسلات";

            // NEW
            Script::$script["en"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v1";
            Script::$script["id"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v1";
            Script::$script["it"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancillotto v1";
            Script::$script["cn"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " 蘭斯洛特 分支1";
            Script::$script["pb"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v1";
            Script::$script["ph"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v1";
            Script::$script["es"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v1";
            Script::$script["zho"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " 兰斯洛特 变体 1";
            Script::$script["gdh"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " 蘭斯洛特 支線 1";
            Script::$script["och"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " 蘭斯洛特 變體 1";
            Script::$script["ar"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " لانسوت الإصدار الأول";
            Script::$script["fa"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " لنسلات ورژن 1";

            // NEW
            Script::$script["en"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v2";
            Script::$script["id"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v2";
            Script::$script["it"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancillotto v2";
            Script::$script["cn"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " 蘭斯洛特 分支2";
            Script::$script["pb"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v2";
            Script::$script["ph"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v2";
            Script::$script["es"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v2";
            Script::$script["zho"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " 兰斯洛特 变体 2";
            Script::$script["gdh"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " 蘭斯洛特 支線 2";
            Script::$script["och"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " 蘭斯洛特 變體 2";
            Script::$script["ar"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " لانسوت الإصدار الثاني";
            Script::$script["fa"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " لنسلات ورژن 2";

            // NEW
            Script::$script["en"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>Variant 1 is selected</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n";
            Script::$script["id"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>Variant 1 dipilih</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." dan ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." akan masuk ke permainan.\n"
                ."Keduanya dapat bertukar peran selama permainan.\n\n";
            Script::$script["it"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>La prima Variante è selezionata</b>\n"
                .Script::$script["en"][Script::GOOD_LANCELOT]
                ." e ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." saranno presenti in partita.\n"
                ."Entrambi potrebbero scambiarsi di fazione in partita.\n\n";
            Script::$script["cn"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>分支1 被選擇了。</b>\n"
                . Script::$script["cn"][Script::GOOD_LANCELOT]
                ." 和 ".Script::$script["cn"][Script::EVIL_LANCELOT]
                ." 會出現在遊戲裡面。\n"
                ."另外在遊戲進行中，這2個角色可能會有機會出現互相調換的情況.\n\n";
            Script::$script["pb"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>Variant 1 is selected</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n";
            Script::$script["ph"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>Variant 1 is selected</b>\n Ang "
                .Script::$script["en"][Script::GOOD_LANCELOT]
                ." at ".Script::$script["ph"][Script::EVIL_LANCELOT]
                ." ay sasali sa laro.\n"
                ."Silang dalawa ay maaaring magbago ang katapatan at maging Taksil.\n\n";
            Script::$script["es"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>Variant 1 is selected</b>\n"
                .Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n";
            Script::$script["zho"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>Variant 1 is selected</b>\n"
                .Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n";
            Script::$script["gdh"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>揀咗 支線 1 </b>\n"
                .Script::$script["gdh"][Script::GOOD_LANCELOT]
                ." 同 ".Script::$script["gdh"][Script::EVIL_LANCELOT]
                ." 會出現喺遊戲裡面。\n"
                ."喺遊戲玩緊嘅時候，依2個角色有機會出現互相調換嘅情況。\n\n";
            Script::$script["och"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>Variant 1 is selected</b>\n"
                .Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n";
            Script::$script["ar"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>الإصدار الأول قد تم إختياره</b>\n"
                . Script::$script["ar"][Script::GOOD_LANCELOT]
                ." و ".Script::$script["ar"][Script::EVIL_LANCELOT]
                ." الأدوار ستدخل في اللعبة \n"
                ."كل الدورين قد يتم تغيير ولاءهما خلال اللعبة. \n\n";
            Script::$script["fa"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>لنسلات ورژن 1 انتخاب شد</b>\n"
                . Script::$script["fa"][Script::GOOD_LANCELOT]
                ." و ".Script::$script["fa"][Script::EVIL_LANCELOT]
                ." نقش ها وارد بازی خواهند شد \n"
                ."هر دو نقش ممکن است در طول بازی تغییر کنند. \n\n";

            // NEW
            Script::$script["en"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>Variant 2 is selected</b>\n"
                .Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n"
                ."In this variant, Evil Lancelot must fail the quest he is on.\n\n";
            Script::$script["id"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>Variant 2 dipilih</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." dan ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." akan masuk dalam permainan.\n"
                ."Keduanya dapat bertukar peran selama permainan.\n\n"
                ."Di varian ini, Evil Lancelot harus memberikan FAIL di misi yang diikutinya\n\n";
            Script::$script["it"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>La seconda variante</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." e ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." saranno presenti in partita.\n"
                ."Entrambi potrebbero cambiare fazione in partita.\n\n"
                ."In questa variante, Il Lancillotto cattivo deve fallire la quest che sta svolgendo.\n\n";
            Script::$script["cn"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>分支2 被選擇了。</b>\n"
                . Script::$script["cn"][Script::GOOD_LANCELOT]
                ." 和 ".Script::$script["cn"][Script::EVIL_LANCELOT]
                ." 會出現在遊戲裡面。\n"
                ."另外在遊戲進行中，這2個角色可能會有機會出現互相調換的情況.\n\n"
                ."在這個分支裡面，邪惡的蘭斯洛特在執行任務的時候一定只能讓任務失敗。\n\n";
            Script::$script["pb"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>Variant 2 is selected</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n"
                ."In this variant, Evil Lancelot must fail the quest he is on.\n\n";
            Script::$script["ph"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>Variant 2 is selected</b>\n Ang "
                . Script::$script["ph"][Script::GOOD_LANCELOT]
                ." at ".Script::$script["ph"][Script::EVIL_LANCELOT]
                ." ay sasali sa laro.\n"
                ."Silang dalawa ay maaaring magbago ang katapatan at maging Taksil.\n\n"
                ."Sa variant na ito, Ang Evil Lancelot ay kailangang i-fail ang Quest kung saan siya kabilang.";
            Script::$script["es"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>Variant 2 is selected</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n"
                ."In this variant, Evil Lancelot must fail the quest he is on.\n\n";
            Script::$script["zho"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>Variant 2 is selected</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n"
                ."In this variant, Evil Lancelot must fail the quest he is on.\n\n";
            Script::$script["gdh"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>揀咗 支線 2 </b>\n"
                . Script::$script["gdh"][Script::GOOD_LANCELOT]
                ." 同 ".Script::$script["gdh"][Script::EVIL_LANCELOT]
                ." 會出現喺遊戲裡面。\n"
                ."喺遊戲玩緊嘅時候，依 2 個角色有機會出現互相調換嘅情況。\n\n"
                ."支線2入面，邪惡蘭斯洛特有份執行任務嘅時候會自動揀失敗。\n\n";
            Script::$script["och"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>Variant 2 is selected</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n"
                ."In this variant, Evil Lancelot must fail the quest he is on.\n\n";
            Script::$script["ar"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>الإصدار الثاني قد تم إختياره</b>\n"
                .Script::$script["en"][Script::GOOD_LANCELOT]
                ." و ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." الأدوار ستدخل في اللعبة. \n"
                ."كل الدورين سيتم تغيير ولاءهما خلال اللعبة. \n\n"
                ."في هذا الإصدار, اللانسوت الشرير يجب عليه أن يفشل في أي مهمة هو فيها. \n\n";
            Script::$script["fa"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>لنسلات ورژن 2 انتخاب شد.</b>\n"
                .Script::$script["en"][Script::GOOD_LANCELOT]
                ." و ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." نقش ها وارد بازی خواهند شد. \n"
                ."نقش ها ممکنه در طول بازی تغییر کنن. \n\n"
                ."در این حالت لنسلات شیطانی باید حتما توی چالشی که هست ببازه. \n\n";

            Script::$script["en"][Script::PLAY_TIME]
                = "played %d times";
            Script::$script["id"][Script::PLAY_TIME]
                = "dimainkan %d kali";
            Script::$script["it"][Script::PLAY_TIME]
                = "giocato %d volte";
            Script::$script["cn"][Script::PLAY_TIME]
                = "played %d times";
            Script::$script["pb"][Script::PLAY_TIME]
                = "played %d times";
            Script::$script["ph"][Script::PLAY_TIME]
                = "played %d times";
            Script::$script["es"][Script::PLAY_TIME]
                = "played %d times";
            Script::$script["zho"][Script::PLAY_TIME]
                = "玩了 %d 次";
            Script::$script["gdh"][Script::PLAY_TIME]
                = "玩咗 %d 次";
            Script::$script["och"][Script::PLAY_TIME]
                = "已玩 %d 次";
            Script::$script["ar"][Script::PLAY_TIME]
                = "لعب %d مرة";
            Script::$script["fa"][Script::PLAY_TIME]
                = "بازی کرده %d بار";

            Script::$script["en"][Script::X_TIMES]
                = "%d times";
            Script::$script["id"][Script::X_TIMES]
                = "%d kali";
            Script::$script["it"][Script::X_TIMES]
                = "%d volte";
            Script::$script["cn"][Script::X_TIMES]
                = "%d 次";
            Script::$script["pb"][Script::X_TIMES]
                = "%d times";
            Script::$script["ph"][Script::X_TIMES]
                = "%d times";
            Script::$script["es"][Script::X_TIMES]
                = "%d times";
            Script::$script["zho"][Script::X_TIMES]
                = "%d 次";
            Script::$script["gdh"][Script::X_TIMES]
                = "%d 次";
            Script::$script["och"][Script::X_TIMES]
                = "%d 次";
            Script::$script["ar"][Script::X_TIMES]
                = "%d مرات";
            Script::$script["fa"][Script::X_TIMES]
                = "%d بار";

            Script::$script["en"][Script::WIN_RATE]
                = "Winrate: %d%%";
            Script::$script["id"][Script::WIN_RATE]
                = "Menang: %d%%";
            Script::$script["it"][Script::WIN_RATE]
                = "Tasso di Vittoria: %d%%";
            Script::$script["cn"][Script::WIN_RATE]
                = "勝率: %d%%";
            Script::$script["pb"][Script::WIN_RATE]
                = "Winrate: %d%%";
            Script::$script["ph"][Script::WIN_RATE]
                = "Winrate: %d%%";
            Script::$script["es"][Script::WIN_RATE]
                = "Winrate: %d%%";
            Script::$script["zho"][Script::WIN_RATE]
                = "胜比：%d%%";
            Script::$script["gdh"][Script::WIN_RATE]
                = "勝率：%d%%";
            Script::$script["och"][Script::WIN_RATE]
                = "得勝率：%d%%";
            Script::$script["ar"][Script::WIN_RATE]
                = "معدل الفوز : %d%%";
            Script::$script["fa"][Script::WIN_RATE]
                = "درصد پیروزی : %d%%";

            Script::$script["en"][Script::GOOD_TEAM_WON_STAT]
                = "Good Team Won %d%%";
            Script::$script["id"][Script::GOOD_TEAM_WON_STAT]
                = "Tim Baik menang %d%%";
            Script::$script["it"][Script::GOOD_TEAM_WON_STAT]
                = "Il Team dei Buoni ha vinto %d%%";
            Script::$script["cn"][Script::GOOD_TEAM_WON_STAT]
                = "好人勝率 %d%%";
            Script::$script["pb"][Script::GOOD_TEAM_WON_STAT]
                = "Good Team Won %d%%";
            Script::$script["ph"][Script::GOOD_TEAM_WON_STAT]
                = "Good Team Won %d%%";
            Script::$script["es"][Script::GOOD_TEAM_WON_STAT]
                = "Good Team Won %d%%";
            Script::$script["zho"][Script::GOOD_TEAM_WON_STAT]
                = "好人获胜了 %d%%";
            Script::$script["gdh"][Script::GOOD_TEAM_WON_STAT]
                = "好人勝率 %d%%";
            Script::$script["och"][Script::GOOD_TEAM_WON_STAT]
                = "正派獲勝了 %d%%";
            Script::$script["ar"][Script::GOOD_TEAM_WON_STAT]
                = "فريق الطيبين فازوا %d%%";
            Script::$script["fa"][Script::GOOD_TEAM_WON_STAT]
                = "برد درباری %d%%";

            // NEW
            Script::$script["en"][Script::WON]
                = "Won";
            Script::$script["id"][Script::WON]
                = "Menang";
            Script::$script["it"][Script::WON]
                = "Vinto";
            Script::$script["cn"][Script::WON]
                = "勝利";
            Script::$script["pb"][Script::WON]
                = "Won";
            Script::$script["ph"][Script::WON]
                = "Won";
            Script::$script["es"][Script::WON]
                = "Won";
            Script::$script["zho"][Script::WON]
                = "获胜";
            Script::$script["gdh"][Script::WON]
                = "贏咗";
            Script::$script["och"][Script::WON]
                = "得勝";
            Script::$script["ar"][Script::WON]
                = "فاز";
            Script::$script["fa"][Script::WON]
                = "پیروزی";

            // NEW
            Script::$script["en"][Script::LOST]
                = "Lost";
            Script::$script["id"][Script::LOST]
                = "Kalah";
            Script::$script["it"][Script::LOST]
                = "Perso";
            Script::$script["cn"][Script::LOST]
                = "輸了";
            Script::$script["pb"][Script::LOST]
                = "Lost";
            Script::$script["ph"][Script::LOST]
                = "Lost";
            Script::$script["es"][Script::LOST]
                = "Lost";
            Script::$script["zho"][Script::LOST]
                = "亏掉";
            Script::$script["gdh"][Script::LOST]
                = "輸咗";
            Script::$script["och"][Script::LOST]
                = "輸掉";
            Script::$script["ar"][Script::LOST]
                = "خسر";
            Script::$script["fa"][Script::LOST]
                = "شکست";

            Script::$script["en"][Script::EVIL_TEAM_WON_STAT]
                = "Evil Team Won %d%%";
            Script::$script["id"][Script::EVIL_TEAM_WON_STAT]
                = "Tim Jahat menang %d%%";
            Script::$script["it"][Script::EVIL_TEAM_WON_STAT]
                = "I Cattivi hanno vinto %d%%";
            Script::$script["cn"][Script::EVIL_TEAM_WON_STAT]
                = "壞人勝率 %d%%";
            Script::$script["pb"][Script::EVIL_TEAM_WON_STAT]
                = "Evil Team Won %d%%";
            Script::$script["ph"][Script::EVIL_TEAM_WON_STAT]
                = "Evil Team Won %d%%";
            Script::$script["es"][Script::EVIL_TEAM_WON_STAT]
                = "Evil Team Won %d%%";
            Script::$script["zho"][Script::EVIL_TEAM_WON_STAT]
                = "反派获胜了 %d%%";
            Script::$script["gdh"][Script::EVIL_TEAM_WON_STAT]
                = "壞人勝率 %d%%";
            Script::$script["och"][Script::EVIL_TEAM_WON_STAT]
                = "反派獲勝了 %d%%";
            Script::$script["ar"][Script::EVIL_TEAM_WON_STAT]
                = "الفريق الشرير فاز %d%%";
            Script::$script["fa"][Script::EVIL_TEAM_WON_STAT]
                = "برد یاغی %d%%";


            Script::$script["en"][Script::PLAY_TO_HAVE_STAT]
                = "You have to play a game to have the statistics.";
            Script::$script["id"][Script::PLAY_TO_HAVE_STAT]
                = "Kamu harus main untuk memiliki statistik.";
            Script::$script["it"][Script::PLAY_TO_HAVE_STAT]
                = "Devi giocare almeno una partita per avere le statistiche.";
            Script::$script["cn"][Script::PLAY_TO_HAVE_STAT]
                = "You have to play a game to have the statistics.";
            Script::$script["pb"][Script::PLAY_TO_HAVE_STAT]
                = "You have to play a game to have the statistics.";
            Script::$script["ph"][Script::PLAY_TO_HAVE_STAT]
                = "You have to play a game to have the statistics.";
            Script::$script["es"][Script::PLAY_TO_HAVE_STAT]
                = "You have to play a game to have the statistics.";
            Script::$script["zho"][Script::PLAY_TO_HAVE_STAT]
                = "你要参加了一次才会有纪录。";
            Script::$script["gdh"][Script::PLAY_TO_HAVE_STAT]
                = "要玩過一次遊戲先有得計。";
            Script::$script["och"][Script::PLAY_TO_HAVE_STAT]
                = "你要參加了一次才會有紀錄。";
            Script::$script["ar"][Script::PLAY_TO_HAVE_STAT]
                = "يجب عليك أن تلعب حتى تظهر الإحصائيات.";
            Script::$script["fa"][Script::PLAY_TO_HAVE_STAT]
                = "برای داشتن مشخصات حتما باید بازی کرده باشی.";

            Script::$script["en"][Script::PU_CHCKPMTOCHGLANG]
                = "Please check private message to change the language.";
            Script::$script["id"][Script::PU_CHCKPMTOCHGLANG]
                = "Silakan mengecek PM untuk memilih bahasa.";
            Script::$script["it"][Script::PU_CHCKPMTOCHGLANG]
                = "Per favore, controlla i messaggi privati per cambiare linguaggio.";
            Script::$script["cn"][Script::PU_CHCKPMTOCHGLANG]
                = "請用PM方式來更換語言。";
            Script::$script["pb"][Script::PU_CHCKPMTOCHGLANG]
                = "Verifique, por favor, a conversa privada para alterar o idioma.";
            Script::$script["ph"][Script::PU_CHCKPMTOCHGLANG]
                = "Pakiusap i-check ang PM upang mapalitan ang lengguwahe.";
            Script::$script["es"][Script::PU_CHCKPMTOCHGLANG]
                = "Por favor comprueba el Mensaje Privado para cambiar el lenguaje.";
            Script::$script["zho"][Script::PU_CHCKPMTOCHGLANG]
                = "请用PM方式来更换语言。";
            Script::$script["gdh"][Script::PU_CHCKPMTOCHGLANG]
                = "查下PM嚟更改語言。";
            Script::$script["och"][Script::PU_CHCKPMTOCHGLANG]
                = "請檢查私信作更換語言。";
            Script::$script["ar"][Script::PU_CHCKPMTOCHGLANG]
                = "رجاء أنظر إلى الرسائل الخاصة حتى تغير اللعبة.";
            Script::$script["fa"][Script::PU_CHCKPMTOCHGLANG]
                = "لطفا برای تغییر زبان پیام های خصوصیتو چک کن.";

            Script::$script["en"][Script::PU_SECONDTODECIDE]
                = "\n\nYou have <b>%d seconds</b> to decide.\n";
            Script::$script["id"][Script::PU_SECONDTODECIDE]
                = "\n\nWaktu yang diberikan adalah <b>%d</b> detik.\n";
            Script::$script["it"][Script::PU_SECONDTODECIDE]
                = "\n\nHai <b>%d secondi</b> per decidere.\n";
            Script::$script["cn"][Script::PU_SECONDTODECIDE]
                = "\n\n你有<b>%d秒</b>去做出決定。\n";
            Script::$script["pb"][Script::PU_SECONDTODECIDE]
                = "\n\nVocê tem <b>%d segundos</b> para tomar sua decisão.\n";
            Script::$script["ph"][Script::PU_SECONDTODECIDE]
                = "\n\nMayroon kang <b>%d segundo</b> upang magdesisyon.\n";
            Script::$script["es"][Script::PU_SECONDTODECIDE]
                = "\n\nTe quedan <b>%d segundos</b> para decidir.\n";
            Script::$script["zho"][Script::PU_SECONDTODECIDE]
                = "\n\n你有 <b>%d 秒</b>去做出决定。\n";
            Script::$script["gdh"][Script::PU_SECONDTODECIDE]
                = "\n\n你有 <b>%d 秒</b>做決定。\n";
            Script::$script["och"][Script::PU_SECONDTODECIDE]
                = "\n\n你有 <b>%d 秒</b>做決定。\n";
            Script::$script["ar"][Script::PU_SECONDTODECIDE]
                = "\n\n لديك <b>%d ثانية </b> لتقرر. \n";
            Script::$script["fa"][Script::PU_SECONDTODECIDE]
                = "\n\n تو <b>%d ثانيه </b> برای تصمیم گیری وقت داری. \n";

            Script::$script["en"][Script::PU_LANGGROUPNOTFOUND]
                = "Language cannot be changed. We cannot find the group.";
            Script::$script["id"][Script::PU_LANGGROUPNOTFOUND]
                = "Bahasa tidak berhasil diganti. group tidak ditemukan.";
            Script::$script["it"][Script::PU_LANGGROUPNOTFOUND]
                = "La lingua non può essere cambiata. Gruppo non trovato!";
            Script::$script["cn"][Script::PU_LANGGROUPNOTFOUND]
                = "系統無法更改語言。無法找到群組。";
            Script::$script["pb"][Script::PU_LANGGROUPNOTFOUND]
                = "Não foi possível alterar o idioma. O grupo não foi encontrado.";
            Script::$script["ph"][Script::PU_LANGGROUPNOTFOUND]
                = "Hindi mapalitan ang lengguwahe. Hindi mahanap ang Grupo.";
            Script::$script["es"][Script::PU_LANGGROUPNOTFOUND]
                = "El idioma no puede ser cambiado. No podemos encontrar el grupo.";
            Script::$script["zho"][Script::PU_LANGGROUPNOTFOUND]
                = "无法更换语言，我无法找到那个群组。";
            Script::$script["gdh"][Script::PU_LANGGROUPNOTFOUND]
                = "改唔到語言，個群組唔見咗。";
            Script::$script["och"][Script::PU_LANGGROUPNOTFOUND]
                = "無法更改語言，我找不到那個群组。";
            Script::$script["ar"][Script::PU_LANGGROUPNOTFOUND]
                = "لا يمكن تغيير اللغة. لم نجد المجموعة.";
            Script::$script["fa"][Script::PU_LANGGROUPNOTFOUND]
                = "گروه رو پیدا نکردیم. زبان نمیتونه تغییر کنه.";

            Script::$script["en"][Script::PR_LANGGROUPCHANGED]
                = "Language in %s has been set to %s.";
            Script::$script["id"][Script::PR_LANGGROUPCHANGED]
                = "Bahasa di %s berhasil diganti menjadi %s.";
            Script::$script["it"][Script::PR_LANGGROUPCHANGED]
                = "La lingua in %s è stata impostata a %s.";
            Script::$script["cn"][Script::PR_LANGGROUPCHANGED]
                = "在 %s 群組，想使用的語言已經被設定為 %s.";
            Script::$script["pb"][Script::PR_LANGGROUPCHANGED]
                = "O idioma em %s foi alterado para %s.";
            Script::$script["ph"][Script::PR_LANGGROUPCHANGED]
                = "Ang lengguwahe sa %s ay na-Set sa %s.";
            Script::$script["es"][Script::PR_LANGGROUPCHANGED]
                = "El idioma en %s ha sido cambiado a %s.";
            Script::$script["zho"][Script::PR_LANGGROUPCHANGED]
                = "在 %s 群里面，语言已经被设定为 %s。";
            Script::$script["gdh"][Script::PR_LANGGROUPCHANGED]
                = "喺 %s 群組嘅語言已經換成%s。";
            Script::$script["och"][Script::PR_LANGGROUPCHANGED]
                = "在 %s 群組裡面，語言已經更改為 %s。";
            Script::$script["ar"][Script::PR_LANGGROUPCHANGED]
                = "اللغة في %s قد غيرت إلى %s.";
            Script::$script["fa"][Script::PR_LANGGROUPCHANGED]
                = "زبان %s تغییر کرد به %s.";

            Script::$script["en"][Script::PU_LANGCHANGED]
                = "Language has been set to %s.";
            Script::$script["id"][Script::PU_LANGCHANGED]
                = "Bahasa berhasil diganti menjadi %s.";
            Script::$script["it"][Script::PU_LANGCHANGED]
                = "La lingua è stata impostata a %s.";
            Script::$script["cn"][Script::PU_LANGCHANGED]
                = "語言已經被設定為 %s.";
            Script::$script["pb"][Script::PU_LANGCHANGED]
                = "O idioma foi alterado de %s.";
            Script::$script["ph"][Script::PU_LANGCHANGED]
                = "Ang lengguwahe ay na-Set sa %s.";
            Script::$script["es"][Script::PU_LANGCHANGED]
                = "El idioma ha sido cambiado a %s.";
            Script::$script["zho"][Script::PU_LANGCHANGED]
                = "语言已经被设定为 %s。";
            Script::$script["gdh"][Script::PU_LANGCHANGED]
                = "語言已經換成%s。";
            Script::$script["och"][Script::PU_LANGCHANGED]
                = "語言已經更改為 %s。";
            Script::$script["ar"][Script::PU_LANGCHANGED]
                = "لقد تم تغيير اللغة إلى %s.";
            Script::$script["fa"][Script::PU_LANGCHANGED]
                = "زبان تغییر کرد به %s.";

            Script::$script["en"][Script::PR_SETLANGGROUPINST]
                = "for %s.";
            Script::$script["id"][Script::PR_SETLANGGROUPINST]
                = "untuk %s.";
            Script::$script["it"][Script::PR_SETLANGGROUPINST]
                = "per %s.";
            Script::$script["cn"][Script::PR_SETLANGGROUPINST]
                = "為了 %s.";
            Script::$script["pb"][Script::PR_SETLANGGROUPINST]
                = "para %s.";
            Script::$script["ph"][Script::PR_SETLANGGROUPINST]
                = "para sa %s.";
            Script::$script["es"][Script::PR_SETLANGGROUPINST]
                = "para %s.";
            Script::$script["zho"][Script::PR_SETLANGGROUPINST]
                = "于 %s。";
            Script::$script["gdh"][Script::PR_SETLANGGROUPINST]
                = "喺 %s。";
            Script::$script["och"][Script::PR_SETLANGGROUPINST]
                = "於 %s。";
            Script::$script["ar"][Script::PR_SETLANGGROUPINST]
                = "لـ %s.";
            Script::$script["fa"][Script::PR_SETLANGGROUPINST]
                = "برای %s.";

            Script::$script["en"][Script::PR_SETLANGINST]
                = "Choose the language ";
            Script::$script["id"][Script::PR_SETLANGINST]
                = "Pilih bahasa yang ingin digunakan ";
            Script::$script["it"][Script::PR_SETLANGINST]
                = "Scegli la lingua ";
            Script::$script["cn"][Script::PR_SETLANGINST]
                = "選擇語言 ";
            Script::$script["pb"][Script::PR_SETLANGINST]
                = "Escolha o idioma ";
            Script::$script["ph"][Script::PR_SETLANGINST]
                = "Pumili ng lengguwahe ";
            Script::$script["es"][Script::PR_SETLANGINST]
                = "Elige el idioma ";
            Script::$script["zho"][Script::PR_SETLANGINST]
                = "选择语言 ";
            Script::$script["gdh"][Script::PR_SETLANGINST]
                = "揀語言 ";
            Script::$script["och"][Script::PR_SETLANGINST]
                = "選擇語言 ";
            Script::$script["ar"][Script::PR_SETLANGINST]
                = "إختر اللغة";
            Script::$script["fa"][Script::PR_SETLANGINST]
                = "زبان را اتخاب کنید";

            Script::$script["en"][Script::PR_GROUPONLY]
                = "This command can only be executed from group.";
            Script::$script["id"][Script::PR_GROUPONLY]
                = "Kamu harus berada di grup untuk dapat menggunakan perintah ini.";
            Script::$script["it"][Script::PR_GROUPONLY]
                = "Questo comando può essere utilizzato solo nei gruppi.";
            Script::$script["cn"][Script::PR_GROUPONLY]
                = "在這個指令只能在群組內進行。";
            Script::$script["pb"][Script::PR_GROUPONLY]
                = "Este comando somente pode ser executado em um grupo.";
            Script::$script["ph"][Script::PR_GROUPONLY]
                = "Ang command na ito ay pwede lang ma-Execute sa group.";
            Script::$script["es"][Script::PR_GROUPONLY]
                = "Este comando sólo puede ser ejecutado en un grupo.";
            Script::$script["zho"][Script::PR_GROUPONLY]
                = "这个指令只能在群组内进行。";
            Script::$script["gdh"][Script::PR_GROUPONLY]
                = "呢個指令只可以係群組用。";
            Script::$script["och"][Script::PR_GROUPONLY]
                = "此指令只能在群组內使用。";
            Script::$script["ar"][Script::PR_GROUPONLY]
                = "هذا الأمر لا يمكن تنفيذه إلا في مجموعة.";
            Script::$script["fa"][Script::PR_GROUPONLY]
                = "این دستور فقط در گروه اجرا می شود.";

            Script::$script["en"][Script::PU_PMONLY]
                = "This command can only be executed by Private Message to Bot.";
            Script::$script["id"][Script::PU_PMONLY]
                = "Kamu harus Private Message Bot untuk dapat menggunakan perintah ini.";
            Script::$script["it"][Script::PU_PMONLY]
                = "Questo comando può essere utilizzato solo in privato.";
            Script::$script["cn"][Script::PU_PMONLY]
                = "這個指令只能通過PM Avalon Bot來執行。";
            Script::$script["pb"][Script::PU_PMONLY]
                = "Este comando somente pode ser executado em uma conversa privada com o bot.";
            Script::$script["ph"][Script::PU_PMONLY]
                = "Ang command na ito ay pwede lang ma-Execute sa PM kay Bot.";
            Script::$script["es"][Script::PU_PMONLY]
                = "Este comando sólo puede ser ejecutado por Mensaje Privado al Bot.";
            Script::$script["zho"][Script::PU_PMONLY]
                = "这个指令只能通过 PM 机器人来执行。";
            Script::$script["gdh"][Script::PU_PMONLY]
                = "呢個命令只可以 PM Bot 時用。";
            Script::$script["och"][Script::PU_PMONLY]
                = "此指令只能與機械人私聊時才可以使用。";
            Script::$script["ar"][Script::PU_PMONLY]
                = "هذا الأمر لا يمكن قيامه إلا في بوت اللعبة الخاص.";
            Script::$script["fa"][Script::PU_PMONLY]
                = "این پیام فقط در چت شخصی ربات قابل اجرا است.";

            Script::$script["en"][Script::PU_ADMINONLY]
                = "This command can only be executed by admin.";
            Script::$script["id"][Script::PU_ADMINONLY]
                = "Hanya admin yang dapat menggunakan perintah ini.";
            Script::$script["it"][Script::PU_ADMINONLY]
                = "Questo comando può essere utilizzato solo da un admin";
            Script::$script["cn"][Script::PU_ADMINONLY]
                = "此指令只有Admin能使用。";
            Script::$script["pb"][Script::PU_ADMINONLY]
                = "Este comando pode ser executado somente por um administrador.";
            Script::$script["ph"][Script::PU_ADMINONLY]
                = "Admin lang ang pwede gumamit ng Command na ito Wag kang Feeling!.";
            Script::$script["es"][Script::PU_ADMINONLY]
                = "Este comando sólo puede ser ejecutado por el admin.";
            Script::$script["zho"][Script::PU_ADMINONLY]
                = "这个指令只有群主能执行。。";
            Script::$script["gdh"][Script::PU_ADMINONLY]
                = "呢個命令你用嘅咩？撳撳撳，咁心急派你做跟班啊嗱。";
            Script::$script["och"][Script::PU_ADMINONLY]
                = "此指令只有群組管理員才可以使用。";
            Script::$script["ar"][Script::PU_ADMINONLY]
                = "هذا الأمر لا يمكن قيامه إلا من قِبل المشرف.";
            Script::$script["fa"][Script::PU_ADMINONLY]
                = "این دستور مخصوص ادمین است.";


            Script::$script["en"][Script::PU_MAINTENANCE]
                = "Currently there is a maintenance for avalon bot. Please try again later.";
            Script::$script["id"][Script::PU_MAINTENANCE]
                = "Saat ini, bot sedang dalam maintenance. Silakan coba beberapa saat lagi.";
            Script::$script["it"][Script::PU_MAINTENANCE]
                = "C'è una manutenzione per il bot Avalon. Per favore riprovate più tardi. Grazie per la pazienza!";
            Script::$script["cn"][Script::PU_MAINTENANCE]
                = "Avalon Bot正進行維護中，請稍後才進行遊戲。";
            Script::$script["pb"][Script::PU_MAINTENANCE]
                = "O bot Avalon está atualmente em manutenção. Por favor, tente novamente mais tarde.";
            Script::$script["ph"][Script::PU_MAINTENANCE]
                = "Napagod ang Avalon bot. Mamaya na lang mga bes Chill lang.";
            Script::$script["es"][Script::PU_MAINTENANCE]
                = "Actualmente hay mantenimiento para el bot Avalon. Por favor inténtalo más tarde.";
            Script::$script["zho"][Script::PU_MAINTENANCE]
                = "阿瓦隆机器人正进行维护中，请稍後才进行遊戏。";
            Script::$script["gdh"][Script::PU_MAINTENANCE]
                = "Avalon Bot 而家維護緊，唔好意思，遲啲再試。";
            Script::$script["och"][Script::PU_MAINTENANCE]
                = "阿瓦隆機械人正進行維護事宜。請稍後再試，造成不便敬請原諒。";
            Script::$script["ar"][Script::PU_MAINTENANCE]
                = "يوجد صيانة حالية لبوت أفالون. الرجاء التجربة في وقت لاحق.";
            Script::$script["fa"][Script::PU_MAINTENANCE]
                = "درحال حاضر تغییراتی درحال انجام است لطفا بعدا تلاش کنید.";

            $contributor =
                Script::$script["en"][Script::LANG]."(@Rhyned), "
                .Script::$script["id"][Script::LANG]."(@Rhyned), "
                .Script::$script["it"][Script::LANG]."(@MatteoIlGrande), "
                .Script::$script["cn"][Script::LANG]."(@bluebear119), "
                .Script::$script["pb"][Script::LANG]."(@Liozek), "
                .Script::$script["ph"][Script::LANG]."(@ArjayTheMan), "
                .Script::$script["es"][Script::LANG]."(@hozarberto), "
                .Script::$script["zho"][Script::LANG]."(@Khinchin), "
                .Script::$script["gdh"][Script::LANG]."(@Khinchin, @cicle_k), "
                .Script::$script["och"][Script::LANG]."(@Khinchin), "
                .Script::$script["ar"][Script::LANG]."(@RendezvousRama), "
                .Script::$script["fa"][Script::LANG]."(@mohireza123)\n\n";

            Script::$script["en"][Script::PU_CONTACT]
                = "Telegram code by <b>Hendry Setiadi</b>.\n\n"
                . $contributor
                ."Contact to email: hendry.setiadi.89@gmail.com to give support or feedback.\n\n"
                ."Rate me by clicking the link: <a href=\"http://telegram.me/storebot?start=%s\">Rate me</a>.\n\n"
                ."Thank you.";
            Script::$script["id"][Script::PU_CONTACT]
                = "Kode Telegram oleh <b>Hendry Setiadi</b>.\n\n"
                . $contributor
                ."Hubungi email: hendry.setiadi.89@gmail.com untuk memberikan support atau feedback.\n\n"
                ."Berikan rating dengan meng-klik link berikut: <a href=\"http://telegram.me/storebot?start=%s\">Rate me</a>.\n\n"
                ."Terima kasih.";
            Script::$script["it"][Script::PU_CONTACT]
                = "Codice Telegram di <b>Hendry Setiadi</b>.\n\n"
                . $contributor
                ."Contattami via mail: hendry.setiadi.89@gmail.com per dare supporto o feedback.\n\n"
                ."Valutami cliccando il link: <a href=\"http://telegram.me/storebot?start=%s\">Valuta</a>.\n\n"
                ."Grazie Mille.";
            Script::$script["cn"][Script::PU_CONTACT]
                = "Telegram 程式碼 by <b>Hendry Setiadi</b>.\n\n"
                . $contributor
                ."電郵至: hendry.setiadi.89@gmail.com 來告訴作者意見吧.\n\n"
                ."或者到這裡給我的Bot評介: <a href=\"http://telegram.me/storebot?start=%s\">評分</a>.\n\n"
                ."謝謝";
            Script::$script["pb"][Script::PU_CONTACT]
                = "Código do Telegram por <b>Hendry Setiadi</b>.\n\n"
                . $contributor
                ."Entre em contato por email: hendry.setiadi.89@gmail.com para suporte ou feedback.\n\n"
                ."Envie sua avaliação no endereço: <a href=\"http://telegram.me/storebot?start=%s\">Rate me</a>.\n\n"
                ."Obrigado.";
            Script::$script["ph"][Script::PU_CONTACT]
                = "Telegram code ni <b>Hendry Setiadi</b>.\n\n"
                . $contributor
                ."Contact sa email: hendry.setiadi.89@gmail.com para magbigay suporta o feedback.\n\n"
                ."I-rate mo ko i-click ang link: <a href=\"http://telegram.me/storebot?start=%s\">Rate me</a>.\n\n"
                ."Salamat.";
            Script::$script["es"][Script::PU_CONTACT]
                = "Telegram code ni <b>Hendry Setiadi</b>.\n\n"
                . $contributor
                ."Contacta al email: hendry.setiadi.89@gmail.com para soporte.\n\n"
                ."Valórame en el siguiente link: <a href=\"http://telegram.me/storebot?start=%s\">Valórame</a>.\n\n"
                ."Gracias.";
            Script::$script["zho"][Script::PU_CONTACT]
                = "Telegram 程式码的作者是 <b>Hendry Setiadi</b>。\n\n"
                . $contributor
                ."电邮至: hendry.setiadi.89@gmail.com 来向我告诉意见吧.\n\n"
                ."请到以下多给我的Bot评价: <a href=\"http://telegram.me/storebot?start=%s\">评价</a>。\n\n"
                ."谢谢";
            Script::$script["gdh"][Script::PU_CONTACT]
                = "Telegram 程式碼原作者係 <b>Hendry Setiadi</b>。\n\n"
                . $contributor
                ."要聯絡作者可以電郵至: hendry.setiadi.89@gmail.com\n\n"
                ."亦希望大家到Bot store: <a href=\"http://telegram.me/storebot?start=%s\">俾俾分</a>。\n\n"
                ."多多支持";
            Script::$script["och"][Script::PU_CONTACT]
                = "Telegram 程式原碼由 <b>Hendry Setiadi</b> 開發。\n\n"
                . $contributor
                ."當然可以電郵至: hendry.setiadi.89@gmail.com 向我發表意見。\n\n"
                ."亦期望各位用以下連結给我的機械人做評價: <a href=\"http://telegram.me/storebot?start=%s\">評價</a>。\n\n"
                ."多謝";
            Script::$script["ar"][Script::PU_CONTACT]
                = "تمت الصناعة من قِبل : <b>Hendry Setiadi</b>.\n\n"
                . $contributor
                ."تواصل معه عبر البريد الإلكتروني : hendry.setiadi.89@gmail.com لإعطاء مساعدة أو رأي. \n\n"
                ."قيمني بالضغط على هنا :  <a href=\"http://telegram.me/storebot?start=%s\">قيمني</a>.\n\n"
                ."شكراً لك.";
            Script::$script["fa"][Script::PU_CONTACT]
                = "ساخته شده توسط : <b>Hendry Setiadi</b>.\n\n"
                . $contributor
                ."با من از طریق ایمیل در تماس باشید : hendry.setiadi.89@gmail.com برای کمک به بهتر شدن ربات. \n\n"
                ."به این ربات از طریق این لینک رای دهید :  <a href=\"http://telegram.me/storebot?start=%s\">به من رای دهید</a>.\n\n"
                ."ممنون.";


            Script::$script["en"][Script::PU_JOINCHANNEL]
                = "Join this <a href=\"https://telegram.me/avalonbgbot\">channel</a> to see the news and the latest updates to avalon bot.\n";
            Script::$script["id"][Script::PU_JOINCHANNEL]
                = "Ikuti <a href=\"https://telegram.me/avalonbgbot\">channel</a> ini untuk melihat berita dan update terbaru seputar avalon bot.\n";
            Script::$script["it"][Script::PU_JOINCHANNEL]
                = "Entra su questo <a href=\"https://telegram.me/avalonbgbot\">canale</a> per vedere le novità e gli aggiornamenti su Avalon bot.\n";
            Script::$script["cn"][Script::PU_JOINCHANNEL]
                = "加入這個Channel <a href=\"https://telegram.me/avalonbgbot\">channel</a> 你們就可以收到Avalon bot 最新的消息了";
            Script::$script["pb"][Script::PU_JOINCHANNEL]
                = "Entre no <a href=\"https://telegram.me/avalonbgbot\">canal</a> para ver as novidades e as atualizaçṍes do bot Avalon.\n";
            Script::$script["ph"][Script::PU_JOINCHANNEL]
                = "Sumali sa <a href=\"https://telegram.me/avalonbgbot\">channel</a> na ito upang makita ang mga balita at updates.\n";
            Script::$script["es"][Script::PU_JOINCHANNEL]
                = "Únete a este <a href=\"https://telegram.me/avalonbgbot\">canal</a> para ver las ultimas noticias y actualizaciones de Avalon Bot.\n";
            Script::$script["zho"][Script::PU_JOINCHANNEL]
                = "加入这个<a href=\"https://telegram.me/avalonbgbot\">频道</a>，你们就可以收到阿瓦隆机器人的最新消息了";
            Script::$script["gdh"][Script::PU_JOINCHANNEL]
                = "加埋呢個<a href=\"https://telegram.me/avalonbgbot\">Channel</a>，就會收到 Avalon 亞法隆 bot 嘅最新消息啦";
            Script::$script["och"][Script::PU_JOINCHANNEL]
                = "加入了這個<a href=\"https://telegram.me/avalonbgbot\">頻道</a>，就可以收到阿瓦隆機械人的最新消息了";
            Script::$script["ar"][Script::PU_JOINCHANNEL]
                = "أدخل هذه <a href=\"https://telegram.me/avalonbgbot\">القناة</a> لرؤية الأخبار و آخر التحديثات للعبة. \n";
            Script::$script["fa"][Script::PU_JOINCHANNEL]
                = "در این کانال عضو شوید <a href=\"https://telegram.me/avalonbgbot\">القناة</a> تا از آخرین اخبار و تغییرات اطلاع داشته باشید. \n";


            Script::$script["en"][Script::PU_HELP]
                = "Avalon bot for telegram.\n"
                . "Based on the <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">The Resistance:Avalon BoardGame</a>\n\n"
                . "To start playing, invite this bot to your group then type /start or /startchaos to start the game.\n\n"
                . "Type /howtoplay if you are new to avalon and want to know more\n"
                . "Type /rolelist to see the avalon role list\n"
                . "Type /contact if you want to contact the developer\n\n"
                . Script::$script["en"][Script::PU_JOINCHANNEL];
            Script::$script["id"][Script::PU_HELP]
                = "Avalon bot untuk Telegram.\n"
                . "Berdasarkan game <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">The Resistance:Avalon BoardGame</a>\n\n"
                . "Untuk bermain, undang bot ini ke dalam grup kemudian ketik /start atau /startchaos untuk memulai permainan.\n\n"
                . "Ketik /howtoplay untuk tahu cara bermain avalon\n"
                . "Ketik /rolelist untuk melihat daftar peran Avalon\n"
                . "Ketik /contact untuk menghubungi developer\n\n"
                . Script::$script["id"][Script::PU_JOINCHANNEL];
            Script::$script["it"][Script::PU_HELP]
                = "Avalon bot su Telegram.\n"
                . "Basato su <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">The Resistance:Avalon Gioco da Tavolo</a>\n\n"
                . "Per iniziare a giocare, invitami nel gruppo e poi usa /start o /startchaos per iniziare una partita.\n\n"
                . "Usa /howtoplay se sei nuovo su Avalon e vorresti sapere di più\n"
                . "Usa /rolelist per vedere una lista completa di ruoli\n"
                . "Usa /contact se vuoi contattare lo sviluppatore\n\n"
                . Script::$script["it"][Script::PU_JOINCHANNEL];
            Script::$script["cn"][Script::PU_HELP]
                = "阿瓦隆 bot for telegram.\n"
                . "根據<a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">桌遊抵抗組織：阿瓦隆而弄出來的Bot。</a>\n\n"
                . "想玩這個遊戲，請將Bot加進你的群組裡，然後打 /start 或者 /startchaos來啟動遊戲。\n\n"
                . " /howtoplay 遊戲玩法。\n"
                . " /rolelist 角色詳解\n"
                . " /contact 聯絡此Bot作者\n\n"
                . Script::$script["cn"][Script::PU_JOINCHANNEL];
            Script::$script["pb"][Script::PU_HELP]
                = "Bot Avalon para Telegram.\n"
                . "Baseado no <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">jogo de tabuleuiro The Resistance:Avalon</a>\n\n"
                . "Para começar a jogar, adicione este bot ao grupo e envie /start ou /startchaos para iniciar uma partida.\n\n"
                . "Envie /howtoplay caso não conheça o jogo e queira saber mais a respeito\n"
                . "Envie /rolelist para ver a lista de personagens de Avalon\n"
                . "Envie /contact caso queira entrar em contato com o desenvolvedor\n\n"
                . Script::$script["pb"][Script::PU_JOINCHANNEL];
            Script::$script["ph"][Script::PU_HELP]
                = "Avalon bot sa telegram.\n"
                . "Base sa <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">The Resistance:Avalon BoardGame</a>\n\n"
                . "Upang makapaglaro, imbitahin ang bot sa inyong groupo at i-type /start o /startchaos upang simulan ang Laro.\n\n"
                . "I-type /howtoplay kung bago ka sa avalon at malaman ang iba pang detalye\n"
                . "I-type /rolelist para makita ang avalon role list\n"
                . "I-type /contact kung gustong mong maContact ang developer\n\n"
                . Script::$script["ph"][Script::PU_JOINCHANNEL];
            Script::$script["es"][Script::PU_HELP]
                = "Avalon Bot para telegram.\n"
                . "Basado en <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">The Resistance:Avalon Juego de Mesa</a>\n\n"
                . "Para empezar a jugar, invita a este bot a tu grupo y luego escribe el comando /start o /startcaos para empezar el juego.\n\n"
                . "Escribe el comando /howtoplay si eres nuevo en Avalon y quieres aprender más\n"
                . "Escribe el comando /rolelist para ver la lista de roles\n"
                . "Escribe el comando /contact si quieres contactar con el desarrollador\n\n"
                . Script::$script["es"][Script::PU_JOINCHANNEL];
            Script::$script["zho"][Script::PU_HELP]
                = "Telegram 阿瓦隆机器人。\n"
                . "根据<a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">桌遊抵抗组织：阿瓦隆而弄出来的机器人。</a>\n\n"
                . "想玩这个遊戏，请将机器人加进你的群组里，然後输入 /start 或者 /startchaos来启动遊戏。\n\n"
                . "输入 /howtoplay 遊戏玩法\n"
                . "输入 /rolelist 角色详解\n"
                . "输入 /contact 联络作者\n\n"
                . Script::$script["zho"][Script::PU_JOINCHANNEL];
            Script::$script["gdh"][Script::PU_HELP]
                = "係 Telegram嘅 Avalon 亞法隆 Bot\n"
                . "建基於 <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">抵抗組織：阿瓦隆</a>\n\n"
                . "要玩嘅話，先要將呢個 Bot 加落個谷，再打 /start 抑或 /startchaos 正式開嚟玩。\n\n"
                . "打 /howtoplay 遊戲玩法\n"
                . "打 /rolelist 角色介紹\n"
                . "打 /contact 聯絡作者\n\n"
                . Script::$script["gdh"][Script::PU_JOINCHANNEL];
            Script::$script["och"][Script::PU_HELP]
                = "Telegram 的阿瓦隆機械人\n"
                . "按照 <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">抵抗織織：阿瓦隆</a>做出來\n\n"
                . "開始玩樂前，必先將本機㭜入加入群組，再輸入 /start 或者 /startchaos 啟動游戲。\n\n"
                . "輸入 /howtoplay 可以更清楚知曉遊戲機制\n"
                . "輸入 /rolelist 可以檢查角色名單\n"
                . "輸入 /contact 可以了解如何聯絡作者\n\n"
                . Script::$script["och"][Script::PU_JOINCHANNEL];
            Script::$script["ar"][Script::PU_HELP]
                = "أفالون بوت لتليقرام.\n"
                . "بنيت على أساس : <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">المقاومة : أفالون لعبة لوحية</a>\n\n"
                . "لبدء اللعب, أضف هذا البوت إلى مجموعتك و أكتب  /start أو /startchaos للبدء باللعبة\n\n"
                . "أكتب /howtoplay إن كنت جديداً على هذه اللعبة و تود معرفة المزيد. \n"
                . "أكتب /rolelist لرؤية قائمة أدوار اللعبة. \n"
                . "أكتب /contact إن كنت تود التواصل مع المُطور.\n\n"
                . Script::$script["ar"][Script::PU_JOINCHANNEL];
            Script::$script["fa"][Script::PU_HELP]
                = "آوالون بات برای تلگرام.\n"
                . "ساخته شده بر اساس : <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">مقاومت: بازی تخته ای آوالون</a>\n\n"
                . "برای بازی این بات را به گروه خود اضافه کرده و تایپ کنید /start یا /startchaos برای شروع بازی\n\n"
                . "بنویسید /howtoplay برای اینکه یاد بگیرید چطور بازی کنید. \n"
                . "بنویسید /rolelist برای دیدن نقش ها. \n"
                . "بنویسید /contact برای تماس با سازنده ی ربات.\n\n"
                . Script::$script["fa"][Script::PU_JOINCHANNEL];

            $normalRoleList = Constant::EMO_SMILE_B."/merlin\n"
                .Constant::EMO_SMILE_B."/percival\n"
                .Constant::EMO_SMILE_B."/servant\n"
                .Constant::EMO_EVIL_B."/assassin\n"
                .Constant::EMO_EVIL_B."/morgana\n"
                .Constant::EMO_EVIL_B."/mordred\n"
                .Constant::EMO_EVIL_B."/oberon\n"
                .Constant::EMO_SMILE_B."/goodlancelot\n"
                .Constant::EMO_EVIL_B."/evillancelot\n\n";


            $chaosRoleList = Constant::EMO_SMILE_B."/knight\n"
                .Constant::EMO_SMILE_B."/agent\n"
                .Constant::EMO_SMILE_B."/auditor\n"
                .Constant::EMO_EVIL_B."/morgause\n"
                .Constant::EMO_EVIL_B."/witch\n"
                .Constant::EMO_EVIL_B."/ninja\n";


            Script::$script["en"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Addition roles exclusive for telegram:\n"
                . $chaosRoleList;
            Script::$script["id"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Tambahan role khusus untuk Telegram:\n"
                . $chaosRoleList;
            Script::$script["it"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Ruoli aggiunti esclusivi per telegram:\n"
                . $chaosRoleList;
            Script::$script["cn"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Telegram 額外添加的角色:\n"
                . $chaosRoleList;
            Script::$script["pb"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Personagens adicionais exclusivas para o Telegram:\n"
                . $chaosRoleList;
            Script::$script["ph"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Karagdagang mga Role eksklusibo para sa Telegram:\n"
                . $chaosRoleList;
            Script::$script["es"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Roles adicionales exclusivos para Telegram:\n"
                . $chaosRoleList;
            Script::$script["zho"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Telegram 额外添加的角色:\n"
                . $chaosRoleList;
            Script::$script["gdh"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Telegram 專屬新加嘅角色:\n"
                . $chaosRoleList;
            Script::$script["och"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Telegram 添加的角色:\n"
                . $chaosRoleList;
            Script::$script["ar"][Script::PU_ROLELIST]
                = $normalRoleList
                . "أدوار جديدة مضافة لتليقرام : \n"
                . $chaosRoleList;
            Script::$script["fa"][Script::PU_ROLELIST]
                = $normalRoleList
                . "نقش های جدید انحصاری تلگرام : \n"
                . $chaosRoleList;


            Script::$script["en"][Script::PU_HOWTOPLAY]
                = " <b>The avalon game is a game about deduction and bluffing</b>\n\n"
                . "This game tells the story about a group that is in a journey to control the civilization of Arthur. "
                . "There are always <b>5 quests</b> in total. The players will play the first quest first, then sequentially go to the next quest."
                . " If at least 3 quests succeed, then good forces <i>might</i> win. If there are 3 quests fail, evil force win.\n\n"

                . "At the start of the game, each player will be randomly assigned a role secretly.\n"
                . "Click to see the detail of the role:\n"

                . Script::$script["en"][Script::PU_ROLELIST]

                . "\nAt the start of the game, King token".Constant::EMO_KING_B. " will be randomly assigned to a player and the King may choose who can complete the current quest.\n"
                . "After the king has done the assignment, any player may vote <b>approve</b> or <b>reject</b> to the assignment. Then, the approve and reject will be counted.\n\n"

                . "If the <b>reject</b> count is half or more the count of the players, then the quest is rejected, and the king token"
                .Constant::EMO_KING_B." will be given to the next player (next to the King)\n"
                . "If the <b>approve</b> count is more than half players' count, then the quest is executed by the assignees.\n\n"

                . "When executing a quest, evil players may choose to fail the quest and this will be done secretly. "
                . "In general, if at least 1 player give the FAIL to that quest, it means that quest will FAIL.\n\n"

                . "And to prevent each quest being rejected over and over, each quest has maximum reject of 5. If the quest is rejected 5 times, it will automatically FAIL\n\n"

                . "In a game 8 players or more, <b>lady of the lake</b>".Constant::EMO_LADY_B." can be used. Lady of The Lake will give a large benefit for a good forces.. "
                . "A player who hold the lady token may choose a player to know his/her true identity (good or evil) but only the lady holder knows the truth.\n\n"

                . "That's all. Practice is the faster way to learn.. Type /start or /startchaos to start the game.\n\n";




            Script::$script["id"][Script::PU_HOWTOPLAY]
                = " <b>Game Avalon adalah game tentang deduksi dan berbohong</b>\n\n"
                . "Game ini bercerita tentang perjalanan suatu grup untuk menemukan peradaban Arthur. "
                . "Ada <b>5 quests</b> yang harus diselesaikan. Pemain harus memainkan quest pertama terlebih dahulu, baru kemudian lanjut ke quest berikutnya secara berurutan."
                . " Jika terdapat minimal 3 quest berhasil, maka tim baik <i>mungkin</i> menang. Jika terdapat 3 quest gagal, maka tim jahatlah yang menang.\n\n"

                . "Di awal permainan, Tiap orang akan diberikan peran secara rahasia.\n"
                . "Klik untuk melihat detil peran :\n"

                . Script::$script["id"][Script::PU_ROLELIST]

                . "\nDi awal permainan, King token ".Constant::EMO_KING_B. " akan diberikan secara random ke salah seorang pemain dan raja boleh memilih orang yang akan berangkat untuk quest yang berlangsung.\n"
                . "Setelah raja memberikan penugasan, tiap orang boleh <b>setuju</b> or <b>menolak</b> terhadap penugasan itu. Kemudian, jumlah setuju dan jumlah menolak akan dihitung.\n\n"

                . "Jika jumlah <b>menolak</b> lebih besar atau sama dengan jumlah pemain, maka quest akan ditolak dan King token"
                . Constant::EMO_KING_B ." akan berpindah ke pemain berikutnya (sesudah raja)\n"
                . "Jika jumlah <b>setuju</b> lebih besar dari jumlah pemain, maka quest akan dijalankan oleh orang yang ditunjuk oleh raja.\n\n"

                . "Ketika mengerjakan quest, Pemain jahat boleh menggagalkan quest dan ini dilakukan secara rahasia. "
                . "Umumnya, Jika minimal terdapat 1 GAGAL dalam quest, maka quest tersebut akan dianggap GAGAL.\n\n"

                . "Untuk mencegah suatu quest ditolak terus menerus, setiap quest memiliki penolakan maksimum 5 kali. "
                . " Jika quest tersebut sudah direject 5 kali, maka quest itu dianggap GAGAL.\n\n"

                . "Dalam game dengan 8 pemain atau lebih, <b>lady of the lake</b>".Constant::EMO_LADY_B." dapat digunakan. Lady of the Lake dapat memberikan keuntungan yang besar bagi tim baik. "
                . "Pemain yang memegang the lady token boleh menerawang sesorang untuk mengetahui identitas sebenarnya (baik atau jahat) namun hanya pemegang lady lah yang mengetahuinya.\n\n"

                . "Sekian. Latihan adalah cara yang cepat untuk belajar. Ketik /start atau /startchaos untuk memulai game.\n\n";


            Script::$script["it"][Script::PU_HOWTOPLAY]
                = " <b>Avalon è un gioco basato su deduzioni e bluff</b>\n\n"
                . "In questo gioco si vivono le vicende di un gruppo di coloni in viaggio per il Re Artù. "
                . "Ci sono sempre <b>5 missioni</b> in totale. Se almeno 3 Missione vengono completate,"
                . " i buoni <i>potrebbero</i> vincere. Se 3 missione falliscono, i malvagi vinceranno.\n\n"

                . "All'inizio della partita, assegnerò dei ruoli in privata ad ognuno.\n"
                . "Clicca per vedere i dettagli del ruolo:\n"

                . Script::$script["it"][Script::PU_ROLELIST]

                . "\nAll'inizio della partita, il gettone del Re".Constant::EMO_KING_B. " verrà assegnato casualmente a un giocatore e il Re potrà scegliere a chi assegnare la missione.\n"
                . "Dopo che il finisce l'assegnazione dei membri, tutti i giocatori potranno votare <b>l'approvazione</b> o <b>il rifiuto</b> alla proposta. Poi, verranno contati i voti.\n\n"

                . "Se i <b>rifiuti</b> sono almeno la metà dei giocatori, allora la missione viene rifiutata, e il gettone del re"
                . Constant::EMO_KING_B ." passerà al giocatore successivo (vicino al Re)\n"
                . "Se i <b>favorevoli</b> sono più della metà, allora la missione verrà eseguita dai giocatori assegnati.\n\n"

                . "Mentre si esegue una missione, i cattivi possono scegliere se fallire la missione in segreto. "
                . "Di solito, se almeno 1 giocatore FALLISCE la missione, significa che la missione FALLIRÀ.\n\n"

                . "Per prevenire le missione dal venire rifiutate all'infinito, ogni missione può essere rifiutata al massimo 5 volte. Se la missione viene rifiutata 5 volte, FALLIRÁ\n\n"

                . "In partite da 8 giocatori o più, la <b>Ragazza del Lago</b>".Constant::EMO_LADY_B." può essere usata. La Ragazza del Lago darà un grande vantaggio ai ruoli buoni! "
                . "Il giocatore a cui verrà assegnato il gettone della Ragazza del Lago potrà scegliere un giocatore per conoscere la sua vera lealtà (buona o cattiva), ma solo la Ragazza saprà la verità.\n\n"

                . "Questo è tutto. La pratica è la via più veloce per imparare.. Usa /start o /startchaos per iniziare una partita.\n\n";

            Script::$script["cn"][Script::PU_HOWTOPLAY]
                = " <b>這款遊戲是仿照亞瑟王(King Arthur)派圓桌騎士去執行任務的狀況而設計的。</b>\n\n"
                . "在遊戲中每個玩家將會輪流當上國王去指派其他玩家執行任務。\n\n"
                . "遊戲人數：5-10人\n\n"
                . " 遊戲分為2大陣營【好人同壞人】，好人必須完成5個任務之中的3個任務才會勝利，反之壞人則必須全力阻止好人完成任務。\n\n"
                . "遊戲開始，Bot會PM你的角色，而你就要根據你的角色去帶領你的團隊完成任務。\n"
                . "之後，Bot也會隨機指定某個人當國王。國王會自由選擇任何一個人（包括自己）去做任務.任務1到任務5都會有不同的指定人數。\n"
                . "5人：2-3-2-3-3（均為出現一個任務失敗就判定為任務失敗\n"
                . "6人：2-3-4-3-4（均為出現一個任務失敗就判定為任務失敗\n"
                . "7人：2-3-3-4-4（第一個4人任務需要出現兩個任務失敗才判定為失敗，其餘只需要一個\n"
                . "8-10人：3-4-4-5-5（第一個5人任務需要出現兩個任務失敗才判定為失敗，其餘只需要一個\n\n"
                . "1.一旦國王委任完畢，大家就會開始投票來表決這次的委任到底是贊成還是反對。\n"
                . "2.如果是反對多過贊成，國王就會換成下一個玩家（靠近國外的玩家）【任務的委任被反對5次，BOT會宣判該任務失敗。\n"
                . "3.如果是贊成多過反對，被委任者就會去執行任務。\n"
                . "4.當執行任務的時候，壞人有可能選擇讓該次任務失敗。只要任何一位執行任務的人選擇讓任務失敗，該任務就當成失敗。\n"
                . "5.遊戲超過8人以上會有湖女出現，她能幫助好人查看某一位玩家的身份。但別忘記，持有湖女法力的玩家有可能會是壞人。\n\n"

                . Script::$script["cn"][Script::PU_ROLELIST];

            Script::$script["pb"][Script::PU_HOWTOPLAY]
                = " <b>Avalon é um jogo de lealdades ocultas</b>\n\n"
                . "Os jogadores podem fazer parte do grupo de Servos Leais a Arthur, lutando pelo Bem e pela honra, ou fazer parte do grupo guiado por Mordred, seguindo os caminhos do Mal. "
                . "O jogo envolve <b>5 Missões</b> que foram ordenadas por Arthur. Os jogadores participarão primeiramente da Missão 1, depois sequenciamente passarão à próxima."
                . " Caso ao menos 3 Missões tenham SUCESSO, o Bem, então, <i>poderá</i> vencer. Caso ao menos 3 Missões fracassem, então as forças do Mal vencem.\n\n"

                . "No início do jogo cada jogador receberá um papel.\n"
                . "Acesse para ver o detalhe de cada um:\n"

                . Script::$script["pb"][Script::PU_ROLELIST]

                . "\nNo início da partida, o Rei". Constant::EMO_KING_B . " será aleatoriamente representado por um jogador. O Rei poderá escolher quem irá realizar a Missão.\n"
                . "Após a escolha do Rei, qualquer jogador deverá votar se <b>aprova</b> ou <b>rejeita</b> os escolhidos. Os votos de aprovação e rejeição serão, então, contabilizados.\n\n"

                . "Caso o número de <b>rejeições</b> seja maior ou igual à metade dos jogadores, então a Missão é rejeitada e o Rei"
                .  Constant::EMO_KING_B ." passará a ser o próximo jogador\n"
                . "Se o número de <b>aprovações</b> for maior que a metade de jogadores, então a Missão será realizada pelos escolhidos pelo Rei.\n\n"

                . "Durante a Missão, os jogadores do Mal poderão escolher pelo fracasso da Missão. Isso deverá ser feito de forma oculta. "
                . "Em geral, se ao menos 1 membro designado escolher FRACASSO para aquela Missão, significa que a Missão FRACASSOU.\n\n"

                . "Para evitar que uma Missão seja rejeitada indefinidamente, cada Missão pode ser rejeitada, no máximo, 5 vezes. Caso isso ocorra, ela irá FRACASSAR automaticamente\n\n"

                . "Em um jogo de 8 jogadores ou mais, a <b>Dama do Lago</b>".Constant::EMO_LADY_B." poderá ser consultada. A Dama do Lago dará uma grande ajuda para as forças do Bem. "
                . "O jogador que estiver com a Dama do Lago pode escolher um outro jogador para conhecer a quem ele pertence (Mal ou Bem), mas somente quem está com ela terá essa revelação.\n\n"

                . "Basicamente, é isso. Praticar é a forma mais rápida de aprender. Envie /start ou /startchaos para iniciar uma partida.\n\n";



            Script::$script["ph"][Script::PU_HOWTOPLAY]
                = " <b>Ang Avalon Game ay isang laro tungkol sa pag-aawas at bolahan</b>\n\n"
                . "Ang larong ito ay naglalahad sa kuwento tungkol sa isang grupo na nasa isang paglalakbay upang kontrolin ang sibilisasyon ni Arthur. "
                . "Mayroong palaging <b>5 Quests</b> sa kabuuan. Ang mga manlalaro ay isasagawa muna ang unang Quest, pagkatapos ay sunud-sunod na pumunta sa susunod na Quest."
                . " Kung hindi bababa sa 3 Quests ay Success, <i>maaaring</i> panalo ang Good Team. Kung mayroong 3 Quests ay Fail, panalo ang Evil Team.\n\n"

                . "Sa simula ng laro, ang bawat manlalaro ay bibigyan ng sikretong Random Role.\n"
                . "I-click upang makita ang mga detalye ng Role:\n"

                . Script::$script["ph"][Script::PU_ROLELIST]

                . "\nSa simula ng laro, Ang King token".Constant::EMO_KING_B. " ay random na nakatalaga sa isang player at ang Hari ay maaaring pumili kung sino ang maaaring makumpleto ang kasalukuyang Quest.\n"
                . "Kung tapos na  ang hari sa pagtatalaga, Ang mga player ay maaaring bumoto kung <b>Approve</b> o <b>Reject</b> sila sa mga naitalaga. Pagkatapos, ang Approve at Reject ay bibilangin.\n\n"

                . "Kung ang bilang ng <b>Reject</b> ay kalahati o higit pa sa bilang ng mga player, hindi na matutuloy ang Quest, at ang king token"
                .Constant::EMO_KING_B." ay ibibigay sa susunod na player (susunod na Hari)\n"
                . "Kung ang bilang ng <b>Approve</b> ay mas madami sa kalahati sa bilang ng mga player, pagkatapos ang Quest ay isasagawa ng mga naitalaga.\n\n"

                . "Kapag Isinasagawa ang isang Quest, maaaring piliin ng Evil player ang Fail at ito ay maisasagawa ng lihim. "
                . "Sa pangkalahatan, kung hindi bababa sa 1 player ay pumili ng FAIL sa Quest, nangangahulugan ito na ang Quest ay FAIL.\n\n"

                . "At upang maiwasan ang bawat Quest na ma-reject nang paulit-ulit, ang bawat Quest ay may 5 max Reject. Kung ang Quest ay Reject 5 beses, ito ay awtomatikong FAIL\n\n"

                . "Sa larong may 8 player o higit pa, <b>Ang Babae sa Septic tank</b>".Constant::EMO_LADY_B." ay maaaring gamitin. Ang Babae sa Septic tank ay magbibigay ng isang malaking benepisyo para sa Good Team.. "
                . "Ang player na may hawak ng Lady token ay maaaring pumili ng isang player upang malaman ang kanyang tunay na pagkatao (mabuti o masama) ngunit ang may hawak lang ng Lady token ang nakakaalam ng katotohanan.\n\n"

                . "Iyon lang. Practice ay ang mas mabilis na paraan upang matutunan.... I-type /start o /startchaos upang simulan ang laro.\n\n";

            Script::$script["es"][Script::PU_HOWTOPLAY]
                = " <b>El juego de Avalon es un juego sobre deducción y farol.</b>\n\n"
                . "Este juego cuenta la historia de un grupo en su viaje para controlar la civilización de Arturo. "
                . "Siempre hay <b>5 gestas</b> en total. Los jugadores jugarán siempre la primera gesta seguida por la siguiente en orden secuencial."
                . " Si al menos 3 gestas tienen éxito, entonces las fuerzas del Bien <i>pueden</i> ganar. Si fracasan 3 gestas, las fuerzas del Mal ganan.\n\n"

                . "Al comienzo del juego, a cada jugador se le asigna un rol secreto de forma aleatoria.\n"
                . "Pincha para ver en detalle los roles:\n"

                . Script::$script["es"][Script::PU_ROLELIST]

                . "\nAl comienzo del juego, la ficha de Rey ".Constant::EMO_KING_B. " será asignado de forma aleatoria y el rey deberá elegir quien irá a la gesta.\n"
                . "Después de que el rey haya hecho su elección, cualquier jugador puede <b>Aprobar</b> o <b>Rechazar</b> la asignación.\n\n"

                . "Si se el recuento de <b>Rechazos</b> es la mitad o mayor al número de jugadores, entonces la gesta es, y rechazada la ficha del rey "
                .Constant::EMO_KING_B." será entregada al siguiente jugador (próximo Rey)\n"
                . "Si el recuento de <b>Aprobados</b> es mayor a la mitad de jugadores, entonces la gesta será ejecutada por los asignados.\n\n"

                . "Cuando es ejecute una gesta, los jugadores malvados podrán decidir si sabotear o no la gesta de forma secreta. "
                . "En general, si al menos 1 jugador da un FRACASO a la gesta, esto significa que la gesta FRACASARÁ.\n\n"

                . "Para evitar que una gesta sea rechazada una y otra vez, cada gesta tiene un número de rechazos máximo de 5. Si la gesta es rechazada 5 veces, la misma automáticamente FRACASARÁ\n\n"

                . "En un juego de 8 jugadores o más, <b>La Dama del Lago</b>".Constant::EMO_LADY_B." se podrá usar. La Dama del Lago dará un gran beneficio a las fuerzas del bien... "
                . "El jugador que tenga la ficha de la Dama del Lago podrá elegir a un jugador para saber su verdadera lealtad (el Bien o el Mal) pero solo el portador sabrá la verdad.\n\n"

                . "Eso es todo. Practicar es el camino más rápido para aprender... Escribe el comando /start o /startchaos para empezar el juego.\n\n";


            Script::$script["zho"][Script::PU_HOWTOPLAY]
                = " <b>这款遊戏是仿照亚瑟王(King Arthur)派圆桌骑士去执行任务的状况而设计的。</b>\n\n"
                . "在遊戏中每个玩家将会轮流当上国王去指派其他玩家执行任务。\n\n"
                . "遊戏人数：5-10人\n\n"
                . " 遊戏分为2大阵营【好人同坏人】，好人必须完成5个任务之中的3个任务才会胜利，反之坏人则必须全力阻止好人完成任务。\n\n"
                . "遊戏开始，Bot会PM同你讲你的角色，而你就要根据你的角色去带领你的团队完成任务。\n"
                . "之後，Bot也会随机指定某个人当国王。国王会自由选择任何一个人（包括自己）去做任务.任务1到任务5都会有不同的指定人数。\n"
                . "5人：2-3-2-3-3（均为出现一个任务失败就判定为任务失败\n"
                . "6人：2-3-4-3-4（均为出现一个任务失败就判定为任务失败\n"
                . "7人：2-3-3-4-4（第一个4人任务需要出现两个任务失败才判定为失败，其馀只需要一个\n"
                . "8-10人：3-4-4-5-5（第一个5人任务需要出现两个任务失败才判定为失败，其馀只需要一个\n\n"
                . "1.一旦国王委任完毕，大家就会开始投票来表决这次的委任到底是赞成还是反对。\n"
                . "2.如果是反对多过赞成，国王就会换成下一个玩家（靠近国外的玩家）【任务的委任被反对5次，BOT会宣判该任务失败。\n"
                . "3.如果是赞成多过反对，被委任者就会去执行任务。\n"
                . "4.当执行任务的时候，坏人有可能选择让该次任务失败。只要任何一位执行任务的人选择让任务失败，该任务就当成失败。\n"
                . "5.遊戏超过8人以上会有湖女出现，她能帮助好人查看某一位玩家的身份。但别忘记，持有湖女法力的玩家有可能会是坏人。\n\n"

                . Script::$script["zho"][Script::PU_ROLELIST];


            Script::$script["gdh"][Script::PU_HOWTOPLAY]
                = " <b>呢隻遊戲喺主要係考你諗野同扮嘢嘅能力，係團隊制遊戲，只有好人或壞人一隊會贏。</b>\n\n"
                . "遊戲嘅每一個回合，國王會委派圓桌騎士去執行任務。"
                . "總共有 5 個任務，跟次序跟住去做任務。"
                . "如果有 3 個任務成功咗，好人一隊只喺<i>可能</i>贏；但倒轉有 3 個任務失敗，壞人一隊就即贏。\n\n"

                . "遊戲一開，每個玩家都會透過Bot收到自己嘅角色。\n"
                . "㩒下面嘅指令去睇睇啲角色要做啲咩：\n"
                . Script::$script["gdh"][Script::PU_ROLELIST]

                . "\n遊戲一開，個國王記號".Constant::EMO_KING_B ."就會是但放喺一個玩家身上，而呢個玩家就係國王，全權去管理嗰個任務。\n"
                . "當國王諗好派咩人去做，所有玩家會根據國王嘅提議投 <b>贊成</b> 或 <b>反對</b> 票表決。當中只會計有去投票嗰啲。\n\n"

                . "如果 <b>反對</b> 票超過一半，議案就會否決，而個國王記號".Constant::EMO_KING_B . "就會收返，再畀下一個玩家。\n"
                . "如果 <b>贊成</b> 票超過一半，議案就會通過，而個任務就即做\n\n"

                . "當去做任務時，壞人嗰邊可以有得揀秘密失敗個任務，或者俾個任務成功。"
                . "一般嚟講，除非有特別要求，只要有至少 1 位去失敗個任務行動，整個任務就會喺失敗。\n\n"

                . "又為咗唔好無限咁反對嚟拉布，每個任務只有最多 5 次遭反對。如果有 5 次反對，個任務同樣等同失敗。\n\n"

                . "當遊戲超過 8 個玩家，<b>湖女</b>".Constant::EMO_LADY_B."就會出現。湖女對好人嚟講係極大幫助……"
                . "任何玩家有湖女記號，就可以借助湖女嘅力量調查其他玩家嘅角色身份。\n\n"

                . "總之，多啲打 /start 或者 /startchaos 玩多幾鋪啦！\n\n";


            Script::$script["och"][Script::PU_HOWTOPLAY]
                = " <b>這款遊戲是主要關於歸納及虛偽，屬於隊制遊戲，只有正派或反派一隊會贏。</b>\n\n"
                . "遊戲是仿照亞瑟王(King Arthur)委派圓桌騎士去執行任務的狀況而設計的。\n"
                . "遊戲人數：5-10人\n"
                . "正派必須完成其中 3 個任務才有機會勝利，反之反派則必須全力阻止正派完成任務。\n\n"

                . "遊戲開始，機械人會私聊講出你的角色，而你就要根據你的角色去帶領你的團隊完成任務。\n"

                . Script::$script["och"][Script::PU_ROLELIST]

                . "\n遊戲一開始，那個首領標示".Constant::EMO_KING_B ."就會隨機指定一位選手，當作亞瑟王指派的首領。"
                . "首領可自由選擇任何一個人（包括自己）去執行任務。\n"
                . "當委任完畢，所有選手就會表決這次委任 <b>贊成</b> 或 <b>反對</b>。當中只會計算有投票那一堆。\n\n"

                . "如果 <b>反對</b> 票超過一半，委任就會否決，而首領標誌".Constant::EMO_KING_B . "就會改發至另一選手。\n"
                . "如果 <b>贊成</b> 票超過一半，委任就會通過，而任務就會執行\n\n"

                . "當執行任務時，反派可以秘密選擇該次任務成功或失敗。"
                . "除非有特別要求，只要有至少 1 位選擇該任務失敗，整個任務就當作失敗。\n\n"

                . "另外，每個任務委任只有最多 5 次遭否決。如果有 5 次否決，該任務亦會宣判失敗。\n\n"

                . "當遊戲有 8 個或以上個玩家，<b>湖中仙女</b>".Constant::EMO_LADY_B."就會出現。"
                . "任何選手持有湖中仙女標誌，皆可借助湖中仙女的力量才查看某一位選手的身份。\n\n"

                . "總之，熟能生巧。多玩就能明白箇中樂趣！\n\n";


            Script::$script["ar"][Script::PU_HOWTOPLAY]
                = " <b>لعبة أفالون هي لعبة عن التخمين و الخداع.</b>\n\n"
                . "هذه اللعبة تحكي قصة عن مجموعة و التي هي في رحلة للسيطرة على حضارة آرثر. "
                . "هناك دائماً <b> 5 مهمات </b> في المجموع. اللاعبون سيبدؤون في المهمة الأول أولاً, ثم التنقل بالتدرج إلى المهمة التالي."
                . " إن كانت هناك 3 مهمات ناجحة, عندها القوة الطيبة <i>قد</i> تفوز. إن كانت هناك 3 مهمات فاشلة, عندها تفوز القوة الشريرة. \n\n"

                . "في بداية اللعبة, كل لاعب سيتم تعيينه دوراً بسرية.\n"
                . "أضغط لرؤية التفاصيل حول الأدوار : \n"

                . Script::$script["ar"][Script::PU_ROLELIST]

                . "\n في بداية اللعبة, سيعطى رمز الملك ".Constant::EMO_KING_B. " إلى شخص ما عشوائياً و الملك يختار من سيدخل في كل مهمة.\n"
                . "بعد إختيار الملك للأشخاص, أي لاعب بإمكانه <b>القبول</b> أو <b>الرفض</b> للمختارين. بعد ذلك, ستحسب التصويتات. \n\n"

                . "إذا كان عدد <b>الرفض</b> كان من النصف أو أكثر من اللاعبين, عندها سترفض المهمة و رمز الملك"
                .Constant::EMO_KING_B." سيعطة إلى شخص آخر ( الملك الجديد )\n"
                . "إذا كان عدد <b>القبول</b> أكثر من النصف, ستكتمل المهمة بحسب المختارين من قِبل الملك.\n\n"

                . "خلال تنفيذ المهمة, اللاعبون الأشرار بإستطاعتهم أن يُحبطوا المهمة و سيتم ذلك سرياً. "
                . "بشكل عام, إذا كان على الأقل شخص واحد صوّت بإحباط المهمة, ستعتبر هذه المهمة حُبطت. \n\n"

                . "و لمنع كل طلب يتم رفضه مراراً و تكرارً, كل مهمة سيسمح لها 5 مرات رفض للأشخاص الذين سيقومون بالمهمة, إذا رُفضت المهمة 5 مرات...سيتم تلقائياً إعتبارها فاشلة.\n\n"

                . "في لعبة فيها 8 أشخاص و فوق <b>سيدة البحار</b>".Constant::EMO_LADY_B." يمكن إستخدامها. سيدة البحار ستعطي منفعة كبيرة لفريق الطيبين..."
                . "اللاعب الذي يحمل رمز سيدة البحار بإمكانه أن يختار ليعرف هوية شخصاً واحداً فقط ( طيب أم شرير ), و لكن فقط حامل هذا الرمز يعرف الحقيقة.\n\n"

                . "هذا كل شيء, التدريب أسرع طريقة للتعلم...أكتب /start أو /startchaos لبدء اللعبة.\n\n";
            Script::$script["fa"][Script::PU_HOWTOPLAY]
                = " <b>آوالون یه بازی بر اساس حدس و دروغه.</b>\n\n"
                . "این بازی داستان یه گروه که به دنبال کنترل تمدن آرتور هستن رو بازگو میکنه. "
                . "همیشه <b> 5 چالش </b> در مجموع توی بازی وجود داره. بازیکنا ابتدا وارد چالش اول میشن و بعد از تموم کردن به چالش دوم میرن و همینطوری ادامه میدن تا چالش ها تموم بشه."
                . " اگه 3 تا از چالش ها موفق بشن , تیم درباری ها <i>ممکنه</i> برنده بشن. اگه 3 تا از چالش ها شکست بخورن یاغی ها مستقیما پیروز میشن. \n\n"

                . "در ابتدای بازی بازیکنا به صورت اتفاقی و مخفی یه نقش دریافت میکنن.\n"
                . "برای دیدن اطلاعات هر دور کلیک کنید : \n"

                . Script::$script["fa"][Script::PU_ROLELIST]

                . "\n در ابتدای بازی شانس پادشاهی به یه نفر داده میشه و اون باید مشخص کنه که چه کسی باید چالش رو انجام بده".Constant::EMO_KING_B. ".\n"
                . "بعد از انتخاب کردن پادشاه یه رای گیری انجام میشه و بازیکنا باید با گزینه های <b>قبول</b> یا <b>رد کردن</b> به افراد انتخاب شده رأی بدن. بعدش رأی های شمرده میشن. \n\n"

                . "اگه تعداد رأی های <b>رد کردن</b> بیشتر از نصف تعداد بازیکنا بود، چالش رد میشه و بازیکنا اجراش نمیکنن و شانس پادشاهی"
                .Constant::EMO_KING_B." به نفر بعدی ( پادشاه جدید ) داده میشه.\n"
                . "اگه تعداد رأی های <b>قبول</b> بیشتر از نصف تعداد بازیکنا بود، فرد انتخاب شده چالش رو اجرا میکنه.\n\n"

                . "در هنگام اجرای چالش یاغی ها باید شکست چالش رو انتخاب کنن و این محرمانست. "
                . "بصورت کلی اگه حتی یه شکست توی چالش باشه، چالش به طور کلی می بازه. \n\n"

                . "اگه چالش ها پشت سر هم رد بشن وقتی یه چالش حداکثر 5 بار که حداکثر تعداد رد کردن هست، رد بشه خود به خود شکست میخوره.\n\n"

                . "تو بازی هایی که توی اون ها 8 نفر یا بیشتر هست <b>بانوی دریاچه</b>".Constant::EMO_LADY_B." می تونه استفاده بشه. بانوی دریاچه یه شانس بزرگ برای درباری هاست..."
                . "بازیکنی که شانس بانوی دریاچه شدن رو داره، میتونه یکی از بازیکن ها رو انتخاب کنه تا نقش واقعیش رو بفهمه و نقش شخص مورد نظر رو فقط خود بانوی دریاچه می فهمه.\n\n"

                . "این همه چیز بود، بهترین راه برای یادگیری تمرینه...تایپ کنید /start یا /startchaos تا یه بازی جدید رو شروع کنید.\n\n";





            $groupList =
                "<b>ENGLISH-JAPANESE</b>\n"
                ."<a href=\"http://telegram.me/AvalonAnime\">Avalon Anime</a>\n\n"
                ."<b>INDONESIA</b>\n"
                ."<a href=\"http://telegram.me/mainavalon\">Main Avalon Indonesia</a>\n"
                ."<a href=\"http://telegram.me/avalonwolfcircle\">Avalon Wolf Circle</a>\n"
                ."<a href=\"https://telegram.me/joinchat/ArAp4UFSojc5mFfM7iLPWw\">Play Avalon</a>\n"
                ."<a href=\"https://t.me/avalonhavefun\">Avalon Have Fun</a>\n"
                ."<a href=\"http://telegram.me/avalonindonesia\">Avalon Indonesia</a>\n\n"
                ."<b>ITALIANO</b>\n"
                ."<a href=\"http://telegram.me/AvalonITA\">Avalon Italia</a>\n\n"
                ."<b>PHILIPPINES</b>\n"
                ."<a href=\"https://telegram.me/joinchat/AAAAAEEQh-ZsFYdQh0B4zw\">Avalon PH</a>\n\n"
                ."<b>PORTUGUÊS</b>\n"
                ."<a href=\"http://telegram.me/AvalonBrasil\">Avalon Brasil</a>\n\n"
                ."<b>SINGAPORE</b>\n"
                ."<a href=\"http://telegram.me/AvalonSG\">Knights of the Kopitiam Table</a>\n\n"
                ."<b>繁體中文</b>\n"
                ."<a href=\"https://telegram.me/avalon_hk\">Avalon 阿瓦隆HK</a>\n\n"
                ."<b>廣東話</b>\n"
                ."<a href=\"https://telegram.me/HKAvalonGame\">亞法隆谷 @hktgb</a>\n"
                ."<a href=\"https://t.me/HKFreedomAvalon\">HKFreedomAvalon</a>\n"
                ."<a href=\"https://t.me/ProfessionalAvalon\">小火 Avalon精英谷</a>\n\n"
                ."<b>Spanish</b>\n"
                ."<a href=\"https://t.me/joinchat/AAAAAEJLtlKmqTAt1OwY3g\">Juguemos A valon</a>\n\n";

            Script::$script["en"][Script::PR_GROUPLIST]
                = "This Group List is currently in development. If you have your own open group you can share, contact developer to add it in grouplist.\n\n"
                .$groupList;
            Script::$script["id"][Script::PR_GROUPLIST]
                = "Group List masih dalam tahap pengembangan. Jika kamu mempunyai open group untuk avalon, kontak developer agar bisa menambahkannya di grouplist.\n\n"
                .$groupList;
            Script::$script["it"][Script::PR_GROUPLIST]
                = "La lista di gruppi è ancora in sviluppo. Se hai un gruppo aperto che vuoi condividere, contatta lo sviluppatore per aggiungerlo in grouplist.\n\n"
                .$groupList;
            Script::$script["cn"][Script::PR_GROUPLIST]
                = "群組列表還在建立當中，如果你想將你的群組加進列表，請聯絡這個Bot的程式員。\n\n"
                .$groupList;
            Script::$script["pb"][Script::PR_GROUPLIST]
                = "A lista de grupos é constantemente atualizada. Caso tenha um grupo que queira compartilhá-lo, entre em contato com o desenvolvedor para adioná-lo à lista de grupos.\n\n"
                .$groupList;
            Script::$script["ph"][Script::PR_GROUPLIST]
                = "Ang Group List na ito ay kasalukuyang nasa development. Kung mayroon kang Open Group pwede mong ipagbigay-alam, kausapin ang developer upang maidagdag sa grouplist.\n\n"
                .$groupList;
            Script::$script["es"][Script::PR_GROUPLIST]
                = "Esta Lista de Grupos está actualmente en desarrollo. Si tienes tu propio grupo puedes compartirlo, contacta con el desarrollador para añadirlo a la lista de grupos.\n\n"
                .$groupList;
            Script::$script["zho"][Script::PR_GROUPLIST]
                = "群组列表还在建立当中，如果你想将你的群组加进列表，请联络这个机器人的程式员。\n\n"
                .$groupList;
            Script::$script["gdh"][Script::PR_GROUPLIST]
                = "如果你想將你嘅公共群組放入列表，請聯絡 Bot 嘅作者<b>Hendry Setiadi(@Rhyned)</b>。\n\n"
                .$groupList;
            Script::$script["och"][Script::PR_GROUPLIST]
                = "群组列表仍在籌備中；如果你想將你的公用群组加進列表，請聯絡機械人的作者。\n\n"
                .$groupList;
            Script::$script["ar"][Script::PR_GROUPLIST]
                = "قائمة المجموعة هذه قيد التطوير. إن كان لديك مجموعة مفتوحة خاصة بك يمكنك المشاركة بها, يمكنك التواصل مع المطور لإضافتها في القائمة. \n\n"
                .$groupList;
            Script::$script["fa"][Script::PR_GROUPLIST]
                = "لیست گروه های فعلی درحال آپدیت شدنه. شما می تونید از طریق تماس با سازنده ی ربات گروه خودتون رو به این لیست اضافه کنید. \n\n"
                .$groupList;


            Script::$script["en"][Script::PU_RATEME]
                = "Like this bot? Please rate me ". Constant::EMO_SMILE_B . "\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">Rate me</a>\n\n"
                . Script::$script["en"][Script::PU_JOINCHANNEL];
            Script::$script["id"][Script::PU_RATEME]
                = "Suka bot ini? Tolong berikan rating untuk bot ". Constant::EMO_SMILE_B . "\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">Rate me</a>\n\n"
                . Script::$script["id"][Script::PU_JOINCHANNEL];
            Script::$script["it"][Script::PU_RATEME]
                = "Ti piace questo bot? Valutami, per favore". Constant::EMO_SMILE_B . "\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">Valuta</a>\n\n"
                . Script::$script["it"][Script::PU_JOINCHANNEL];
            Script::$script["cn"][Script::PU_RATEME]
                = "如果喜歡這個Bot，可以給我留下評價". Constant::EMO_SMILE_B . "\n\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">對bot作出評價</a>\n\n"
                . Script::$script["cn"][Script::PU_JOINCHANNEL];
            Script::$script["pb"][Script::PU_RATEME]
                = "Gostou deste bot? Por favor, envie sua avaliação ". Constant::EMO_SMILE_B . "\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">Avalie</a>\n\n"
                . Script::$script["pb"][Script::PU_JOINCHANNEL];
            Script::$script["ph"][Script::PU_RATEME]
                = "Nagustuhan mo ba ang bot na ito? Please i-rate mo ko ". Constant::EMO_SMILE_B . "\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">Rate me</a>\n\n"
                . Script::$script["ph"][Script::PU_JOINCHANNEL];
            Script::$script["es"][Script::PU_RATEME]
                = "¿Te gusta este bot? Por favor valórame ". Constant::EMO_SMILE_B . "\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">Valórame</a>\n\n"
                . Script::$script["es"][Script::PU_JOINCHANNEL];
            Script::$script["zho"][Script::PU_RATEME]
                = "如果喜欢这个机器人，可以". Constant::EMO_SMILE_B . "\n\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">作出评价</a>\n\n"
                . Script::$script["zho"][Script::PU_JOINCHANNEL];
            Script::$script["gdh"][Script::PU_RATEME]
                = "鍾意呢個 bot？咁就俾下". Constant::EMO_SMILE_B . "\n\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">評價</a>\n\n"
                . Script::$script["gdh"][Script::PU_JOINCHANNEL];
            Script::$script["och"][Script::PU_RATEME]
                = "如果喜歡這個機械人，可以給予". Constant::EMO_SMILE_B . "\n\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">評價</a>\n\n"
                . Script::$script["och"][Script::PU_JOINCHANNEL];
            Script::$script["ar"][Script::PU_RATEME]
                = "مُعجب بهذا البوت؟ قيمن هنا ". Constant::EMO_SMILE_B . "\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">قيمني!</a>\n\n"
                . Script::$script["ar"][Script::PU_JOINCHANNEL];
            Script::$script["fa"][Script::PU_RATEME]
                = "این بات رو دوست دارید؟ به ما رأی بدید ". Constant::EMO_SMILE_B . "\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">به من رأی بدید!</a>\n\n"
                . Script::$script["fa"][Script::PU_JOINCHANNEL];


            Script::$script["en"][Script::PU_MERLININFO]
                = "<b>".Script::$script["en"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . " knows all evil players except /mordred (and also /ninja). His job is to give clues to the good team, "
                . "so it will prevent the evil players having a chance failing the quests.\n\n"
                . "Note that if Merlin is too obvious, even though 3 quests have succeed, the /assassin can "
                . "guess the Merlin at the end of the game. If Assassin's guess is correct, the good side will lose although 3 quests has been success.";
            Script::$script["id"][Script::PU_MERLININFO]
                = "<b>".Script::$script["id"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . " tahu semua pemain jahat kecuali Mordred (dan juga /ninja). Merlin harus memberikan petunjuk-petunjuk ke tim baik, "
                . "sehingga mencegah pemain jahat untuk mengerjakan quest.\n\n"
                . "Penting juga bagi Merlin agar dia tidak ketahuan tim jahat karena /assassin dapat "
                . "menebak Merlin di akhir game. Jika assassin berhasil menebak Merlin, tim baik akan kalah meskipun 3 quest sudah berhasil.";
            Script::$script["it"][Script::PU_MERLININFO]
                = "<b>".Script::$script["it"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . "conosce tutti i cattivi tranne /mordred (e /ninja). Il suo compito è dare indizi al team dei buoni, "
                . "per impedire ai nemici di far fallire le missione.\n\n"
                . "Nota che se Merlino è troppo evidente, anche se 3 missioni sono state completate, l' /assassin può uccidere Merlino a fine partita."
                . "Se l'assassino uccide Merlino a fine partita, la partita verrà vinta dai cattivi, vanificando tutti gli sforzi delle missione.";
            Script::$script["cn"][Script::PU_MERLININFO]
                = "<b>".Script::$script["cn"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . " 知道所有邪惡陣營的玩家除了莫德雷德和忍者。他的任務就是給好人提示，但同時小心地不讓壞人知道他的身份，因為就算成功完成所有任務，壞人也能在遊戲結束的時候，派出刺客突襲梅林，一旦他被殺，壞人就會贏。";
            Script::$script["pb"][Script::PU_MERLININFO]
                = "<b>".Script::$script["pb"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . " conhece todos os jogadores do Mal exceto /mordred (e também o /ninja). Sua tarefa é dar pistas para o grupo do Bem, "
                . "evitando que os jogadores do Mal tenham chance de fracassar as Missões.\n\n"
                . "Cuidado! Merlin não pode ser muito óbvio. Ainda que as 3 Missões tenha sucesso, a /assassin pode "
                . "tentar adivinhar quem é Merlin ao final da partida. Caso esteja certa, o Bem perde ainda que tenha 3 Missões bem-sucedidas.";
            Script::$script["ph"][Script::PU_MERLININFO]
                = "<b>".Script::$script["ph"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . " kilala lahat ang Evil Team maliban sa /mordred (at /ninja). Ang trabaho ng Merlin ay gabayan ang good team, "
                . "Upang maiwasang ang pagkakataon ng Evil Team na mabigo ang Quests.\n\n"
                . "Note kung ang Merlin masyadong halata, kahit Success ang 3 quests, ang /assassin ay kayang "
                . "hulaan ang Merlin sa pagtatapos ng laro. Kung tama ang hula ng Assassin, Ang Good Team ay matatalo kahit na ang 3 quests ay Success.";
            Script::$script["es"][Script::PU_MERLININFO]
                = "<b>".Script::$script["es"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . " conoce a todos los jugadores del Mal excepto a /mordred (y /ninja). Su trabajo es dar pistas al bando del Bien, "
                . "para así preever que el bando del Mal tenga posibilidades de sabotear las gestas.\n\n"
                . "Nota que si Merlín es demasiado obvio, si hay 3 gestas satisfactorias, el /assassin puede "
                . "descubrir a Merlín al final de la partida. Si la adivinación del asesino es correcta, el bando del Bien pierde aunque hayan completado 3 gestas.";
            Script::$script["zho"][Script::PU_MERLININFO]
                = "<b>".Script::$script["zho"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . "知道所有邪恶阵营的玩家除了莫德雷德和忍者。他的任务就是给好人提示，"
                . "但同时小心地不让坏人知道他的身份。\n\n"
                . "就算成功完成所有任务，坏人只要能在遊戏结束的时候，派出刺客"
                . "仍可施袭梅林。一旦他被杀，坏人就会胜利。";
            Script::$script["gdh"][Script::PU_MERLININFO]
                = "<b>".Script::$script["gdh"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . "預知所有壞人，但唔包莫德雷德或忍者。他嘅重任就係俾好人提示，"
                . "阻住壞人破壞任務。\n\n"
                . "記住如果梅林身份太過明顯，就算有三個任務成功咗，壞人都可以派出刺客刺殺佢。"
                . "一旦梅林被壞人刺殺，壞人陣營就會贏。";
            Script::$script["och"][Script::PU_MERLININFO]
                = "<b>".Script::$script["och"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . "知道所有反派的人選，莫德雷德和忍者除外。他的職責就是給好人提示，"
                . "防止反派破壞任務。\n\n"
                . "注意如果梅林真身太明顯，就算有三次任務成功，反派亦可派出刺客"
                . "擊殺梅林。一旦梅林被殺，反派就會反敗為勝。";
            Script::$script["ar"][Script::PU_MERLININFO]
                = "<b>".Script::$script["ar"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . " كل الأشرار يعرفونه إلا موردور و النينجا, وظيفته بإنه يعطي أدلة أو تلميحات للفريق الطيب, "
                . "حتى يمنع اللاعبين الأشرار فرصة إحباط المهمة.\n\n"
                . "تذكر بأن مرلين لو كانت واضحة بكلامها أو برأيها حتى و إن كانت 3 مهمات قد نجح فيها فريقها ( الفريق الطيب ), الـ حشاش/assassin بإمكانه "
                . "تخمين مرلين في نهاية اللعبة. إن كان تخمين الحشاش صحيح, الفريق الطيب سيخسر حتى و إن فاز بالمهام الثلاث.";
            Script::$script["fa"][Script::PU_MERLININFO]
                = "<b>".Script::$script["fa"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . " همه ی یاغی ها بجز موردرد و نینجا رو میشناسه، کار مرلین کمک به درباری هاست. "
                . "اون میتونه یاغی ها رو بشناسه و شانس سوزوندن چالش ها رو از اونا بگیره.\n\n"
                . "توجه کنید که اگه مرلین خودش رو بشناسونه، حتی اگه درباری ها سه تا موفقیت توی چالش ها داشته باشن قاتل میتونه "
                . "یه نفر رو به عنوان مرلین حدس بزنه و بکشه و اگه اون شخص مرلین باشه، حتی اگه درباری ها سه تا برد داشته باشن باز هم یاغی ها برنده ی بازی میشن.";


            Script::$script["en"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["en"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . " knows the Merlin and Morgana at the start of the game. However, Percival does not know which is Merlin or Morgana\n\n"
                . "Percival's job is to guess the Merlin correctly between the 2 and then follow the Merlin's order. "
                . "Besides, Percival needs to act as a Merlin to deceive /assassin.";
            Script::$script["id"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["id"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . " tahu Merlin dan Morgana di awal permainan. Namun, Percival tidak tahu siapa yang Merlin atau Morgana\n\n"
                . "Tugas Percival adalah menebak dengan benar siapa Merlin dan mengikuti perintah Merlin. ".
                " Selain itu, Percival perlu berpura-pura menjadi Merlin untuk mengelabui /assassin.";
            Script::$script["it"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["it"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . " conosco Merlino e Morgana all'inizio della partita. Nota però, che Percival non sa quale dei due sia Merlino e quale Morgana\n\n"
                . "Lo scopo di Percival è scoprire il vero Merlino tra i due e poi seguire gli indizi di Merlino. ".
                "Oltre a questo, Percival deve agire come Merlino per ingannare l' /assassin.";
            Script::$script["cn"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["cn"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . " 遊戲一開始，能知道梅林和莫甘娜（假梅林），可惜他無法分辨誰是真梅林。他必須靠自己找出真梅林，同時暗中保護梅林誤導刺客殺他。";
            Script::$script["pb"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["pb"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . " sabe os jogadores que são Merlin e Morgana ao início da partida. No entanto, Percival não sabe qual dois 2 é Merlin ou Morgana\n\n"
                . "Sua tarefa é tentar adivinhar Merlin corretamente e então seguir suas ordens. ".
                "Além disso, Percival deve agir como Merlin para enganar a /assassin.";
            Script::$script["ph"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["ph"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . " kilala ang Merlin at Morgana sa simula ng Laro. Ngunit, Hindi alam ng Percival kung sino ang Merlin o Morgana\n\n"
                . "Ang trabaho ng Percival ay hulaan ang tamang Merlin sa kanilang dalawa at sundin ang utos ng Merlin. ".
                "Maliban dito , Ang Percival ay kailangan magpanggap na Merlin para maloko ang /assassin.";
            Script::$script["es"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["es"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . " conoce a Merlín y a Morgana al principio de la partida. Sin embargo, Perceval no sabe quien es Merlin o Morgana\n\n"
                . "El trabajo de Perceval es descubrir a Merlín correctamente de entre los dos y seguir sus órdenes. ".
                "Además de eso, Perceval necesita actuar como Merlín para confundir a /assassin.";
            Script::$script["zho"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["zho"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . "一开始知道梅林和摩甘娜，可惜他无法分辨谁是真梅林。\n\n"
                . "他必须靠自己找出真梅林，同时暗中保护梅林误导刺客杀他。";
            Script::$script["gdh"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["gdh"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . "一早就知邊個係梅林同莫甘娜。但係珀西瓦里分唔到邊個打邊個。\n\n"
                . "珀西瓦里要搵到真梅林，並且要保護梅林嘅身分，唔可以比壞人成功刺殺梅林。";
            Script::$script["och"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["och"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . "會很早期就能洞識梅林及摩甘娜，但他分不到兩者確實身份。\n\n"
                . "派西維爾要猜測到誰是真梅林，以及在重要時間假扮梅林去誤導刺客。";
            Script::$script["ar"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["ar"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . " يعرف مرلين و مورقانا. بريفسال لن يعرف بشكل صريح من هو مرلين أو من هو مورقانا.\n\n"
                . "هدف البريفسال هو التخمين الصحيح بين شخصيتين بإتباع كلام مرلين, "
                . "بالإضافة إلى أن البريفسال يحتاج أن يدّعي بأنه مرلين حتى يخدع الحشاش. /assassin.";
            Script::$script["fa"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["fa"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . " پرسیوال، مرلین و مورگانا رو میشناسه ولی نمیدونه که کدوم به کدومه.\n\n"
                . "هدف پرسیوال پیدا کردن مرلین و پیروی از دستورات اونه, "
                . "بعلاوه مرلین باید خودش رو مرلین جا بزنه تا قاتل به اشتباه بیفته. /assassin.";


            Script::$script["en"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["en"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . " is in a good side but do not know anything at the start of the game.\n\n"
                . "Servant's job is to succeed the quest and to try guess the Merlin correctly (mainly based on the deduction). ".
                "Servant might also need to act as a Merlin to deceive the evil force.";
            Script::$script["id"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["id"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . " adalah pemain baik yang tidak tahu apa-apa.\n\n"
                ."Tugas servant adalah menyukseskan quest dan mencoba menebak Merlin (berdasarkan deduksi). ".
                "Servant mungkin juga perlu berpura-pura menjadi Merlin untuk mengelabui tim jahat.";
            Script::$script["it"][Script::PU_SERVANTINFO]
                = "il <b>".Script::$script["it"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . " è nel team dei buoni ma non sa nulla all'inizio della partita.\n\n"
                ."Lo scopo del Servo è completare le missione e cercare di indovinare il vero Merlino (basandosi sulle deduzioni). ".
                "Il servo potrebbe esser costretto ad agire come Merlino per ingannare i cattivi.";
            Script::$script["cn"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["cn"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . "什麼也不知道的好人，需要憑著自己推理能力去嘗試找出真梅林。";
            Script::$script["pb"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["pb"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . " está do lado do Bem, mas não tem nenhum conhecimento ao início da partida.\n\n"
                . "Sua tarefa é fazer com que as Missões tenham sucesso, além de tentar adivinhar corretamente quem é Merlin (basicamente por meio de dedução). "
                . "Também poderá ser necessário que o Servo se comporte como Merlin para enganar as forças do Mal.";
            Script::$script["ph"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["ph"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . " ay mabuting tao ngunit walang alam sa simula ng Laro.\n\n"
                ."Ang trabaho ng Alalay ay ipanalo ang Quest at subukang hulaan ang Merlin ng tama (mainly based on the deduction). ".
                "Ang Alalay ay maaari din magpanggap bilang Merlin para maloko ang Evil Team.";
            Script::$script["es"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["es"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . " está en el lado del Bien pero no sabe nada al principio de la partida.\n\n"
                ."El trabajo del Leal es completar las gestas e intentar descubrir a Merlín correctamente (basándose en la deducción). ".
                "El Leal también necesita actuar como Merlín para confundir a las fuerzas del Mal.";
            Script::$script["zho"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["zho"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . "是什麽也不懂的好人，需要凭著自己推理能力去尝试找出真梅林。";
            Script::$script["gdh"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["gdh"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . "係好人一個，但唔知邊一個係好定壞。\n\n"
                . "職責當然喺令任務成功，但就冇特異功能。";
            Script::$script["och"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["och"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . "屬於正派，但不清楚那一個是正派或反派。\n\n"
                . "職責是令任務成功，在重要時間都要假扮梅林去誤導刺客。";
            Script::$script["ar"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["ar"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . "  هو بصف الطيبين, لا يعرف أي شيء بداية اللعبة.\n\n"
                . "وظيفة الخادم هو النجاح بالمهمة لتخمين من هي مرلين الحقيقي ( كلها بإستخدام الإستنتاج و الحدس ). ".
                "الخادم بإمكانه الإدعاء بكونه مرلين حتى يخدع قوة الشر.";
            Script::$script["fa"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["fa"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . "  خدمتکار با درباری هاست ولی با این وجود در ابتدای بازی هیچی نمیدونه.\n\n"
                . "وظیفه ی خدمتکار اینه که در چالش ها موفق بشه و مرلین رو بشناسه ( با استنتاج و حدس ). ".
                "همچنین خدمتکار باید خودش رو مرلین جا بزنه تا یاغی ها اشتباه کنن.";

            Script::$script["en"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["en"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . " is in a good side. If auditor is assigned in a quest, there is 20% chance 1 FAIL can be eliminated.\n\n";
            Script::$script["id"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["id"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . " adalah pemain baik. Jika auditor ditunjuk dalam sebuah quest, maka terdapat 20% kemungkinan 1 FAIL dapat dieliminasi.\n\n";
            Script::$script["it"][Script::PU_AUDITORINFO]
                = "il <b>".Script::$script["it"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . " è nel team dei buoni. Se al revisore è assegnata una missione, c'è un 20% di probabilità che 1 FALLIMENTO può essere eliminato.\n\n";
            Script::$script["cn"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["cn"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . "一旦你被委任做任務，你有20%的機率能阻止到任務失敗。\n\n";
            Script::$script["pb"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["pb"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . " está do lado do Bem. Se um Auditor foi designado para uma Missão, existe 20% de chance de que 1 FRACASSO seja retirado.\n\n";
            Script::$script["ph"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["ph"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . " ay mabuting tao. Kung maitatalaga ang auditor sa quest, mayroong 20% chance matanggal ang 1 FAIL sa Quest.\n\n";
            Script::$script["es"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["es"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . " está en el bando del Bien. Si el auditor es asignado a una gesta, hay un 20% de posibilidades de que 1 FRACASO sea desechado.\n\n";
            Script::$script["zho"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["zho"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . "是好人。一旦你被委任做任务，你有 20% 的机率能阻止到任务失败。\n\n";
            Script::$script["gdh"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["gdh"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . "係好人一個。只要有份做任務，就有 20% 機會可以抵銷其中一次失敗。\n\n";
            Script::$script["och"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["och"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . "屬於正派。一旦獲委任做任務，你 20% 的概率能阻止到任務失敗。\n\n";
            Script::$script["ar"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["ar"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . " هو بصف الطيبين. إذا تم إختياره في المهمة...هناك إحتمال 20% أن هناك رأي \"رفض\" تجاه المهمة.\n\n";
            Script::$script["fa"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["fa"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . " وکیل تو تیم درباری هاست و اگه برای یه چالش انتخاب بشه 20 درصد امکان \"از بین بردن\" باخت در اون چالش رو داره.n\n";


            Script::$script["en"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["en"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game (except Oberon) and has to cooperate together to fail the quests.\n\n"
                . "Merlin cannot see Mordred as an evil player so Mordred may act as a good player without being known.";
            Script::$script["id"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["id"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Merlin tidak dapat melihat Mordred sehingga Mordred dapat berpura-pura menjadi pemain yang baik tanpa diketahui.\n\n";
            Script::$script["it"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["it"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . " come giocatore del male conosce i suoi compagni (tranne Oberon) e deve collaborare insieme per fallire le missione.\n\n"
                . "Merlino non può vedere Mordred come giocatore malvagio quindi Mordred potrebbe agire come buono senza esser scoperto.";
            Script::$script["cn"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["cn"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . "莫德雷德狡猾的能力能迷惑梅林，令梅林見到他是好人，所以他能假扮好人，取得好人的信任，令任務失敗。此外，他能知道所以壞人隊伍的成員，除了奧北朗。";
            Script::$script["pb"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["pb"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . " como um jogador do Mal, ao início da partida ele conhece os outros (exceto Oberon) e deve colaborar para o FRACASSO das Missões.\n\n"
                . "Merlin não vê Mordred como um jogador do Mal, então Mordred pode agir como um membro do Bem sem ser percebido.";
            Script::$script["ph"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["ph"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . " bilang evil player kilala mo ang ibang evil players sa simula ng Laro(maliban sa Oberon) and has to cooperate together to fail the quests.\n\n"
                . "Hindi nakikita ng Merlin ang Mordred na masama kaya maaaring magpanggap ang Mordred na Good Team ng hindi nalalaman.";
            Script::$script["es"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["es"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . " como jugador malvado conoce a los otros jugadores del bando del Mal al principio de la partida (excepto a Oberón) y debe cooperar con ellos juntos para sabotear las gestas.\n\n"
                . "Merlin no puede detectar a Mordred como jugador malvado, así que Mordred debería actuar como jugador bueno sin ser descubierto.";
            Script::$script["zho"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["zho"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . "是坏人。狡猾的能力能迷惑梅林，令梅林见到他是好人，所以他能假扮好人，取得好人的信任，令任务失败。\n\n"
                . "此外，他能知道所有坏人队伍的成员，除了欧泊朗。";
            Script::$script["gdh"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["gdh"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . "係壞人一名，遊戲開始時會知道壞人陣營有咩人，同隊友一齊令到任務失敗。\n\n"
                . "天生有迷惑梅林嘅能力，令佢以為莫德雷德係好人。"
                . "另外，佢會知道奧伯龍以外嘅壞人。";
            Script::$script["och"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["och"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . "屬於反派。狡猾的能力迷惑到梅林，令梅林亦以為他是正派。\n\n"
                . "此外，莫德雷德亦知道所有反派，奧伯倫除外。";
            Script::$script["ar"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["ar"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . " يلعب بدور الشرير و يعرف عن كل الأشرار ما عدا أوبريون, يجب أن يجتمعوا معاً حتى يحبطوا المهمة.\n\n"
                . "مرلين لا يمكنه رؤية موردير كشخصية شريرة, لذا بإمكانه التلاعب بكونه شخص طيب بدون الكشف عنه.";
            Script::$script["fa"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["fa"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . " موردرد از یاغی هاست و همه ی اونها بجز اوبرن رو میشناسه. وظیفه ی موردرد شکست در چالش هاست.\n\n"
                . "مرلین موردرد رو نمیشناسه پس میتونه بجای یه درباری نقش خودش رو اجرا کنه.";

            Script::$script["en"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["en"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . " (Super Mordred) as an evil player knows the other evil players at the start of the game (except Oberon) and has to cooperate together to fail the quests.\n\n"
                . "Merlin cannot see Ninja as an evil player so Ninja may act as a good player without being known. Ninja can also give 2 FAILS if being assigned in the quest, but this ability can only be used once per game.";
            Script::$script["id"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["id"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . " (Super Mordred) adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Merlin tidak dapat melihat Ninja sehingga Ninja dapat berpura-pura menjadi pemain yang baik tanpa diketahui. Ninja dapat memberikan 2 GAGAL jika diikutkan dalam quest, namun kemampuan ini hanya bisa digunakan sekali dalam satu game.\n\n";
            Script::$script["it"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["it"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . " (Super Mordred) come ruolo del male conosce gli altri cattivi a inizio partita (tranne Oberon) e deve collaborare con loro per fallire le missione.\n\n"
                . "Merlino non può vedere il Ninja come giocatore malvagio quindi il Ninja potrebbe agire come buono senza venire scoperto. il Ninja può anche assegnare 2 FALLIMENTI in una singola missione, ma questo potere può essere utilizzato una volta a partita.";
            Script::$script["cn"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["cn"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . "實力超群的他們，就連梅林都無法看穿他們真實的身份。一旦被委派做任務，他們有2次機會去讓任務失敗。\n\n"
                . "此外，他能知道所以壞人隊伍的成員，除了奧北朗。";
            Script::$script["pb"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["pb"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . " (Super Mordred) por ser um jogador do Mal, tem conhecimento dos outros membros ao início da partida (exceto Oberon). Ele deve colaborar para o fracasso das Missões.\n\n"
                . "Merlin não vê o Ninja como um jogador do Mal, então o Ninja pode agir como um membro do Bem sem percebido. O Ninja também pode escolher 2 FRACASSOS quando tiver sido designado para uma Missão. Esta habilidade somente pode ser usada 1 vez durante toda a partida.";
            Script::$script["ph"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["ph"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . " (Super Mordred) bilang isang evil player na kilala ang iba pang Evil Team sa simula ng laro (maliban sa Oberon) at kailangang makipagtulungan sa mga kakampi upang mabigo ang Quests.\n\n"
                . "Hindi kita ng Merlin ang Hokage na masama kaya maaring magpanggap ang Hokage na Good Team ng hindi nalalaman. Maaring gamitin nang Hokage ang 2 Fails Ninjutsu kung siya ay maitatalaga sa Quest, pero isang beses lang sa isang Laro.";
            Script::$script["es"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["es"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . " (Super Mordred) como jugador malvado conoce a los otros jugadores del bando del Mal al principio de la partida (excepto a Oberón) y debe cooperar con ellos juntos para sabotear las gestas.\n\n"
                . "Merlin no puede detectar a Mordred como jugador malvado, así que el Ninja debería actuar como jugador bueno sin ser descubierto. El Ninja puede sabotear con 2 FRACASOS las gestas, pero esta habilidad sólo la puede usar una vez por partida.";
            Script::$script["zho"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["zho"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . "实力超群的他们，就连梅林都无法看穿他们真实的身份。一旦被委派做任务，他们有2次机会去让任务失败。\n\n"
                . "此外，他能知道所有坏人队伍的成员，除了欧泊朗。";
            Script::$script["gdh"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["gdh"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . "本身能力仲勁過莫德雷德。喺遊戲啱啱開就知壞人嗰邊仲有咩人（除左奧伯龍），同壞人一齊破壞啲任務。\n\n"
                . "就就連梅林都會當咗佢喺好人。一旦獲委派做任務，忍者仲可以令任務失敗 2 次，但呢個能力只能用一次。";
            Script::$script["och"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["och"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . "就連梅林都無法看穿他們奸臣的身份。一旦獲委任做任務，忍者還可以一個任務破壞 2 次，但只限 1 次。\n\n"
                . "此外，忍者是一早知道所有反派，奥伯倫除外。";
            Script::$script["ar"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["ar"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . " ( سوبر موردير ) بدوره بصف الأشرار هو يعرف عن كل الأشخاص من الأشرار من بداية اللعبة إلا أوبيرون و يجب أن يجتمع مع أصحابه حتى يحبطوا المهمة. \n\n"
                . "مرلين لا يمكنه رؤية النينجا كـ شخصية شرير, لذا قد يتصرف كشخصية جيدة بدون أن يُعرف أنه شرير. النينجا بإمكانه أن يعطي رفضين إن رشّح للمهمة, لكن هذه الميزة لا يسمح لها إلا مرة طوال اللعبة.";
            Script::$script["fa"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["fa"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . " نیجنجا ( سوبر موردرد ) از یاغی هاست و همه ی اونها بجز اوبرن رو میشناسه. وظیفه ی نینجا شکست در چالش هاست. \n\n"
                . "مرلین نمیتونه نینجا رو به عنوان یه یاغی ببینه, پس میتونه به عنوان یه درباری نقش اجرا کنه. نینجا می تونه از قابلیت خودش که فقط یک بار در طول هر بازی فعال میشه استفاده کنه و وقتی توی یه چالش هست دو باخت اضافه کنه.";


            Script::$script["en"][Script::SECRETCODES] = array(
                "thanks",
                "sorry",
                "honest",
                "lie",
                "confused",
                "happy",
                "sad",
                "stupid",
                "smart",
//                "Oh my God",
                "believe",
                "choose",
                "sure",
                "doubt",
                "play",
            );
            Script::$script["id"][Script::SECRETCODES] = array(
                "terima kasih",
                "maaf",
                "jujur",
                "bohong",
                "bingung",
                "senang",
                "sedih",
                "bodoh",
                "pintar",
//                "ya Tuhan",
                "percaya",
                "pilih",
                "yakin",
                "ragu",
                "main",
            );
            Script::$script["it"][Script::SECRETCODES] = array(
                "grazie",
                "scusa",
                "onesto",
                "bugia",
                "confuso",
                "contento",
                "triste",
                "stupido",
                "intelligente",
                "incredibile",
                "credete",
                "scegliete",
                "sicuro",
                "dubbio",
                "gioca",
            );
            Script::$script["cn"][Script::SECRETCODES] = array(
                "謝謝",
                "對不起",
                "誠實",
                "欺騙",
                "混亂",
                "開心",
                "傷心",
                "笨蛋",
                "醒目",
//                "我的天",
                "相信",
                "選擇",
                "當然",
                "懷疑",
                "玩",
            );
            Script::$script["pb"][Script::SECRETCODES] = array(
                "obrigado",
                "desculpe",
                "honesto",
                "mentira",
                "confuso",
                "feliz",
                "triste",
                "idiota",
                "esperto",
//                "Meu Deus!",
                "acredite",
                "escolha",
                "claro",
                "dúvida",
                "joga",
                "pensar",
                "cilada",
            );
            Script::$script["ph"][Script::SECRETCODES] = array(
                "salamat",
                "traydor",
                "mabait",
                "sinungaling",
                "mahusay",
                "masaya",
                "malungkot",
                "tiwala",
                "pambihira",
                "pikon",
                "masama",
                "epal",
                "maganda",
                "charot",
                "panalo",
            );
            Script::$script["es"][Script::SECRETCODES] = array(
                "gracias",
                "perdón",
                "honesto",
                "mentir",
                "confuso",
                "feliz",
                "triste",
                "estúpido",
                "inteligente",
//                "Oh Dios mío",
                "creer",
                "elegir",
                "seguro",
                "duda",
                "jugar",
            );
            Script::$script["zho"][Script::SECRETCODES] = array(
                "谢谢",
                "对不起",
                "诚实",
                "欺骗",
                "混乱",
                "开心",
                "伤心",
                "笨蛋",
                "醒目",
//                "我的天",
                "相信",
                "选择",
                "当然",
                "怀疑",
                "玩",
            );
            Script::$script["gdh"][Script::SECRETCODES] = array(
                "唔該",
                "對唔住",
                "真心",
                "呃",
                "亂",
                "開心",
                "傷心",
                "癡線",
                "醒",
                "大鑊",
                "信",
                "揀",
                "梗係",
                "諗",
                "玩嘢",
                "唔去",
                "你大我阿",
				"繼續吹",
				"去",
				"講堅",
				"放棄",
            );
            Script::$script["och"][Script::SECRETCODES] = array(
                "多謝",
                "對不起",
                "誠信",
                "詐騙",
                "混亂",
                "快樂",
                "心傷",
                "蠢純",
                "聰明",
//                "天啊",
                "相信",
                "選擇",
                "當然",
                "懷疑",
                "把戲",
            );

            Script::$script["ar"][Script::SECRETCODES] = array(
                "شكراً",
                "آسف",
                "صادق",
                "كاذب",
                "محتار",
                "سعيد",
                "حزين",
                "غبي",
                "ذكي",
//                "يا إلهي",
                "أؤمن",
                "أختار",
                "متأكد",
                "أشك",
                "ألعب",
            );

            Script::$script["fa"][Script::SECRETCODES] = array(
                "ممنون",
                "ببخشید",
                "راستگو",
                "دروغگو",
                "متعجب",
                "خوشحال",
                "ناراحت",
                "احمق",
                "باهوش",
//                "اوه خدای من",
                "باور کن",
                "انتخاب کن",
                "مطمئن",
                "نامطمئن",
                "بازی کن",
            );


            Script::$script["en"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["en"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . " is in a good side. All agents in the team share the same secret codes given via Bot Private Message.\n\n"
                . "Agents can find the other teammates by using those secret codes, so that together they will succeed the mission easier. Remember, do not make it too obvious, or the bad guys will know the agents and it will make assassin's job easier to kill Merlin.\n\n"
                . "Possible secret codes: ".Constant::arrayToString(Script::$script["en"][Script::SECRETCODES]).".\n\n";
            Script::$script["id"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["id"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . " berada di tim baik. Semua agent dalam tim mendapatkan kode rahasia yang sama yang diberikan melalui PM Bot.\n\n"
                . "Agent dapat menemukan teman agen lainnya menggunakan kode rahasia tersebut, sehingga bersama-sama agent dapat menyukseskan misi lebih mudah. Ingat, jangan terlalu jelas memberikan kode, atau penjahat akan tahu semua agent sehingga membuat tugas assassin untuk membunuh Merlin menjadi lebih mudah.\n\n"
                . "Kode rahasia yang mungkin: ".Constant::arrayToString(Script::$script["id"][Script::SECRETCODES]).".\n\n";
            Script::$script["it"][Script::PU_AGENTINFO]
                = "l'<b>".Script::$script["it"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . " è della parte dei buoni. Tutti gli agenti della squadra hanno lo stesso codice segreto ricevuto in privato.\n\n"
                . "Gli Agenti possono riconoscersi usando questi codici segreti, in modo da rendere più facile la missione. Ricorda, non farti notare, oppure i cattivi sapranno chi sono gli agenti e renderanno il lavoro all'assassino più facile per uccidere Merlino.\n\n"
                . "Possibili codici segreti: ".Constant::arrayToString(Script::$script["it"][Script::SECRETCODES]).".\n\n";
            Script::$script["cn"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["cn"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . "特務之間都會使用暗號來分辨自己的同伴。當然在群組使用暗號時候別太明顯，否則會更容易讓刺客找到梅林。\n\n"
                . "這些是遊戲中可能會用到的暗號: ".Constant::arrayToString(Script::$script["cn"][Script::SECRETCODES]).".\n\n";
            Script::$script["pb"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["pb"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . " está do lado do Bem. Todos os agentes recebem o mesmo código secreto por meio de uma mensagem na conversa privada com o bot.\n\n"
                . "Os Agentes podem identificar-se usando estes códigos, de forma a ter mais chance de obter sucesso nas Missões. Lembrem-se, não deixem muito óbvio, ou os membros do Mal saberão quem são os agentes, facilitando o trabalho da assassina em aniquilar Merlin.\n\n"
                . "Possíveis códigos secretos: ".Constant::arrayToString(Script::$script["pb"][Script::SECRETCODES]).".\n\n";
            Script::$script["ph"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["ph"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . " ay mabuting tao. lahat ng Agent sa team ay may parehas na Secret Code galing kay Bot via PM.\n\n"
                . "Pwedeng mahanap ng Agent ang mga co-Agent gamit ang mga Secret Code, para matapos ng mabilis ang missions. Tandaan, wag masyadong halata, kung hindi, malalaman ng Evil Team na Agent kayo at mapapadali ang trabaho ng Assassin na Paslangin ang Merlin.\n\n"
                . "Mga posibleng Secret Codes: ".Constant::arrayToString(Script::$script["ph"][Script::SECRETCODES]).".\n\n";
            Script::$script["es"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["es"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . " está en el bando del Bien. Todos los agentes en el mismo equipo comparten el mismo código secreto recibido vía Mensaje Privado por el Bot.\n\n"
                . "Los agentes pueden encontrar aotros usando sus códigos secretos, así ellos podrán completar misiones más fácilmente. Recuerda, no lo hagas demasiado obio, o los malvados conocerán a los agentes y tendrán más fácil el trabajo de matar a Merlín.\n\n"
                . "Códigos secretos posibles: ".Constant::arrayToString(Script::$script["es"][Script::SECRETCODES]).".\n\n";
            Script::$script["zho"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["zho"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . "特务之间都会使用暗号来分辨自己的同伴。当然在群组使用暗号时候别太明显，否则会更容易让刺客找到梅林。\n\n"
                . "这些是遊戏中可能会用到的暗号: ".Constant::arrayToString(Script::$script["zho"][Script::SECRETCODES]).".\n\n";
            Script::$script["gdh"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["gdh"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . "喺好人，而特務會用暗號嚟搵自己同伴。\n\n"
                . "記住，喺群组用暗號得太明顯，壞人就好容易搵到梅林。\n\n"
                . "以下就喺遊戲中可能會用嘅暗號: ".Constant::arrayToString(Script::$script["gdh"][Script::SECRETCODES]).".\n\n";
            Script::$script["och"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["och"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . "屬於正派，而機械人會發放同一暗號予所有密探。"
                . "密探之間都會用暗號來找自己的同伴。但在群组使用暗号时候別太明顯，否则只會更容易讓刺客找到梅林。\n\n"
                . "這些是可能會用到的暗號: ".Constant::arrayToString(Script::$script["och"][Script::SECRETCODES]).".\n\n";
            Script::$script["ar"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["ar"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . "هو بصف الطيبين. كل الوكلاء الموجودين بنفس الفريق بإمكانهم التواصل مع بعضهم عبر البوت الخاص\n\n"
                . "الوكلاء بإمكانهم معرفة أعضاء الفريق الآخر بإستخدام أكواد سرية, معاً بإمكانهم الفوز بالمهمة بسهولة. تذكر, لا تكون واضحاً...و إلا سيعرف الأشرار الوكلاء و سيجعل وظيفة الحشاش أسهل بقتل مرلين.\n\n"
                . "الأكواد السرية المسموحة : ".Constant::arrayToString(Script::$script["ar"][Script::SECRETCODES]).".\n\n";
            Script::$script["fa"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["fa"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . "مأمور ها درباری هستن. اونها در طول بازی از طریق کدهای رمزگذاری شده ی مخصوصی از طریق پی وی بات با هم ارتباط برقرار میکنن\n\n"
                . "همه ی مأمور ها باید در طول بازی همدیگه رو از طریق کد ها بشناسن تا بتونن راحت تر به موفقیت برسن. توجه کنید که مأمور ها نباید نقششون رو معلوم کنن...در این صورت قاتل با شناختن اونها راحت تر میتونه مرلین رو بکشه.\n\n"
                . "کد های سری این ها هستن : ".Constant::arrayToString(Script::$script["fa"][Script::SECRETCODES]).".\n\n";


            Script::$script["en"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["en"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game and has to cooperate together to fail the quests.\n\n"
                . "Because Percival can see Merlin and Morgana, Morgana's primary job is to gain trust from Percival by acting as a Merlin. If Percival can be deceived, Merlin will be in trouble.\n\n";
            Script::$script["id"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["id"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Karena Percival dapat melihat Merlin dan Morgana, tugas utama Morgana adalah mendapatkan kepercayaan dari Percival dengan berpura-pura menjadi Merlin. Jika Percival dapat ditipu, maka Merlin akan berada dalam bahaya.\n\n";
            Script::$script["it"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["it"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " come giocatore malvagio, conosce i suoi compagni ad inizio partita (tranne Oberon) e deve cooperare con loro per far fallire le Missioni.\n\n"
                . "Siccome Percival può vedere Merlino e Morgana, il ruolo primario di Morgana è guadagnare la fiducia di Percival agendo come Merlino. Se Percival si lascia ingannare, Merlino sarà nei guai.\n\n";
            Script::$script["cn"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["cn"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . "遊戲一開始你會知道你的壞人同伴，除了奧北朗。你必須和你的同伴一起努力去讓任務失敗。\n\n"
                . "另外，你專門放虛假的消息，給好人以為是梅林，好讓派西維爾更難找到真梅林。\n\n";
            Script::$script["pb"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["pb"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " por ser uma jogadora do Mal, tem conhecimento dos outros membros ao início da partida (exceto Oberon). Ela deve colaborar para o fracasso das Missões.\n\n"
                . "Uma vez que Percival vê quem são Merlin e Morgana, sem distinguir um do outro, a tarefa principal de Morgana é ganhar a confiança de Percival agindo como Merlin. Se Percival puder ser enganado, Merlin estará em apuros.\n\n";
            Script::$script["ph"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["ph"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " bilang isang evil player na kilala ang iba pang Evil Team sa simula ng laro (maliban sa Oberon) at kailangang makipagtulungan sa mga kakampi upang mabigo ang Quests.\n\n"
                . "Dahil nakikita ng Percival ang Merlin at Morgana, Ang trabaho ng Morgana ay makuha ang tiwala ng Percival sa pagActing bilang Merlin. Kung ang Percival ay nauto, madali na lang mahanap ang Merlin.\n\n";
            Script::$script["es"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["es"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " como jugador malvado conoce a los otros jugadores del bando del Mal al principio de la partida y tiene que cooperar con ellos para sabotear las gestas.\n\n"
                . "Como Perceval puede ver a Merlín y a Morgana, el trabajo principal de Morgana es ganarse la confianza de Perceval actuando como Merlín. Si Perceval es engañado, Merlín podrá estar en problemas.\n\n";
            Script::$script["zho"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["zho"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " 遊戏当中实力最强的坏人。\n\n"
                . "除了能知道自己的队友是谁(除了欧泊朗)，他还能负责欺骗派西维尔和在遊戏结束时候刺杀梅林。\n\n";
            Script::$script["gdh"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["gdh"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " 喺壞人一名，遊戲開始時會知道壞人陣營有咩人（除左奧伯龍），同壞人一齊破壞啲任務。\n\n"
                . "好好利用你有既資訊，誤導珀西瓦里相信你係真梅林。\n\n";
            Script::$script["och"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["och"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " 屬於反派，在任務未開始時就已知反派一夥人，合力務求所有任務失敗。\n\n"
                . "莫甘娜負責欺騙派西維爾，令人誤會她是真梅林。\n\n";
            Script::$script["ar"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["ar"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " يلعب بدور الشرير و يعرف كل الأشرار من بداية اللعبة, يجب أن يجتمعوا حتى يحبطوا المهمة. \n\n"
                . "و لأن البريفسال بإمكانه رؤية مرلين و مورقانا, هدف مورقانا الأساسي هو كسب ثقته بإدعاءه أنه مرلين. إن كان هناك شخص يدعي كونه بريفسال, عندها مرلين سيكون في مأزق. \n\n";
            Script::$script["fa"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["fa"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " توی تیم یاغی ها بازی میکنه. مورگانا همه ی یاغی ها رو از ابتدای بازی میشناسه و باید برای شکست یه چالش همه رو دور هم جمع کنه \n\n"
                . "و چون پرسیوال مرلین و مورگانا رو نمیتونه تشخیص بده، وظیفه ی دوم مورگانا اینه که به جای مرلین برای پرسیوال نقش بازی کنه. در این صورت اگه پرسیوال باورش کنه، مرلین توی تله میفته. \n\n";


            Script::$script["en"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["en"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game and has to cooperate together to fail the quests.\n\n"
                . "Assassin can guess Merlin at the end of the game (if 3 quests already been succeed). If the guess is correct, whatever the result in the quests, Evil force will win.";
            Script::$script["id"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["id"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Assassin dapat menebak Merlin di akhir game (jika 3 quest sudah sukses). Jika Merlin berhasil dibunuh, apapun hasil di quest, tim jahat akan menang.";
            Script::$script["it"][Script::PU_ASSASSININFO]
                = "l'<b>".Script::$script["it"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " come giocatore malvagio conosce gli altri cattivi all'inizio della partita (tranne Oberon) e deve collaborare con loro per fallire le Missioni.\n\n"
                . "l'Assassino alla fine della partita può cercare di indovinare Merlino a fine partita (se 3 missioni sono state completate). Se l'ipotesi è giusta, nonostante le missioni completate, Il team malvagio vincerà!";
            Script::$script["cn"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["cn"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " 刺客會知道自己的同伴(除了奧北朗)，並協助他們令到好人們任務失敗。一旦好人成功完成3個任務，他有1次機會去刺殺梅林。梅林一死，壞人就贏。\n\n";
            Script::$script["pb"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["pb"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " por ser uma jogadora do Mal, tem conhecimento dos outros membros ao início da partida (exceto Oberon). Ela deve colaborar para o fracasso das Missões.\n\n"
                . "A Assassina pode tentar adivinhar quem é Merlin ao final da partida (caso 3 Missões tenham tido sucesso). Se ela escolher corretamente, independentemente do resultado das Missões, as forças do Mal vencerão.";
            Script::$script["ph"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["ph"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " bilang isang evil player na kilala ang iba pang Evil Team sa simula ng laro (maliban sa Oberon) at kailangang makipagtulungan sa mga kakampi upang mabigo ang Quests.\n\n"
                . "Ang Assassin ay pwedeng hulaan ang Merlin sa pagtatapos ng Laro (kung ang 3 Quests ay Success). Kung tama ang hula, kahit ano pa ang resulta ng Quest, Evil Team ang Mananalo.";
            Script::$script["es"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["es"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " como jugador malvado conoce a los otros jugadores del bando del Mal al principio de la partida y tiene que cooperar con ellos para sabotear las gestas.\n\n"
                . "El Asesino puede descubrir a Merlín al final del juego (si se completan 3 gestas satisfactoriamente). Si lo adivina correctamente, las fuerzas del Mal ganarán.";
            Script::$script["zho"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["zho"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " 刺客会知道自己的同伴(除了欧泊朗)，并协助他们令到好人们任务失败。一旦好人成功完成3个任务，他有1次机会去刺杀梅林。梅林一死，坏人就赢。\n\n";
            Script::$script["gdh"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["gdh"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . "係壞人一名，遊戲開始時會知道壞人陣營有咩人（除左奧伯龍），同壞人一齊破壞啲任務。\n\n"
                . "一旦好人成功執行 3 個任務，佢就要負責刺殺梅林，成功刺殺梅林嘅話壞人陣營會贏。";
            Script::$script["och"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["och"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . "會知道自己的同伴(除了奧伯倫)，並協助他們令到好人們任務失敗。\n\n"
                . "一旦正派成功完成 3 個任務，他有 1 次機會去刺殺梅林。梅林一死，反派就勝利。";
            Script::$script["ar"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["ar"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " يلعب بدور الأشرار و يعرف من هم الأشرار من بداية اللعبة, و يجب أن يجتمعوا معاً حتى تحبط المهمة. \n\n"
                . "الحشاش بإستطاعته تخمين من هي مرلين في نهاية اللعبة ( إذا كانت 3 مهمات قد نجحت بالفعل). إذا كان التخمين صحيح, مهما كانت نتيجة المهمات, قوة الأشرار ستفوز.";
            Script::$script["fa"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["fa"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " توی تیم یاغی ها بازی میکنه. قاتل همه ی یاغی ها رو از ابتدای بازی میشناسه و باید برای شکست یه چالش همه رو دور هم جمع کنه. \n\n"
                . "قاتل میتونه در انتهای بازی (اگه درباری ها سه پیروزی در چالش ها داشته باشن) مرلین رو حدس بزنه و بکشه. اگه حدس قاتل درست باشه و مرلین کشته بشه نتیجه هرچی که باشه باز هم تیم یاغی ها پیروز میشه.";


            Script::$script["en"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["en"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game and has to cooperate together to fail the quests.\n\n"
                . "Witch has the ability to know what are the roles that the good team holds, but witch doesn't know how much or who hold the roles. Use this information to narrow down the merlin.\n";
            Script::$script["id"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["id"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Witch mempunyai kemampuan untuk mengetahui peran apa saja yang ada di tim baik, tapi witch tidak mengetahui jumlah dan siapa yang memegang peran tersebut. Gunakan informasi ini untuk mencari merlin.";
            Script::$script["it"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["it"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . " come giocatore malvagio conosce gli altri cattivi a inizio partita (tranne Oberon) e deve collaborare insieme per fallire le missione.\n\n"
                . "La Strega ha l'abilità di conoscere quali sono i ruoli che i buoni hanno, ma non sa con certezza quanti o di chi sono i ruoli. Usa quest'informazione per scovare Merlino.\n";
            Script::$script["cn"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["cn"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . "身為巫師，他必須同已知的壞人(無法知道神秘壞人奧北朗是誰)聯手出擊，去阻止好人們完成任務。\n\n"
                . "知道好人的角色，但不知道該角色是屬於哪一個好人以及無法知道該角色的數量。\n";
            Script::$script["pb"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["pb"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . " por ser uma jogadora do Mal, tem conhecimento dos outros membros ao início da partida (exceto Oberon). Ela deve colaborar para o fracasso das Missões.\n\n"
                . "A Feiticeira tem a habilidade de conhecer os papéis do Bem que estão no jogo, mas não sabe quem são ou quantos são. Ela poderá usar este conhecimento para descobrir quem é Merlin.\n";
            Script::$script["ph"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["ph"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . " bilang isang evil player na kilala ang iba pang Evil Team sa simula ng laro (maliban sa Oberon) at kailangang makipagtulungan sa mga kakampi upang mabigo ang Quests.\n\n"
                . "Ang Bruha ay may Powers na malaman ang Role list ng Good Team, ngunit di alam ng Bruha kung ilan o sino ang may hawak ng role. Gamitin ang impormasyon upang mahanap ang Merlin.\n";
            Script::$script["es"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["es"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . " como jugador malvado conoce a los otros jugadores del bando del Mal al principio de la partida y tiene que cooperar con ellos para sabotear las gestas.\n\n"
                . "La Bruja tiene la habilidad de conocer los roles del bien presentes en la partida, pero no sabe quien y cuantos llevan esos roles. Usa esta información para estrechar con Merlín.\n";
            Script::$script["zho"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["zho"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . "身为巫师，他必须同已知的坏人(无法知道神秘坏人奥北朗是谁)联手出击，去阻止好人们完成任务。\n\n"
                . "知道好人的角色，但不知道该角色是属於哪一个好人以及无法知道该角色的数量。\n";
            Script::$script["gdh"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["gdh"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . "係壞人一名，遊戲開始時會知道壞人陣營有咩人（除左奧伯龍），同壞人一齊破壞啲任務。\n\n"
                . "女巫知道有邊啲身份，但唔知道嗰啲角色係邊個或者某一角色有幾多，可以利用手上有既資訊去幫隊友搵出邊嗰喺梅林。\n";
            Script::$script["och"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["och"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . "屬於反派，在任務未開始時就已知反派一夥人，合力務求所有任務失敗。\n\n"
                . "女巫會知道正派的角色，但不知道該角色是確實屬於哪一個以及該角色的數量；要收集更多資訊去猜測誰是梅林。\n";
            Script::$script["ar"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["ar"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . " كـلاعب بدور الأشرار, يعرف عن كل اللاعبين الأشرار من بداية اللعبة و يجب أن يجتمع معهم حتى يحبطوا المهمة. \n\n"
                . "ويتش لديه القدرة لمعرفة أدوار الفريق الطيب, لكن لا يعرف من يحمل هذا الدور. يستعمل هذه الميزة ليحبط مرلين. \n";
            Script::$script["fa"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["fa"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . " توی تیم یاغی ها بازی میکنه. جادوگر همه ی یاغی ها رو از ابتدای بازی میشناسه و باید برای شکست یه چالش همه رو دور هم جمع کنه. \n\n"
                . "جادوگر همه ی درباری ها رو میشناسه. اما نمیدونه چند نفرن و چه نقشی دارن. ولی میتونه با استفاده از اطلاعاتش باعث باخت تیم دربار بشه. \n";


            Script::$script["en"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["en"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game and has to cooperate together to fail the quests.\n\n"
                . "Morgause is a combination role from /morgana and /assassin. The player with this character can deceive Percival and Morgause can also kill Merlin at the game of the game.\n\n";
            Script::$script["id"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["id"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Morgause adalah peran kombinasi dari /morgana dan /assassin. Pemain dengan karakter ini dapat menipu Percival dan Morgause juga dapat membunuh Merlin di akhir game.\n\n";
            Script::$script["it"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["it"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . " come giocatore malvagio conosce gli altri giocatori all'inizio della partita e deve collaborare con loro per fallire le missioni.\n\n"
                . "Morgause è l'unione dei ruoli /morgana e /assassin. Il giocatore con questo personaggio può confondere Percival e sia uccidere Merlino a fine partita.\n\n";
            Script::$script["cn"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["cn"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . "遊戲當中實力最強的壞人，除了能知道自己的隊友是誰(除了奧北朗)，他還能負責欺騙派西維爾和在遊戲結束時候刺殺梅林。\n\n";
            Script::$script["pb"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["pb"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . " por ser do Mal, tem conhecimento dos outros membros ao início da partida (exceto Oberon). Deve colaborar para o fracasso das Missões.\n\n"
                . "Morgause é uma combinação entre /morgana e a /assassin. Ela pode enganar Percival e também poderá matar Merlin ao final da partida.\n\n";
            Script::$script["ph"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["ph"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . " bilang isang evil player na kilala ang iba pang Evil Team sa simula ng laro (maliban sa Oberon) at kailangang makipagtulungan sa mga kakampi upang mabigo ang Quests.\n\n"
                . "Morgause ay pinagsamang role mula sa /morgana at /assassin. Ang Player sa role na to ay pwedeng malinlang ang Percival at ang Morgassassin ay maaring paslangin ang Merlin sa pagtatapos ng Laro.\n\n";
            Script::$script["es"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["es"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . " como jugador malvado conoce a los otros jugadores del bando del Mal al principio de la partida y tiene que cooperar con ellos para sabotear las gestas.\n\n"
                . "Morgause es una combinación de los roles de /morgana y /assassin. El jugador con este personaje puede confundir a Perceval y puede matar a Merlín al final de la partida.\n\n";
            Script::$script["zho"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["zho"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . "，遊戏当中实力最强的坏人。\n\n"
                . "除了能知道自己的队友是谁(除了奥北朗)，他还能负责欺骗派西维尔和在遊戏结束时候刺杀梅林。\n\n";
            Script::$script["gdh"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["gdh"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . "係壞人一名，遊戲開始時會知道壞人陣營有咩人（除左奧伯龍），同壞人一齊破壞啲任務。\n\n"
                . "莫歌絲同時擁有莫甘娜及刺客嘅能力，佢要誤導珀西瓦里以為佢係梅林，再喺最後關頭刺殺梅林。\n\n";
            Script::$script["och"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["och"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . "屬於反派，在任務未開始時就已知反派一夥人，合力務求所有任務失敗。\n\n"
                . "莫歌絲有齊莫甘娜與刺客的能力：她不但負責欺騙派西維爾，亦會在適當時候出手擊殺梅林。\n\n";
            Script::$script["ar"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["ar"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . " كـ لاعب بدور الأشرار, هو يعرف كل اللاعبين الأشرار من بداية اللعبة و يجب أن يجتمع معهم حتى يحبطوا المهمة. \n\n"
                . "مورقوس هو مزيج بين مورقانا /morgana و الحشاش /assassin.  اللاعب بهذه الشخصية يدّعي بأنه بريفسال و مورقوس بإمكانه قتل مرلين في نهاية اللعبة. \n\n";
            Script::$script["fa"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["fa"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . " توی تیم یاغی ها بازی میکنه. مورگاس همه ی یاغی ها رو از ابتدای بازی میشناسه و باید برای شکست یه چالش همه رو دور هم جمع کنه. \n\n"
                . "مورگاس ترکیبی از مورگانا /morgana و قاتله /assassin.  مورگاس باید هم پرسیوال رو به اشتباه بندازه و هم در انتهای بازی میتونه مرلین رو بکشه. \n\n";


            Script::$script["en"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["en"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . " is a good person whose job is to succeed the quests.\n\n"
                . "At the start of the game, knight can have information about 2 neighborhood players. Knight knows whether there is no bad person between them, or there is at least 1 bad person. However, Knight cannot detect Mordred, so Mordred will be seen as a good person.\n\n";
            Script::$script["id"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["id"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . " adalah pemain baik yang bertugas menyukseskan quest.\n\n"
                . "Di awal permainan, knight dapat memperoleh informasi mengenai 2 pemain di sekelilingnya. Knight tahu apakah tidak ada pemain jahat dari kedua orang itu, atau terdapat minimal 1 orang jahat. Namun, Knight tidak dapat mendeteksi Mordred, sehingga Mordred terlihat seperti orang baik.\n\n";
            Script::$script["it"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["it"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . " è una brava persona il cui scopo è completare le missioni.\n\n"
                . "All'inizio della partita, il cavaliere avrà informazioni riguardo ai giocatori vicini (quello sopra e sotto). Il Cavaliere sa se tra di loro sono presenti solo buoni o c'è almeno un cattivo (Nota: Mordred potrebbe esser visto come buono).\n\n";
            Script::$script["cn"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["cn"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . " 保護帝國的騎士有辦法知道它左右2個玩家不是壞人或者至少有1個壞人。會見到莫德雷德是好人。\n\n";
            Script::$script["pb"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["pb"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . " é um membro do Bem. Seu papel é obter sucesso nas Missões.\n\n"
                . "Ao início da partida, o Cavaleiro pode ter informações sobre 2 jogadores próximos. O Cavaleiro saberá se não há alguém do Mal entre os 2 ou se ao menos 1 deles é do Mal. Porém, o Cavaleiro não vê Mordred, por isso, Mordred será informado como alguém do Bem.\n\n";
            Script::$script["ph"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["ph"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . " ay isang mabutins tao na ang trabaho ay ipanalo ang Quest.\n\n"
                . "Sa simula ng Laro, Ang Kawal ay impormasyon tungkol sa 2 kapitbahay na players. Alam ng kawal kung walang masama sa kanila, o may isang masama sa kanila. Ngunit, Hindi na deDetect ng Kawal ang Mordred, Makikita ang Mordred bilang mabuting tao.\n\n";
            Script::$script["es"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["es"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . " es una buena persona cuyo trabajo es completar las gestas.\n\n"
                . "Al principio de la partida, el caballero tiene información de 2 jugadores vecinos. El caballero conoce al menos uno de ellos es malvado, o ninguno. Sin embargo, el caballero no puede detectar a Mordred, así que Mordred será visto como un jugador bueno.\n\n";
            Script::$script["zho"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["zho"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . "保护王国的。\n\n"
                . "骑士有办法知道它左右2个玩家不是坏人或者至少有1个坏人，但会见到莫德雷德是好人。\n\n";
            Script::$script["gdh"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["gdh"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . "係好人一名，而職責就係力保任務成功。\n\n"
                . "遊戲一開始，騎士就會知道左右兩個玩家係好定壞：一係兩個都好人，一係就至少有一個壞人。而如果左右有玩家係莫德雷德，武士會當咗佢係好人。\n\n";
            Script::$script["och"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["och"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . "屬於正派，只會令任務成功。"
                . "騎士有能力知曉 2 位選手皆不是反派，或者至少有 1 位是反派。不過，莫德雷德會當作正派。\n\n";
            Script::$script["ar"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["ar"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . " هو شخص جيد هدفه بأن ينجح في المهمة. \n\n"
                . "في بداية اللعبة, بإمكان الفارس الحصول معلومات عن 2 من أقرباءه ( أقرب 2 من عنده من الأعلى و من الأسفل ). الفارس يعرف إذا كان هناك شخص سيء من بينهم, أو على الأقل شخص واحد سيء. على أي حال...الفارس لا يمكن معرفة موردير, إذاً سيرى موردريد على أساس أنه شخص جيد. \n\n";
            Script::$script["fa"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["fa"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . " شوالیه همونطور که از اسمش پیداست یکی از درباری هاست و وظیفش پیروزی در چالش هاست. \n\n"
                . "در ابتدای بازی شوالیه میتونه دوتا از همسایه هاش رو بشناسه. شوالیه میتونه یاغی ای که میون اونها وجود داره رو ببینه و ممکنه حداقل یه یاغی وجود داشته باشه یا هردونفر درباری باشن. همچنین شوالیه نمیتونه موردرد رو ببینه واسه همین موردرد به عنوان یه درباری به اون نشون داده میشه. \n\n";


            // NEW
            Script::$script["en"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["en"][Script::GOOD_LANCELOT]."</b>"
                . " is originally a good person whose job is to succeed the quests.\n\n"
                . "However, there is a slight chance in a quest, Good Lancelot will switch role with the Evil Lancelot. If that happens, then in that quest, the lady will see the Good Lancelot as evil, and the winning condition for Good Lancelot will also change (for that quest only)\n\n";
            Script::$script["id"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["id"][Script::GOOD_LANCELOT]."</b>"
                . " awalnya adalah orang baik yang tugasnya menyukseskan misi\n\n"
                . "Namun, ada kemungkinan di suatu misi, Good Lancelot akan bertukar peran dengan Evil Lancelot. Jika itu terjadi, maka di misi itu, lady akan melihat Good Lancelot sebagai Jahat, dan kondisi kemenangan untuk Good Lancelot juga berubah (untuk misi itu saja)\n\n";
            Script::$script["it"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["it"][Script::GOOD_LANCELOT]."</b>"
                . " è originalmente una buona persona il cui scopo è completare le quest.\n\n"
                . "Però, c'è una piccola probabilità che in una quest il Lancillotto buono scambia il ruolo con il Lancillotto Cattivo. Se ciò accade, allora in quella quest, la ragazza del lago vedrà il Lancillotto Buono come cattivo, e la condizione di vittoria cambierà (solo per quella quest).\n\n";
            Script::$script["cn"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["cn"][Script::GOOD_LANCELOT]."</b>"
                . " 是屬於好人陣型的隊伍成員之一，你要負責讓任務成功。\n\n"
                . "可惜，依然會有很微小的機率正義的蘭斯洛特會更改身份變身成為壞人的蘭斯洛特。如果這樣的情況發生了，湖女會見到是好人的你是壞人。當然正義的蘭斯洛特勝利的條件也更改了(只限當時後執行的任務罷了)\n\n";
            Script::$script["pb"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["pb"][Script::GOOD_LANCELOT]."</b>"
                . " is originally a good person whose job is to succeed the quests.\n\n"
                . "However, there is a slight chance in a quest, Good Lancelot will switch role with the Evil Lancelot. If that happens, then in that quest, the lady will see the Good Lancelot as evil, and the winning condition for Good Lancelot will also change (fot that quest only)\n\n";
            Script::$script["ph"][Script::PU_GOODLANCELOTINFO]
                = "Ang <b>".Script::$script["ph"][Script::GOOD_LANCELOT]."</b>"
                . "  ay orihinal na mabuting tao na nag misyon ay manalo sa Quest.\n\n"
                . "Ngunit Subalit Datapwat, may slight chance na mag switch ng role ang Good Lancelot na maging Evil Lancelot sa isang quest. Kung mangyayari iyon sa quest, masisilip ng Babae sa Septic Tank na si Good Lancelot ay masama at ang winning condition ng Good Lancelot ay magbabago rin (para lang sa quest na iyon)\n\n";
            Script::$script["es"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["es"][Script::GOOD_LANCELOT]."</b>"
                . " is originally a good person whose job is to succeed the quests.\n\n"
                . "However, there is a slight chance in a quest, Good Lancelot will switch role with the Evil Lancelot. If that happens, then in that quest, the lady will see the Good Lancelot as evil, and the winning condition for Good Lancelot will also change (fot that quest only)\n\n";
            Script::$script["zho"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["zho"][Script::GOOD_LANCELOT]."</b>"
                . " is originally a good person whose job is to succeed the quests.\n\n"
                . "However, there is a slight chance in a quest, Good Lancelot will switch role with the Evil Lancelot. If that happens, then in that quest, the lady will see the Good Lancelot as evil, and the winning condition for Good Lancelot will also change (fot that quest only)\n\n";
            Script::$script["gdh"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["gdh"][Script::GOOD_LANCELOT]."</b>"
                . " 原本屬於好人陣營。\n\n"
                . "遊戲進行中會有好細嘅機會邪惡蘭斯洛特會同正義蘭斯洛特交換身份。交換身份後，湖女會見到正義蘭斯洛特喺壞人，正義蘭斯洛特亦會加入咗壞人陣營。"
                . "(係分支1，邪惡蘭斯洛特可以選擇令任務成功或者失敗。但係，係分支2嘅遊戲裡面，當佢執行任務時候，邪惡蘭斯洛特只能夠令任務失敗。)\n\n";
            Script::$script["och"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["och"][Script::GOOD_LANCELOT]."</b>"
                . " is originally a good person whose job is to succeed the quests.\n\n"
                . "However, there is a slight chance in a quest, Good Lancelot will switch role with the Evil Lancelot. If that happens, then in that quest, the lady will see the Good Lancelot as evil, and the winning condition for Good Lancelot will also change (fot that quest only)\n\n";
            Script::$script["ar"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["ar"][Script::GOOD_LANCELOT]."</b>"
                . " هو بالأصل شخص جيد هدفه بأنه ينجح بالمهام. \n\n"
                . "على أي حال, هناك إحتمال في المهمة...اللانسوت الجيد يغير دوره مع اللانسوت الشرير. إن حصل هذا, إذاً في تلك المهمة...السيدة سترى اللانسوت الجيد كـ شرير...و حالة الفوز للانسوت الجيد ستتغير (فقط لمهمة واحدة). \n\n";
            Script::$script["fa"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["fa"][Script::GOOD_LANCELOT]."</b>"
                . " یکی از درباری هاست و وظیفش پیروزی در چالش هاست. \n\n"
                . "با این حال لنسلات خوب این شانس رو داره که توی چالش جاش با لنسلات شیطانی عوض بشه. در این صورت بانوی دریاچه لنسلات شیطانی رو لنسلات خوب میبینه. همچنین با تغییر نقش ها، هدف پیروزی یا شکست در اون چالش برای لنسلات ها هم فرق میکنه (فقط برای اون چالش). \n\n";

            // NEW
            Script::$script["en"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["en"][Script::EVIL_LANCELOT]."</b>"
                . " is originally an evil person. He is known to Merlin and the other evil friends. However, Evil Lancelot doesn't know his evil teammates.\n\n"
                . "There is a slight chance in a quest, Evil Lancelot will switch role with the Good Lancelot. If that happens, then in that quest, the lady will see the Evil Lancelot as good, and the winning condition for Evil Lancelot will also change (for that quest only)\n\n"
                . "In Variant 1, Evil Lancelot may give SUCCESS OR FAIL to quest. In Variant 2, Evil Lancelot must give FAIL on the quest he is on.";
            Script::$script["id"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["id"][Script::EVIL_LANCELOT]."</b>"
                . " awalnya adalah orang jahat. Dia diketahui oleh Merlin dan teman jahat lainnya. Namun, Evil Lancelot sendiri tidak tahu teman jahatnya.\n\n"
                . "Ada kemungkinan di suatu misi, Evil Lancelot akan bertukar peran dengan Good Lancelot. Jika itu terjadi, maka di misi itu, lady akan melihat Evil Lancelot sebagai Baik, dan kondisi kemenangan untuk Evil Lancelot juga berubah (untuk misi itu saja)\n\n"
                . "Di Varian 1, Evil Lancelot boleh memberikan SUKSES atau GAGAL. Di Varian 2, Evil Lancelot harus memberikan GAGAL di misi yang dia ikuti.";
            Script::$script["it"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["it"][Script::EVIL_LANCELOT]."</b>"
                . " è originalmente una persona cattiva. È conosciuta a Merlino e gli altri cattivi. Però, lui non conosce i suoi compagni.\n\n"
                . "Però, c'è una piccola probabilità che in una quest, Il Lancillotto cattivo scambi il ruolo con Lancillotto Buono. Se ciò dovesse succedere, allora in quella quest la Ragazza del lago vedrà il Lancillotto Cattivo come buono e la sua condizione di vittoria cambierà (solo per questa quest)\n\n"
                . "In Variant 1, Evil Lancelot may give SUCCESS OR FAIL to quest. In Variant 2, Evil Lancelot must give FAIL on the quest he is on.";
            Script::$script["cn"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["cn"][Script::EVIL_LANCELOT]."</b>"
                . " 原本是屬於壞人隊伍的人員之一。梅林和其他壞人隊伍會知道他是誰，不過他自己本身不會知道他壞人隊伍的成員有誰。\n\n"
                . "在遊戲中會有極小的機率，邪惡的蘭斯洛特會和正義的蘭斯洛特交換身份。如果這種情況發生，湖女會見到邪惡的蘭斯洛特是壞人。然後邪惡蘭斯洛特的勝利條件也會跟著改變（只限當時後執行的任務罷了）。\n\n"
                . "在分支1，邪惡的蘭斯洛特可以選擇讓任務成功或者失敗。然而，在分支2的遊戲裡面，當他執行任務時候，邪惡的蘭斯洛特只能讓任務失敗。";
            Script::$script["pb"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["pb"][Script::EVIL_LANCELOT]."</b>"
                . " is originally an evil person. He is known to Merlin and the other evil friends. However, Evil Lancelot doesn't know his evil teammates.\n\n"
                . "There is a slight chance in a quest, Evil Lancelot will switch role with the Good Lancelot. If that happens, then in that quest, the lady will see the Evil Lancelot as good, and the winning condition for Evil Lancelot will also change (for that quest only)\n\n"
                . "In Variant 1, Evil Lancelot may give SUCCESS OR FAIL to quest. In Variant 2, Evil Lancelot must give FAIL on the quest he is on.";
            Script::$script["ph"][Script::PU_EVILLANCELOTINFO]
                = "Ang <b>".Script::$script["ph"][Script::EVIL_LANCELOT]."</b>"
                . " ay orihinal na masamang tao. Kilala siya ng Merlin at ng kanyang ibang evil friends. Ngunit hindi niya kilala ang mga kakampi niya.\n\n"
                . "May slight chance na mag switch ng role ang Evil Lancelot na maging Good Lancelot sa isang quest. Kung mangyayari iyon sa quest, masisilip ng Babae sa Septic Tank na si Evil Lancelot ay mabuti at ang winning condition ng Good Lancelot ay magbabago rin (para lang sa quest na iyon)\n\n"
                . "Sa Variant 1, Ang Evil Lancelot ay pwede magbigay ng SUCCESS o FAIL sa Quest. Sa Variant 2, Ang Evil Lancelot ay kailangang magbigay FAIL sa Quest kung saan siya kabilang.";
            Script::$script["es"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["es"][Script::EVIL_LANCELOT]."</b>"
                . " is originally an evil person. He is known to Merlin and the other evil friends. However, Evil Lancelot doesn't know his evil teammates.\n\n"
                . "There is a slight chance in a quest, Evil Lancelot will switch role with the Good Lancelot. If that happens, then in that quest, the lady will see the Evil Lancelot as good, and the winning condition for Evil Lancelot will also change (for that quest only)\n\n"
                . "In Variant 1, Evil Lancelot may give SUCCESS OR FAIL to quest. In Variant 2, Evil Lancelot must give FAIL on the quest he is on.";
            Script::$script["zho"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["zho"][Script::EVIL_LANCELOT]."</b>"
                . " is originally an evil person. He is known to Merlin and the other evil friends. However, Evil Lancelot doesn't know his evil teammates.\n\n"
                . "There is a slight chance in a quest, Evil Lancelot will switch role with the Good Lancelot. If that happens, then in that quest, the lady will see the Evil Lancelot as good, and the winning condition for Evil Lancelot will also change (for that quest only)\n\n"
                . "In Variant 1, Evil Lancelot may give SUCCESS OR FAIL to quest. In Variant 2, Evil Lancelot must give FAIL on the quest he is on.";
            Script::$script["gdh"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["gdh"][Script::EVIL_LANCELOT]."</b>"
                . " 原本屬於壞人陣營，會被梅林同埋其他壞人知道係壞人，但佢並唔知道有邊啲壞人。\n\n"
                . "遊戲進行中會有好細嘅機會邪惡蘭斯洛特會同正義蘭斯洛特交換身份。交換身份後，湖女會見到邪惡蘭斯洛特喺好人，邪惡蘭斯洛特亦會加入咗好人陣營。\n\n"
                . "(係分支1，邪惡蘭斯洛特可以選擇令任務成功或者失敗。但係，係分支2嘅遊戲裡面，當佢執行任務時候，邪惡蘭斯洛特只能夠令任務失敗。)";
            Script::$script["och"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["och"][Script::EVIL_LANCELOT]."</b>"
                . " is originally an evil person. He is known to Merlin and the other evil friends. However, Evil Lancelot doesn't know his evil teammates.\n\n"
                . "There is a slight chance in a quest, Evil Lancelot will switch role with the Good Lancelot. If that happens, then in that quest, the lady will see the Evil Lancelot as good, and the winning condition for Evil Lancelot will also change (for that quest only)\n\n"
                . "In Variant 1, Evil Lancelot may give SUCCESS OR FAIL to quest. In Variant 2, Evil Lancelot must give FAIL on the quest he is on.";
            Script::$script["ar"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["ar"][Script::EVIL_LANCELOT]."</b>"
                . " هو بالأساس شخص شرير. يعرف عنه جميع طاقم الأشرار , لكن هو لا يعرفهم.\n\n"
                . "هناك إحتمال في المهمة, اللانسوت الشرير يتغير مع اللانسوت الطيب...لو حصل هذا, إذاً في تلك المهمة....السيدة سترى اللانسوت الشرير على أساس أنه طيب, و حالة الفوز أيضاً ستتغير ( لمهمة واحدة فقط ) .\n\n"
                . "في الإصدار الأول, بإمكان اللانسوت الشرير إعطاء قبول أو رفض للمهمة. و لكن في الإصدار الثاني...اللانسوت الشرير يجب عليه أن يعطي رفض للمهمة التي هو فيها.";
            Script::$script["fa"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["fa"][Script::EVIL_LANCELOT]."</b>"
                . " یکی از یاغی هاست که مرلین و یاغی ها اون رو میشناسن ولی اون کسی رو نمیشناسه.\n\n"
                . " با این حال لنسلات شیطانی این شانس رو داره که توی چالش جاش با لنسلات خوب عوض بشه. در این صورت بانوی دریاچه لنسلات خوب رو لنسلات شیطانی میبینه. همچنین با تغییر نقش ها، هدف پیروزی یا شکست در اون چالش برای لنسلات ها هم فرق میکنه (فقط برای اون چالش)..\n\n"
                . "در ورژن 1 لنسلات شیطانی میتونه توی چالش ها موفقیت یا شکست رو انتخاب کنه. اما در ورژن 2 باید حتما شکست رو انتخاب کنه.";



            Script::$script["en"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["en"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . " is an evil player but all other evil players do not know the oberon's identity. Merlin can still see Oberon though."
                . " Oberon knows all the evil teammates but should not use Private Message to communicate.";
            Script::$script["id"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["id"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat namun pemain jahat lain tidak tahu identitas Oberon. Sayangnya, Merlin masih dapat melihat Oberon."
                . " Oberon tahu semua teman jahatnya, namun tidak boleh menggunakan PM untuk berkomunasi.";
            Script::$script["it"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["it"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . " è un giocatore malvagio ma gli altri giocatori non sapranno la sua identità. Merlino lo rivela comunque come malvagio."
                . " Oberon conosce i compagni ma non può scrivergli con i Messaggi Privati.";
            Script::$script["cn"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["cn"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . " 最神秘的壞人，一開始能知道所有壞人，但其他壞人卻不會知道他的存在。梅林能知道他就是壞人卻不會知道他是奧北朗。此角色不能PM其他壞人玩家，這會破壞遊戲的平衡。";
            Script::$script["pb"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["pb"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . " é um jogador do Mal, mas todos os outros jogadores do Mal não sabem sua identidade. Merlin, no entanto, ainda vê Oberon."
                . " Oberon sabe quem são os outros jogadores do Mal, mas não deve usar a conversa privada para se comunicar.";
            Script::$script["ph"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["ph"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . " ay evil player ngunit di kilala ng Evil Team ang Oberon. Pero nakikita parin ng Merlin ang Oberon."
                . " Alam ng Oberon lahat ng Evil Team Ngunit bawal gumanit ng PM para kausapin ang mga kakampi.";
            Script::$script["es"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["es"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . " es del bando del Mal, pero los otros jugadores malvados no conocen la identidad de Oberón. Merlín puede ver a Oberón de cualquier forma."
                . " Oberón conoce a todos los miembros del bando del Mal pero no debe usar Mensajes Privados para comunicarse.";
            Script::$script["zho"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["zho"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . "，最神秘的坏人，一开始能知道所有坏人，但其他坏人却不会知道他的存在。梅林能知道他就是坏人。此角色不能PM其他坏人玩家，这会破坏遊戏的平衡。";
            Script::$script["gdh"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["gdh"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . "係壞人，雖然佢知道邊啲係壞人，其他壞人亦唔知佢係壞人陣營，不過就逃唔出梅林嘅法眼。";
            Script::$script["och"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["och"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . "屬於反派，但你的反派同伴卻不認識你。梅林反而知曉你是反派。";
            Script::$script["ar"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["ar"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . "كون بصف اللاعبين الأشرار, لكن كل الأشرار لا يعرفون هوية أوبيرن...مع ذلك, مرلين بإمكانها رؤية أوبيرن."
                . "  أوبيرن يعرف جميع أصدقاءه الأشرار, لكن ممنوع أن يستخدم التواصل المنفرد.";
            Script::$script["fa"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["fa"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . "اوبرن با تیم یاغی هاست ولی هیچکدوم از یاغی ها اون رو نمیشناسن...با این حال اوبرن برای مرلین قابل شناساییه."
                . "  اوبرن تمام هم تیمی های یاغی خودش رو میشناسه ولی نمیتونه از پیام خصوصی برای صحبت استفاده کنه.";


            Script::$script["en"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["en"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game and has to cooperate together to fail the quests.\n\n";
            Script::$script["id"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["id"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n";
            Script::$script["it"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["it"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . " come giocatore malvagio, conosce gli altri giocatori a inizio partita (tranne Oberon) e deve collaborare con loro per fallire le missioni.\n\n";
            Script::$script["cn"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["cn"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . " 一個非常普通的小偷。你只知道你自己的壞人同伴，除了奧北朗。總之，能力不強的你無法用特殊能力對付好人，但你依然可以用你的口才，用盡一切手段去阻止任務成功。\n\n";
            Script::$script["pb"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["pb"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . " por ser um jogador do Mal, tem conhecimento dos outros membros ao início da partida (exceto Oberon). Deve colaborar para o fracasso das Missões.\n\n";
            Script::$script["ph"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["ph"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . " bilang isang evil player na kilala ang iba pang Evil Team sa simula ng laro (maliban sa Oberon) at kailangang makipagtulungan sa mga kakampi upang mabigo ang Quests.\n\n";
            Script::$script["es"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["es"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . " como jugador malvado conoce a los otros jugadores del bando del Mal al principio de la partida y tiene que cooperar con ellos para sabotear las gestas.\n\n";
            Script::$script["zho"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["zho"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . " 一个非常普通的小偷。你只知道你自己的坏人同伴，除了欧泊朗。总之，能力不强的你无法用特殊能力对付好人，但你依然可以用你的口才，用尽一切手段去阻止任务成功。\n\n";
            Script::$script["gdh"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["gdh"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . "係壞人，遊戲開始時會知道壞人陣營有咩人（除左奧伯龍），同壞人一齊破壞啲任務。\n\n";
            Script::$script["och"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["och"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . "屬於反派，在任務未開始時就已知反派一夥人，合力務求所有任務失敗。\n\n";
            Script::$script["ar"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["ar"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . " كـ لاعب بدور الأشرار, يعرف عن كل اللاعبين الأشرار من بداية اللعبة و يجب أن يجتمع معهم حتى يحبطوا المهمة. \n\n";
            Script::$script["fa"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["fa"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                ." دزد یکی از یاغی هاست. وظیفه ی دزد اینه که به کمک بقیه ی یاغی ها چالش ها رو به سمت شکست ببره. \n\n";


        }
    }

    static function getNameByRole($role, $lang="en"){
        if (!Script::$inited) {
            Script::init();
        }
        switch ($role) {
            case Constant::MERLIN:
                return Script::$script[$lang][Script::MERLIN];
            case Constant::PERCIVAL:
                return Script::$script[$lang][Script::PERCIVAL];
            case Constant::GOOD_NORMAL:
                return Script::$script[$lang][Script::SERVANT];
            case Constant::MORDRED:
                return Script::$script[$lang][Script::MORDRED];
            case Constant::ASSASSIN:
                return Script::$script[$lang][Script::ASSASSIN];
            case Constant::MORGANA:
                return Script::$script[$lang][Script::MORGANA];
            case Constant::OBERON:
                return Script::$script[$lang][Script::OBERON];
            case Constant::BAD_NORMAL:
                return Script::$script[$lang][Script::THIEF];
            case Constant::MORGAUSE:
                return Script::$script[$lang][Script::MORGAUSE];
            case Constant::KNIGHT:
                return Script::$script[$lang][Script::KNIGHT];
            case Constant::NINJA:
                return Script::$script[$lang][Script::NINJA];
            case Constant::AGENT:
                return Script::$script[$lang][Script::AGENT];
            case Constant::WITCH:
                return Script::$script[$lang][Script::WITCH];
            case Constant::AUDITOR:
                return Script::$script[$lang][Script::AUDITOR];
            case Constant::GOOD_LANCELOT:
                return Script::$script[$lang][Script::GOOD_LANCELOT];
            case Constant::EVIL_LANCELOT:
                return Script::$script[$lang][Script::EVIL_LANCELOT];
            default:
                return "undefined";
        }
    }

}
