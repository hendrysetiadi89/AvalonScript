<?php

class Constant{
    static $DEVELOPMENT;

    // $gameStatus
    const NOT_CREATED = 0;
    const CREATED = 1;
    const START_RANDOM_ROLES = 2;
    const DISCUSS_BEFORE_ASSIGNING_QUEST = 3;
    const ASSIGN_QUEST_PRIVATE = 4;
    // const DISCUSS_APPROVE_REJECT_QUEST_GROUP = 5;
    const EXEC_APPROVE_REJECT_QUEST_GROUP = 6;
    const EXEC_QUEST_PRIVATE = 7;
    const EXEC_LADY_OF_LAKE_PRIVATE = 8;
    const EXEC_KILL_MERLIN_PRIVATE = 9;

    const MIN_PLAYER = 5;
    const MAX_PLAYER = 10;

    const MERLIN = 0;
    const PERCIVAL = 1;
    const GOOD_NORMAL = 2;
    const MORDRED = 3;
    const ASSASSIN = 4;
    const MORGANA = 5;
    const OBERON = 6;
    const BAD_NORMAL = 7;

    const MORGAUSE = 8;
    const KNIGHT = 9;
    const NINJA = 10;
    const AGENT = 11;
    const WITCH = 12;
    const AUDITOR = 13;

    const GOOD_LANCELOT = 14;
    const EVIL_LANCELOT = 15;

    const THRES_REMIND = 9; // $updatesTimeout + 1

    static $_120; // start game
    static $_30;  // $_discussApproveRejectGroup
    static $_45;  // exec quest private
    static $_60;  // assignment_private, exec approve reject group, exec lady of the lake private
    static $_90;  // discuss assignment group, exec kill merlin private

    static $_startGame;
    static $_startGame_r1;
    static $_startGame_r2;
    static $_startRandomRoles;
    static $_discussAssignQuestGroup;
    static $_discussAssignQuestGroup_r1;
    static $_discussAssignQuestGroup_r2;
    static $_assignQuestPrivate;
    static $_execApproveRejectGroup;
    static $_execApproveRejectGroup_r1;
    static $_execQuestPrivate;
    static $_execQuestPrivate_r1;
    static $_execLadyOfTheLakePrivate;
    static $_execKillMerlin;
    static $_execKillMerlin_r1;
    static $_execKillMerlin_r2;

    static $imgStartId;
    static $imgBadGuysWonId;
    static $imgGoodGuysWonId;
    static $imgStartChaosId;

    static $advertisementImg;

    // index for $players
    const ROLE = "role";
    const INDEX = "role_index";
    const LAST_MESSAGE_ID = "lmsgid";

    // index for $questAssigneeIDsHistory
    const FAIL_COUNT = "fail_count";
    const ASSIGNEEIDS = "assigneeIDs";
    const REJECTIDS = "rejectIDs";
    const KINGID = "king_id";

    // value for mode
    const MODE_NORMAL = 0;
    const MODE_CHAOS = 1;

//    const EMO_KING = 0x1F451;
//    const EMO_LADY = 0x1F469;
//    const EMO_SUCCESS = 0x2714;
//    const EMO_FAIL = 0x274C;
//    const EMO_RED_CIRCLE = 0x1F534;
//    const EMO_EVIL = 0x1F608;
//    const EMO_SMILE = 0x1F642;
//    const EMO_YES = 0x1F44D;
//    const EMO_NO = 0x1F44E;
//    const EMO_MEGAPHONE = 0x1F4E3;

    const EMO_KING_B = '👑';
    const EMO_LADY_B = '👩';
    const EMO_SUCCESS_B = '✔';
    const EMO_SUCCESS_2 = '✅';
    const EMO_FAIL_B = '❌';
    const EMO_RED_CIRCLE_B= '🔴';
    const EMO_EVIL_B = '😈';
    const EMO_SMILE_B = '🙂';
    const EMO_YES_B = '👍';
    const EMO_NO_B = '👎';
    const EMO_MEGAPHONE_B = '📣';
    const EMO_CAR = '🚗';
    const EMO_SINGLE_EXCLAMATION_MARK = '❗';
    const EMO_EXCLAMATION_MARK = '‼';

    const EMO_MERLIN = '🔮';
    const EMO_PERCIVAL = '⚔';
    const EMO_MORGANA = '👸';
    const EMO_OBERON = '👹';
    const EMO_NINJA = '🏹';
    const EMO_MORDRED = '🎩';
    const EMO_SERVANT = '👱';
    const EMO_THIEF = '👲';
    const EMO_WITCH = '👁';
    const EMO_AGENT = '🕵';
    const EMO_AUDITOR = '⚖';
    const EMO_ASSASSIN = '🗡';
    const EMO_MORGAUSE = '👱‍♀';
    const EMO_KNIGHT = '🏇';
    const EMO_EVIL_LANCELOT = '👺';
    const EMO_GOOD_LANCELOT = '🤥';

    const EMO_PROHIBITED = '🚫';
    const EMO_HEART_NOT_SWITCH = '💕';
    const EMO_HEART_SWITCH = '💞';



    const idString = "Bahasa Indonesia";
    const enString = "English";
    const itString = "Italiano";
    const cnString = "繁體中文";
    const pbString = "Português (Brasil)";
    const phString = "Filipino";
    const esString = "Español";
    const zhoString = "简体中文";
    const yueString = "港澳粵語";
    const ochString = "正體中文";
    const arString = "اللغة العربية";
    const faString = "فارسی";

    private static $inited = false;
    public static $questAssigneeMap;
    public static $twoFailsRequired;

    public static $normalRoleMap;
    public static $normalLancelotRoleMap;
    public static $chaosRoleMap;
    public static $chaosLancelotRoleMap;

    public static $lancelotVariant1;
    public static $lancelotVariant2;

    static function isGNBPlayer($role, $isLancelotSwitched){
        switch ($role) {
            case Constant::MERLIN:
            case Constant::PERCIVAL:
            case Constant::GOOD_NORMAL:
            case Constant::KNIGHT:
            case Constant::AGENT:
            case Constant::AUDITOR:
                return 1;
            case Constant::GOOD_LANCELOT:
                return $isLancelotSwitched? -1: 1;
            case Constant::EVIL_LANCELOT:
                return $isLancelotSwitched? 1: -1;
            default:
                return -1;
        }
    }

    static function isAppearGoodPlayer($role){
        switch ($role) {
            case Constant::MERLIN:
            case Constant::PERCIVAL:
            case Constant::GOOD_NORMAL:
            case Constant::KNIGHT:
            case Constant::MORDRED:
            case Constant::NINJA:
            case Constant::AGENT:
            case Constant::AUDITOR:
            case Constant::GOOD_LANCELOT:
                return 1;
            default:
                return -1;
        }
    }

    static function getLanguageString($langID){
        switch ($langID) {
            case "id": return Constant::idString;
            case "en": return Constant::enString;
            case "it": return Constant::itString;
            case "cn": return Constant::cnString;
            case "pb": return Constant::pbString;
            case "ph": return Constant::phString;
            case "es": return Constant::esString;
            case "zho": return Constant::zhoString;
            case "yue": return Constant::yueString;
            case "och": return Constant::ochString;
        }
    }

    static function init(){
        // if have not inited
        if (!Constant::$inited) {
            if (getenv('DEVELOPMENT') >= 1) {
                Constant::$DEVELOPMENT = true;
            }
            else {
                Constant::$DEVELOPMENT = false;
            }
            if (Constant::$DEVELOPMENT) {
                Constant::$_120 = 25;
                Constant::$_30 = 12;
                Constant::$_45 = 18;
                Constant::$_60 = 18;
                Constant::$_90 = 22;

//                Constant::$_startGame = 6;
//                Constant::$_startGame_r1 = 2;
//                Constant::$_startGame_r2 = 4;

                Constant::$_startGame = 120;
                Constant::$_startGame_r1 = 60;
                Constant::$_startGame_r2 = 90;

                // Pao LDP
//                Constant::$advertisementImg[0] = "AgADBQADs6cxG5qM6xBnPQuFf9bNYpEryjIABApl-4l6jjwoYhIBAAEC";
//                // Sabrina
//                Constant::$advertisementImg[1] = "AgADBQADtKcxG5qM6xBQHeaaBSN2KeQ3yjIABD9zEA6lacs3QzYAAgI";
//                // new arrival
//                Constant::$advertisementImg[2] = "AgADBQADtacxG5qM6xBr9Y6PKevg6odWyjIABB8odYZQXlS9hjcAAgI";
//                // pancasila
//                Constant::$advertisementImg[3] = "AgADBQADtqcxG5qM6xDlCLzNRDpJ5h9QyjIABH6QKYOHG-GiPjYAAgI";


//                Constant::$_120 = 8;
//                Constant::$_30 = 2;
//                Constant::$_60 = 4;
//                Constant::$_90 = 6;
//
//                Constant::$_startGame = 6;
//                Constant::$_startGame_r1 = 2;
//                Constant::$_startGame_r2 = 4;
            }
            else{
                Constant::$_120 = 120;
                Constant::$_30 = 30;
                Constant::$_45 = 45;
                Constant::$_60 = 60;
                Constant::$_90 = 90;

                Constant::$_startGame = Constant::$_120;
                Constant::$_startGame_r1 = Constant::$_60;
                Constant::$_startGame_r2 = Constant::$_90;

                // Pao LDP
//                Constant::$advertisementImg[0] = "AgADBQADsKcxG_bVQRCUHZVHJO5Z_ZEryjIABApl-4l6jjwoYhIBAAEC";
//                // Sabrina
//                Constant::$advertisementImg[1] = "AgADBQADsacxG_bVQRDUx4kWiaRR4O4-yjIABI6tXaHqCJ-SZDcAAgI";
//                // new arrival
//                Constant::$advertisementImg[2] = "AgADBQADsqcxG_bVQRBNBSxTeTKA05pUyjIABZknMn0aDk5NNgACAg";
//                // pancasila
//                Constant::$advertisementImg[3] = "AgADBQADs6cxG_bVQRBgoHM_meBcSlYfwTIABAxQBfFkZHak9xMCAAEC";
            }

            if (endsWith( getenv('BOTTOKEN'),'8')) { // Production
//                Constant::$imgStartId = "AgADBQADq6cxG_bVQRApEAcuak3bkHIdyjIABJ-o6A2a-95OQvoAAgI";
//                Constant::$imgGoodGuysWonId = "AgADBQADrKcxG_bVQRDgU2GUhy6msBJHyjIABB3ZHwbpLtcErxoAAgI";
//                Constant::$imgBadGuysWonId = "AgADBQADracxG_bVQRCWH1UNuXKYa-QyyjIABCEL7vFWe8MaAhoAAgI";
//                Constant::$imgStartChaosId = "AgADBQADrqcxG_bVQRBFYeNE3lTU1fI3yjIABBJupgI1PVNj6BoAAgI";
//                Constant::$imgStartId = "AgADBQADuKcxG9goeFUKpibDaozGkodGyjIABP3LTIgt_JTPKEYBAAEC";
//                Constant::$imgGoodGuysWonId = "AgADBQADuqcxG9goeFWhVjCj9BuUjGgkyjIABILJLgml9PgVIx4CAAEC";
//                Constant::$imgBadGuysWonId = "AgADBQADu6cxG9goeFUQNFdFTL84gRQlyjIABAGQjSwCXjJMmh8CAAEC";
//                Constant::$imgStartChaosId = "AgADBQADuacxG9goeFXfzBXSBmslOCBQyjIABK58uSLYWQaFF0QBAAEC";

                Constant::$imgStartId = "AgADBQADxacxG2qUcFX51e_5_ZWqGPsjyjIABDslu4DcLANVVyYCAAEC";
                Constant::$imgGoodGuysWonId = "AgADBQADx6cxG2qUcFVIgBTDqDbiiYxHyjIABIPseKcmHDRExEIBAAEC";
                Constant::$imgBadGuysWonId = "AgADBQADyKcxG2qUcFV5yIWDXiX-JiJVyjIABEt6HEbRp6TPy0QBAAEC";
                Constant::$imgStartChaosId = "AgADBQADxqcxG2qUcFU7iuZKdmQhFQhUyjIABLUvsuipC-raW0YBAAEC";

            }
            else { // development
                Constant::$imgStartId = "AgADBQADr6cxG5qM6xB1Y94yP1AW_7tPyjIABFHrVJ_CY8oD-BkAAgI";
                Constant::$imgGoodGuysWonId = "AgADBQADsKcxG5qM6xCjTSNnVk8feNElyjIABGNiq9p1hripn_QAAgI";
                Constant::$imgBadGuysWonId = "AgADBQADsacxG5qM6xA2Q_QpiEN82IEiyjIABPucQQ5sSiEEDPkAAgI";
                Constant::$imgStartChaosId = "AgADBQADsqcxG5qM6xBC6m-Gor3SAahCyjIABPnal7KYKg0qlxoAAgI";
            }

            Constant::$_startRandomRoles = Constant::$_30 / 3;

            Constant::$_discussAssignQuestGroup = Constant::$_120;
            Constant::$_discussAssignQuestGroup_r1 = Constant::$_60;
            Constant::$_discussAssignQuestGroup_r2 = Constant::$_90;

            Constant::$_assignQuestPrivate = Constant::$_120;

            Constant::$_execApproveRejectGroup = Constant::$_60;
            Constant::$_execApproveRejectGroup_r1 = Constant::$_30;

            Constant::$_execQuestPrivate = Constant::$_45;
            Constant::$_execQuestPrivate_r1 = Constant::$_45 / 2;

            Constant::$_execLadyOfTheLakePrivate = Constant::$_90;

            Constant::$_execKillMerlin = Constant::$_120 + Constant::$_60;
            Constant::$_execKillMerlin_r1 = Constant::$_60 + Constant::$_60;
            Constant::$_execKillMerlin_r2 = Constant::$_90 + Constant::$_60;

            Constant::$inited = true;
            // $quest [number of player][quest no]
            Constant::$questAssigneeMap = array(
                5 => array(2,3,2,3,3),
                6 => array(2,3,4,3,4),
                7 => array(2,3,3,4,4),
                8 => array(3,4,4,5,5),
                9 => array(3,4,4,5,5),
                10 => array(3,4,4,5,5)
            );
            Constant::$twoFailsRequired = array(
                5 => array(1,1,1,1,1),
                6 => array(1,1,1,1,1),
                7 => array(1,1,1,2,1),
                8 => array(1,1,1,2,1),
                9 => array(1,1,1,2,1),
                10 => array(1,1,1,2,1),
            );

            Constant::$lancelotVariant1 = array(0,0,0,1,1);
            Constant::$lancelotVariant2 = array(0,0,0,0,0,1,1);

            Constant::$normalRoleMap = array(
                5 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_NORMAL,
                    Constant::MORGANA,
                    Constant::ASSASSIN),
                6 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::MORGANA,
                    Constant::ASSASSIN),
                7 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::MORDRED,
                    Constant::MORGANA,
                    Constant::ASSASSIN),
                8 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::MORDRED,
                    Constant::MORGANA,
                    Constant::ASSASSIN),
                9 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::MORDRED,
                    Constant::MORGANA,
                    Constant::ASSASSIN),
                10 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::MORDRED,
                    Constant::MORGANA,
                    Constant::ASSASSIN,
                    Constant::OBERON),
            );

            Constant::$normalLancelotRoleMap = array(
                5 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_LANCELOT,
                    Constant::MORGAUSE,
                    Constant::EVIL_LANCELOT),
                6 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_LANCELOT,
                    Constant::MORGAUSE,
                    Constant::EVIL_LANCELOT),
                7 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_LANCELOT,
                    Constant::MORDRED,
                    Constant::MORGAUSE,
                    Constant::EVIL_LANCELOT),
                8 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_LANCELOT,
                    Constant::MORDRED,
                    Constant::MORGAUSE,
                    Constant::EVIL_LANCELOT),
                9 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_LANCELOT,
                    Constant::MORDRED,
                    Constant::MORGAUSE,
                    Constant::EVIL_LANCELOT),
                10 => array(Constant::MERLIN,
                    Constant::PERCIVAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_NORMAL,
                    Constant::GOOD_LANCELOT,
                    Constant::MORDRED,
                    Constant::MORGAUSE,
                    Constant::EVIL_LANCELOT,
                    Constant::OBERON),
            );



            Constant::$chaosRoleMap = array(
                5 =>
                    array(
                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::MORDRED,
                            Constant::MORGAUSE),
                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AUDITOR,
                            Constant::MORDRED,
                            Constant::MORGAUSE),
                        array(Constant::MERLIN,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::MORDRED,
                            Constant::ASSASSIN),
                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::MORGANA,
                            Constant::ASSASSIN),
                    ),
                6 =>
                    array(
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::KNIGHT,
                            Constant::MORDRED,
                            Constant::MORGAUSE),
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::AUDITOR,
                            Constant::MORDRED,
                            Constant::MORGAUSE),
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::MORDRED,
                            Constant::MORGAUSE),
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::GOOD_NORMAL,
                            Constant::MORGANA,
                            Constant::ASSASSIN),
                    ),
                7 =>
                    array(
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::AGENT,
                            Constant::MORDRED,
                            Constant::WITCH,
                            Constant::MORGAUSE),
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::MORDRED,
                            Constant::WITCH,
                            Constant::MORGAUSE),
//                    array(
//                        Constant::MERLIN,
//                        Constant::PERCIVAL,
//                        Constant::KNIGHT,
//                        Constant::AGENT,
//                        Constant::MORDRED,
//                        Constant::MORGANA,
//                        Constant::ASSASSIN),
//                    array(
//                        Constant::MERLIN,
//                        Constant::PERCIVAL,
//                        Constant::AGENT,
//                        Constant::GOOD_NORMAL,
//                        Constant::MORDRED,
//                        Constant::MORGANA,
//                        Constant::ASSASSIN),
//                    array(
//                        Constant::MERLIN,
//                        Constant::PERCIVAL,
//                        Constant::KNIGHT,
//                        Constant::AGENT,
//                        Constant::MORDRED,
//                        Constant::MORGANA,
//                        Constant::ASSASSIN),
                    ),
                8 =>
                    array(
                        // ninja witch morga, strong vs strong
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::GOOD_NORMAL,
                            Constant::NINJA,
                            Constant::WITCH,
                            Constant::MORGAUSE),

                        // mordred witch, morgs
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::KNIGHT,
                            Constant::GOOD_NORMAL,
                            Constant::NINJA,
                            Constant::WITCH,
                            Constant::MORGAUSE),

                        // mordred morga assassin
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::AGENT,
                            Constant::GOOD_NORMAL,
                            Constant::MORDRED,
                            Constant::WITCH,
                            Constant::MORGAUSE),

                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::GOOD_NORMAL,
                            Constant::GOOD_NORMAL,
                            Constant::MORDRED,
                            Constant::WITCH,
                            Constant::MORGAUSE),

                        // ninja oberon morga
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::AUDITOR,
                            Constant::GOOD_NORMAL,
                            Constant::NINJA,
                            Constant::OBERON,
                            Constant::MORGAUSE),

                    ),
                9 =>
                    array(
                        // ninja witch morga,
                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::GOOD_NORMAL,
                            Constant::GOOD_NORMAL,
                            Constant::NINJA,
                            Constant::WITCH,
                            Constant::MORGAUSE),

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::AUDITOR,
                            Constant::GOOD_NORMAL,
                            Constant::GOOD_NORMAL,
                            Constant::NINJA,
                            Constant::WITCH,
                            Constant::MORGAUSE),

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::GOOD_NORMAL,
                            Constant::GOOD_NORMAL,
                            Constant::GOOD_NORMAL,
                            Constant::MORDRED,
                            Constant::WITCH,
                            Constant::MORGAUSE),

                        array(Constant::MERLIN,
                            Constant::KNIGHT,
                            Constant::KNIGHT,
                            Constant::GOOD_NORMAL,
                            Constant::GOOD_NORMAL,
                            Constant::GOOD_NORMAL,
                            Constant::MORDRED,
                            Constant::OBERON,
                            Constant::ASSASSIN),

                        // ninja oberon morga

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AUDITOR,
                            Constant::AGENT,
                            Constant::GOOD_NORMAL,
                            Constant::GOOD_NORMAL,
                            Constant::NINJA,
                            Constant::OBERON,
                            Constant::MORGAUSE),

//                    array(Constant::MERLIN,
//                        Constant::PERCIVAL,
//                        Constant::AGENT,
//                        Constant::AGENT,
//                        Constant::GOOD_NORMAL,
//                        Constant::GOOD_NORMAL,
//                        Constant::NINJA,
//                        Constant::OBERON,
//                        Constant::MORGAUSE),

//                    array(Constant::MERLIN,
//                        Constant::PERCIVAL,
//                        Constant::AGENT,
//                        Constant::AGENT,
//                        Constant::AGENT,
//                        Constant::KNIGHT,
//                        Constant::NINJA,
//                        Constant::MORDRED,
//                        Constant::MORGAUSE),

                    ),
                10 =>
                    array(
                        // ninja witch morga oberon
                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::KNIGHT,
                            Constant::GOOD_NORMAL,
                            Constant::NINJA,
                            Constant::WITCH,
                            Constant::MORGAUSE,
                            Constant::OBERON),

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::KNIGHT,
                            Constant::AUDITOR,
                            Constant::AGENT,
                            Constant::NINJA,
                            Constant::WITCH,
                            Constant::MORGAUSE,
                            Constant::OBERON),

                        // mordred witch, morgas
                        // witch can guess, then 1:5

                        // witch can guess, then 1:5
                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::AGENT,
                            Constant::GOOD_NORMAL,
                            Constant::GOOD_NORMAL,
                            Constant::MORDRED,
                            Constant::WITCH,
                            Constant::MORGAUSE,
                            Constant::OBERON),

                        // no oberon
                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::KNIGHT,
                            Constant::KNIGHT,
                            Constant::AGENT,
                            Constant::MORDRED,
                            Constant::WITCH,
                            Constant::MORGANA,
                            Constant::ASSASSIN),

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::AUDITOR,
                            Constant::GOOD_NORMAL,
                            Constant::MORDRED,
                            Constant::WITCH,
                            Constant::MORGANA,
                            Constant::ASSASSIN),

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::KNIGHT,
                            Constant::GOOD_NORMAL,
                            Constant::MORDRED,
                            Constant::WITCH,
                            Constant::MORGANA,
                            Constant::ASSASSIN),

                        // ninja oberon morgana assassin
//                    array(Constant::MERLIN,
//                        Constant::PERCIVAL,
//                        Constant::AGENT,
//                        Constant::AGENT,
//                        Constant::AUDITOR,
//                        Constant::GOOD_NORMAL,
//                        Constant::NINJA,
//                        Constant::MORGANA,
//                        Constant::ASSASSIN,
//                        Constant::OBERON),

                        // ninja mordred oberon witch
//                    array(Constant::MERLIN,
//                        Constant::PERCIVAL,
//                        Constant::AGENT,
//                        Constant::AGENT,
//                        Constant::AGENT,
//                        Constant::KNIGHT,
//                        Constant::NINJA,
//                        Constant::MORDRED,
//                        Constant::OBERON,
//                        Constant::MORGAUSE),
                    ),
            );


            Constant::$chaosLancelotRoleMap = array(
                5 =>
                    array(
                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::GOOD_LANCELOT,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE),
                    ),
                6 =>
                    array(
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::GOOD_LANCELOT,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE),
                    ),
                7 =>
                    array(
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::GOOD_LANCELOT,
                            Constant::MORDRED,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE),
                    ),
                8 =>
                    array(
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::GOOD_LANCELOT,
                            Constant::NINJA,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE),

                        // mordred witch, morgs
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::KNIGHT,
                            Constant::GOOD_LANCELOT,
                            Constant::NINJA,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE),

                        // mordred morga assassin
                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::AGENT,
                            Constant::GOOD_LANCELOT,
                            Constant::MORDRED,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE),

                        array(
                            Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::GOOD_NORMAL,
                            Constant::GOOD_LANCELOT,
                            Constant::MORDRED,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE),

                    ),
                9 =>
                    array(
                        // ninja witch morga,
                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::GOOD_LANCELOT,
                            Constant::GOOD_NORMAL,
                            Constant::NINJA,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE),

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::AUDITOR,
                            Constant::GOOD_LANCELOT,
                            Constant::GOOD_NORMAL,
                            Constant::NINJA,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE),

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::GOOD_LANCELOT,
                            Constant::GOOD_NORMAL,
                            Constant::GOOD_NORMAL,
                            Constant::MORDRED,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE),

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AUDITOR,
                            Constant::GOOD_LANCELOT,
                            Constant::AGENT,
                            Constant::GOOD_NORMAL,
                            Constant::MORDRED,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE),

                    ),
                10 =>
                    array(
                        // ninja witch morga oberon
                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::KNIGHT,
                            Constant::GOOD_LANCELOT,
                            Constant::NINJA,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE,
                            Constant::OBERON),

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::AUDITOR,
                            Constant::AGENT,
                            Constant::GOOD_LANCELOT,
                            Constant::NINJA,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE,
                            Constant::OBERON),

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::KNIGHT,
                            Constant::AGENT,
                            Constant::GOOD_LANCELOT,
                            Constant::GOOD_NORMAL,
                            Constant::MORDRED,
                            Constant::EVIL_LANCELOT,
                            Constant::MORGAUSE,
                            Constant::OBERON),

                        // no oberon
//                        array(Constant::MERLIN,
//                            Constant::PERCIVAL,
//                            Constant::KNIGHT,
//                            Constant::KNIGHT,
//                            Constant::GOOD_LANCELOT,
//                            Constant::AGENT,
//                            Constant::MORDRED,
//                            Constant::WITCH,
//                            Constant::MORGAUSE,
//                            Constant::EVIL_LANCELOT),
//
//                        array(Constant::MERLIN,
//                            Constant::PERCIVAL,
//                            Constant::AGENT,
//                            Constant::AGENT,
//                            Constant::AUDITOR,
//                            Constant::GOOD_LANCELOT,
//                            Constant::MORDRED,
//                            Constant::WITCH,
//                            Constant::MORGAUSE,
//                            Constant::EVIL_LANCELOT),

                        array(Constant::MERLIN,
                            Constant::PERCIVAL,
                            Constant::AGENT,
                            Constant::AGENT,
                            Constant::KNIGHT,
                            Constant::GOOD_LANCELOT,
                            Constant::MORDRED,
                            Constant::WITCH,
                            Constant::MORGAUSE,
                            Constant::EVIL_LANCELOT),

                    ),
            );

        }
    }

    static function getMinPlayer(){
        return Constant::MIN_PLAYER;
    }

    static function getMaxPlayer(){
        return Constant::MAX_PLAYER;
    }

    static function getMode($mode){
        switch ($mode) {
            case Constant::MODE_CHAOS:
                return "Chaos";
            default:
                return "Normal";
        }
    }

    static function replaceOpenTag($str){
        return str_replace('>','&gt;', str_replace('<','&lt;', $str) );
    }

    static function getRandomSubsetFromArray($arrayToPick, $howManyToPick){
        $arrayToPickCopy = $arrayToPick;

        $size = count($arrayToPick);

        $randomizedArr = array();
        for ($i=0; $i<$howManyToPick;$i++){
            $pick = rand(0, $size-$i-1);
            $randomizedArr[$i] = $arrayToPickCopy[$pick];
            $arrayToPickCopy[$pick] = $arrayToPickCopy[$size-$i-1];
        }
        return $randomizedArr;
    }

    static function generateRandomRoleArray($mode, $lancelotMode, $size){
        if (!Constant::$inited) {
            Constant::init();
        }

        // generate [0,1,2,3,...,size]
        $defaultInt = array();
        if ($mode == Constant::MODE_NORMAL) {
            if ($lancelotMode == 0) { // no lancelot
                for ($i = 0; $i < $size; $i++) {
                    $defaultInt[$i] = Constant::$normalRoleMap[$size][$i];
                }
            }
            else { // has lancelot
                for ($i = 0; $i < $size; $i++) {
                    $defaultInt[$i] = Constant::$normalLancelotRoleMap[$size][$i];
                }
            }
        }
        else if ($mode == Constant::MODE_CHAOS) {
            if ($lancelotMode == 0) { // no lancelot
                $variantRoleInQuest = count(Constant::$chaosRoleMap[$size]);
                if ($variantRoleInQuest == 1) {
                    $pickVariant = 0;
                } else { // there is more than 1 variant
                    $pickVariant = rand(0, $variantRoleInQuest - 1);
                }
                for ($i = 0; $i < $size; $i++) {
                    $defaultInt[$i] = Constant::$chaosRoleMap[$size][$pickVariant] [$i];
                }
            }
            else { // has lancelot
                $variantRoleInQuest = count(Constant::$chaosLancelotRoleMap[$size]);
                if ($variantRoleInQuest == 1) {
                    $pickVariant = 0;
                } else { // there is more than 1 variant
                    $pickVariant = rand(0, $variantRoleInQuest - 1);
                }
                for ($i = 0; $i < $size; $i++) {
                    $defaultInt[$i] = Constant::$chaosLancelotRoleMap[$size][$pickVariant] [$i];
                }
            }
        }
        $randomizedArr = array();
        for ($i=0; $i<$size;$i++){
            $pick = rand(0, $size-$i-1);
            $randomizedArr[$i] = $defaultInt[$pick];
            $defaultInt[$pick] = $defaultInt[$size-$i-1];
        }
        return $randomizedArr;
    }

    static function arrayToString($array){
        $text = "";
        $in = false;
        foreach ($array as $item) {
            if ($in) { // add space
                $text .= ", ";
            }
            $text .= "<b>".$item."</b>";
            $in = true;
        }
        return $text;
    }
}
