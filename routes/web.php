<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'App\Http\Controllers\HomeController@RecentVideos')->name('home');

Route::post('/getRecentVideos',array('uses'=>'App\Http\Controllers\HomeController@GetRecentVideos','as'=>'getRecentVideos'));
Route::post('/getExcelVbaToturials',array('uses'=>'App\Http\Controllers\HomeController@GetExcelVbaToturials','as'=>'getExcelVbaToturials'));
Route::post('/getVbaLoops',array('uses'=>'App\Http\Controllers\HomeController@GetVbaLoops','as'=>'getVbaLoops'));
Route::post('/getTextToColumns',array('uses'=>'App\Http\Controllers\HomeController@GetTextToColumns','as'=>'getTextToColumns'));
Route::post('/getHyperlinks',array('uses'=>'App\Http\Controllers\HomeController@GetVbaHyperlinks','as'=>'getHyperlinks'));
Route::post('/getSorting',array('uses'=>'App\Http\Controllers\HomeController@GetVbaSorting','as'=>'getSorting'));
Route::post('/getVbaProjects',array('uses'=>'App\Http\Controllers\HomeController@GetVbaProject','as'=>'getVbaProjects'));

Route::get('/single/{video_id}', 'App\Http\Controllers\SingleController@ShowSingleVideo')->name('single');


Route::get('/view-all/{playlist_name}', 'App\Http\Controllers\HomeController@ViewAllViedeos')->name('view-all');
Route::get('/view-all-videos/{playlist_name}', 'App\Http\Controllers\HomeController@ViewAllChildPlaylist')->name('view-all-videos');
Route::get('/add_description', 'App\Http\Controllers\AddDescription@LoadVideosDetails')->name('add_description');
Route::post('/insert_video_description','App\Http\Controllers\AddDescription@InsertVideoDescription')->name('insert_video_description');

Route::post('/get-video-text-description',array('uses'=>'App\Http\Controllers\SingleController@GetVideoTextDescription','as'=>'get-video-text-description'));

Route::get('/contact-us','App\Http\Controllers\ContactUsController@GetContactUsPage')->name('contact-us');
Route::post('/send-contact-us','App\Http\Controllers\ContactUsController@ContactUsPost')->name('send-contact-us');

Route::get('/about-us','App\Http\Controllers\AboutUsController@GetAboutUs')->name('about-us');

Route::post('/user-sign-up','App\Http\Controllers\SignUpController@UserSignUp')->name('user-sign-up');
Route::get('/is-user-available',array('uses'=>'App\Http\Controllers\SignUpController@IsUserAvailable','as'=>'is-user-available'));


Route::post('/user-sign-in','App\Http\Controllers\SignUpController@UserSignIn')->name('user-sign-in');
Route::get('/user_existance',array('uses'=>'App\Http\Controllers\SignUpController@CheckUserExistance','as'=>'user_existance'));

Route::get('/logout', 'App\Http\Controllers\HomeController@Logout')->name('logout');

Route::get('login/google/', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);




Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);


Route::post('/videos-search','App\Http\Controllers\SearchController@SearchVideos')->name('videos-search');


Route::get('/copyright',function(){
    return view('copyright');
})->name('copyright');


Route::get('/privacy',function(){
    return view('privacy');
})->name('privacy');

Route::get('/terms',function(){
    return view('terms');
})->name('terms');


Route::post('post-comment','App\Http\Controllers\CommentsController@AddComment')->name('post.comment');

Route::post('post-comment-reply','App\Http\Controllers\CommentsController@ReplyComment')->name('post.comment.reply');

Route::post('view-comment-replies','App\Http\Controllers\SingleController@GetCommentReplies')->name('view-comment-replies');

Auth::routes();


//Baisc VBA Routes

Route::get('/basic_vba/why-should-learn-vba',
'App\Http\Controllers\BasicVbaController@LoadWhyShouldLearnVba')
->name('/basic_vba/why-should-learn-vba');

Route::get('/basic_vba/vba-introduction',
'App\Http\Controllers\BasicVbaController@LoadVbaIntroduction')
->name('/basic_vba/vba-introduction');

Route::get('/basic_vba/how-to-enable-developer-tab',
'App\Http\Controllers\BasicVbaController@LoadHowToEnableDeveloperTab')
->name('/basic_vba/how-to-enable-developer-tab');

Route::get('/basic_vba/message-box',
'App\Http\Controllers\BasicVbaController@LoadMessageBox')
->name('/basic_vba/message-box');

Route::get('/basic_vba/adding-new-sheets',
'App\Http\Controllers\BasicVbaController@LoadAddingNewSheets')
->name('/basic_vba/adding-new-sheets');

Route::get('/basic_vba/deleting-sheets',
'App\Http\Controllers\BasicVbaController@LoadDeletingSheets')
->name('/basic_vba/deleting-sheets');

Route::get('/basic_vba/change-sheet-tab-color',
'App\Http\Controllers\BasicVbaController@LoadChangeSheetTabColor')
->name('/basic_vba/change-sheet-tab-color');

Route::get('/basic_vba/hide-unhide-sheets',
'App\Http\Controllers\BasicVbaController@LoadHideUnhideSheets')
->name('/basic_vba/hide-unhide-sheets');

Route::get('/basic_vba/grouping-sheets',
'App\Http\Controllers\BasicVbaController@LoadGroupingSheets')
->name('/basic_vba/grouping-sheets');

Route::get('/basic_vba/copy-and-move-sheet',
'App\Http\Controllers\BasicVbaController@LoadCopyAndMoveSheet')
->name('/basic_vba/copy-and-move-sheet');

Route::get('/basic_vba/protect-and-unprotect-sheet',
'App\Http\Controllers\BasicVbaController@LoadProtectAndUnprotectSheet')
->name('/basic_vba/protect-and-unprotect-sheet');

Route::get('/basic_vba/add-background-image-in-sheet',
'App\Http\Controllers\BasicVbaController@LoadAddBackgroundImageInSheet')
->name('/basic_vba/add-background-image-in-sheet');

Route::get('/basic_vba/working-with-workbook',
'App\Http\Controllers\BasicVbaController@LoadWorkingWithWorkbook')
->name('/basic_vba/working-with-workbook');

Route::get('/basic_vba/subroutine',
'App\Http\Controllers\BasicVbaController@LoadSubroutine')
->name('/basic_vba/subroutine');

Route::get('/basic_vba/add-50-sheets-and-change-tab-color-of-each-sheets',
'App\Http\Controllers\BasicVbaController@LoadAdd50SheetsAndChangeTabColorOfEachSheets')
->name('/basic_vba/add-50-sheets-and-change-tab-color-of-each-sheets');

Route::get('/basic_vba/object-hierarchy',
'App\Http\Controllers\BasicVbaController@LoadObjectHierarchy')
->name('/basic_vba/object-hierarchy');

Route::get('/basic_vba/range',
'App\Http\Controllers\BasicVbaController@LoadRange')
->name('/basic_vba/range');

Route::get('/basic_vba/variables',
'App\Http\Controllers\BasicVbaController@LoadVariables')
->name('/basic_vba/variables');

Route::get('/basic_vba/if-else-statements',
'App\Http\Controllers\BasicVbaController@LoadIfElseStatements')
->name('/basic_vba/if-else-statements');

Route::get('/basic_vba/select-case-statement',
'App\Http\Controllers\BasicVbaController@LoadSelectCaseStatement')
->name('/basic_vba/select-case-statement');

Route::get('/basic_vba/for-loop',
'App\Http\Controllers\BasicVbaController@LoadForLoop')
->name('/basic_vba/for-loop');

Route::get('/basic_vba/for-loop-examples',
'App\Http\Controllers\BasicVbaController@LoadForLoopExamples')
->name('/basic_vba/for-loop-examples');

Route::get('/basic_vba/read-data-from-text-file',
'App\Http\Controllers\BasicVbaController@LoadReadDataFromTextFile')
->name('/basic_vba/read-data-from-text-file');

Route::get('/basic_vba/send-excel-file-in-mail',
'App\Http\Controllers\BasicVbaController@LoadSendExcelFileInMail')
->name('/basic_vba/send-excel-file-in-mail');

Route::get('/basic_vba/do-while-loop',
'App\Http\Controllers\BasicVbaController@LoadDoWhileLoop')
->name('/basic_vba/do-while-loop');

Route::get('/basic_vba/do-while-loop-examples',
'App\Http\Controllers\BasicVbaController@LoadDoWhileLoopExamples')
->name('/basic_vba/do-while-loop-examples');

Route::get('/basic_vba/for-each-loop',
'App\Http\Controllers\BasicVbaController@LoadForEachLoop')
->name('/basic_vba/for-each-loop');

Route::get('/basic_vba/hide-unhide-gridlines',
'App\Http\Controllers\BasicVbaController@LoadHideUnhideGridlines')
->name('/basic_vba/hide-unhide-gridlines');

Route::get('/basic_vba/merge-unmerge-cells',
'App\Http\Controllers\BasicVbaController@LoadMergeUnmergeCells')
->name('/basic_vba/merge-unmerge-cells');

Route::get('/basic_vba/auto-format',
'App\Http\Controllers\BasicVbaController@LoadAutoFormat')
->name('/basic_vba/auto-format');

Route::get('/basic_vba/remove-duplicates',
'App\Http\Controllers\BasicVbaController@LoadRemoveDuplicates')
->name('/basic_vba/remove-duplicates');

Route::get('/basic_vba/insert-rows',
'App\Http\Controllers\BasicVbaController@LoadInsertRows')
->name('/basic_vba/insert-rows');

Route::get('/basic_vba/insert-alternate-rows',
'App\Http\Controllers\BasicVbaController@LoadInsertAlternateRows')
->name('/basic_vba/insert-alternate-rows');

Route::get('/basic_vba/delete-rows',
'App\Http\Controllers\BasicVbaController@LoadDeleteRows')
->name('/basic_vba/delete-rows');

Route::get('/basic_vba/insert-new-column',
'App\Http\Controllers\BasicVbaController@LoadInsertNewColumn')
->name('/basic_vba/insert-new-column');

Route::get('/basic_vba/delete-column',
'App\Http\Controllers\BasicVbaController@LoadDeleteColumn')
->name('/basic_vba/delete-column');

Route::get('/basic_vba/vba-code-to-apply-text-to-columns-fixed-width',
'App\Http\Controllers\BasicVbaController@LoadVbaCodeToApplyTextToColumnsFixedWidth')
->name('/basic_vba/vba-code-to-apply-text-to-columns-fixed-width');

Route::get('/basic_vba/delimited-text-to-columns',
'App\Http\Controllers\BasicVbaController@LoadDelimitedTextToColumns')
->name('/basic_vba/delimited-text-to-columns');

Route::get('/basic_vba/advanced-text-to-columns-tricks',
'App\Http\Controllers\BasicVbaController@LoadAdvancedTextToColumnsTricks')
->name('/basic_vba/advanced-text-to-columns-tricks');

Route::get('/basic_vba/enable-disable-formula-bar',
'App\Http\Controllers\BasicVbaController@LoadEnableDisableFormulaBar')
->name('/basic_vba/enable-disable-formula-bar');

Route::get('/basic_vba/arrays',
'App\Http\Controllers\BasicVbaController@LoadArrays')
->name('/basic_vba/arrays');

Route::get('/basic_vba/hide-show-row-column-heading',
'App\Http\Controllers\BasicVbaController@LoadHideShowRowColumnHeading')
->name('/basic_vba/hide-show-row-column-heading');

Route::get('/basic_vba/dynamic-arrays',
'App\Http\Controllers\BasicVbaController@LoadDynamicArrays')
->name('/basic_vba/dynamic-arrays');

Route::get('/basic_vba/autofit-columns-width',
'App\Http\Controllers\BasicVbaController@LoadAutofitColumnsWidth')
->name('/basic_vba/autofit-columns-width');

Route::get('/basic_vba/with-statement',
'App\Http\Controllers\BasicVbaController@LoadWithStatement')
->name('/basic_vba/with-statement');

Route::get('/basic_vba/custom-list',
'App\Http\Controllers\BasicVbaController@LoadCustomList')
->name('/basic_vba/custom-list');

Route::get('/basic_vba/status-bar',
'App\Http\Controllers\BasicVbaController@LoadStatusBar')
->name('/basic_vba/status-bar');

Route::get('/basic_vba/finding-last-row-or-last-column',
'App\Http\Controllers\BasicVbaController@LoadFindingLastRowOrLastColumn')
->name('/basic_vba/finding-last-row-or-last-column');

Route::get('/basic_vba/hide-scroll-bar',
'App\Http\Controllers\BasicVbaController@LoadHideScrollBar')
->name('/basic_vba/hide-scroll-bar');

Route::get('/basic_vba/change-row-column-width-height',
'App\Http\Controllers\BasicVbaController@LoadChangeRowColumnWidthHeight')
->name('/basic_vba/change-row-column-width-height');

Route::get('/basic_vba/change-text-orientation',
'App\Http\Controllers\BasicVbaController@LoadChangeTextOrientation')
->name('/basic_vba/change-text-orientation');

Route::get('/basic_vba/insert-delete-edit-read-comments',
'App\Http\Controllers\BasicVbaController@LoadInsertDeleteEditReadComments')
->name('/basic_vba/insert-delete-edit-read-comments');

Route::get('/basic_vba/wrap-text',
'App\Http\Controllers\BasicVbaController@LoadWrapText')
->name('/basic_vba/wrap-text');

Route::get('/basic_vba/fill-down-option',
'App\Http\Controllers\BasicVbaController@LoadFillDownOption')
->name('/basic_vba/fill-down-option');

Route::get('/basic_vba/clear-cells',
'App\Http\Controllers\BasicVbaController@LoadClearCells')
->name('/basic_vba/clear-cells');

Route::get('/basic_vba/hide-unhide-sheet-tab-bar',
'App\Http\Controllers\BasicVbaController@LoadHideUnhideSheetTabBar')
->name('/basic_vba/hide-unhide-sheet-tab-bar');

Route::get('/basic_vba/excel-vba-activate-full-screen-mode',
'App\Http\Controllers\BasicVbaController@LoadExcelVbaActivateFullScreenMode')
->name('/basic_vba/excel-vba-activate-full-screen-mode');

Route::get('/basic_vba/immediate-window',
'App\Http\Controllers\BasicVbaController@LoadImmediateWindow')
->name('/basic_vba/immediate-window');

Route::get('/basic_vba/excel-vba-applying-borders',
'App\Http\Controllers\BasicVbaController@LoadExcelVbaApplyingBorders')
->name('/basic_vba/excel-vba-applying-borders');

Route::get('/basic_vba/adding-and-removing-hyperlinks',
'App\Http\Controllers\BasicVbaController@LoadAddingAndRemovingHyperlinks')
->name('/basic_vba/adding-and-removing-hyperlinks');

Route::get('/basic_vba/hyperlinks-add-text-to-display-add-screen-tip',
'App\Http\Controllers\BasicVbaController@LoadHyperlinksAddTextToDisplayAddScreenTip')
->name('/basic_vba/hyperlinks-add-text-to-display-add-screen-tip');

Route::get('/basic_vba/hyperlinks-open-folder-file-jump-to-a-cell',
'App\Http\Controllers\BasicVbaController@LoadHyperlinksOpenFolderFileJumpToACell')
->name('/basic_vba/hyperlinks-open-folder-file-jump-to-a-cell');

Route::get('/basic_vba/follow-hyperlinks',
'App\Http\Controllers\BasicVbaController@LoadFollowHyperlinks')
->name('/basic_vba/follow-hyperlinks');

Route::get('/basic_vba/excel-vba-display-hyperlinks-add-hyperlinks-to-a-shape',
'App\Http\Controllers\BasicVbaController@LoadExcelVbaDisplayHyperlinksAddHyperlinksToAShape')
->name('/basic_vba/excel-vba-display-hyperlinks-add-hyperlinks-to-a-shape');

Route::get('/basic_vba/using-freeze-panes',
'App\Http\Controllers\BasicVbaController@LoadUsingFreezePanes')
->name('/basic_vba/using-freeze-panes');

Route::get('/basic_vba/basic-sorting',
'App\Http\Controllers\BasicVbaController@LoadBasicSorting')
->name('/basic_vba/basic-sorting');

Route::get('/basic_vba/multi-level-sorting',
'App\Http\Controllers\BasicVbaController@LoadMultiLevelSorting')
->name('/basic_vba/multi-level-sorting');

Route::get('/basic_vba/sort-by-font-and-cell-color',
'App\Http\Controllers\BasicVbaController@LoadSortByFontAndCellColor')
->name('/basic_vba/sort-by-font-and-cell-color');

Route::get('/basic_vba/horizontal-sorting',
'App\Http\Controllers\BasicVbaController@LoadHorizontalSorting')
->name('/basic_vba/horizontal-sorting');

Route::get('/basic_vba/auto-filter',
'App\Http\Controllers\BasicVbaController@LoadAutoFilter')
->name('/basic_vba/auto-filter');

Route::get('/basic_vba/auto-filter-using-wildcard',
'App\Http\Controllers\BasicVbaController@LoadAutoFilterUsingWildcard')
->name('/basic_vba/auto-filter-using-wildcard');

Route::get('/basic_vba/auto-filter-top-bottom-records',
'App\Http\Controllers\BasicVbaController@LoadAutoFilterTopBottomRecords')
->name('/basic_vba/auto-filter-top-bottom-records');

Route::get('/basic_vba/auto-filter-by-dates',
'App\Http\Controllers\BasicVbaController@LoadAutoFilterByDates')
->name('/basic_vba/auto-filter-by-dates');

Route::get('/basic_vba/auto-filter-by-color',
'App\Http\Controllers\BasicVbaController@LoadAutoFilterByColor')
->name('/basic_vba/auto-filter-by-color');

Route::get('/basic_vba/filter-unique-records-using-advanced-filter',
'App\Http\Controllers\BasicVbaController@LoadFilterUniqueRecordsUsingAdvancedFilter')
->name('/basic_vba/filter-unique-records-using-advanced-filter');

Route::get('/basic_vba/advanced-filter',
'App\Http\Controllers\BasicVbaController@LoadAdvancedFilter')
->name('/basic_vba/advanced-filter');

Route::get('/basic_vba/advanced-filter-with-multiple-criteria',
'App\Http\Controllers\BasicVbaController@LoadAdvancedFilterWithMultipleCriteria')
->name('/basic_vba/advanced-filter-with-multiple-criteria');

Route::get('/basic_vba/string-functions',
'App\Http\Controllers\BasicVbaController@LoadStringFunctions')
->name('/basic_vba/string-functions');

Route::get('/basic_vba/left-right-mid-functions',
'App\Http\Controllers\BasicVbaController@LoadLeftRightMidFunctions')
->name('/basic_vba/left-right-mid-functions');

Route::get('/basic_vba/extract-numbers-text-special-chars-from-a-string',
'App\Http\Controllers\BasicVbaController@LoadExtractNumbersTextSpecialCharsFromAString')
->name('/basic_vba/extract-numbers-text-special-chars-from-a-string');

Route::get('/basic_vba/asc-chr-trim-string-functions',
'App\Http\Controllers\BasicVbaController@LoadAscChrTrimStringFunctions')
->name('/basic_vba/asc-chr-trim-string-functions');

Route::get('/basic_vba/searching-with-in-a-string',
'App\Http\Controllers\BasicVbaController@LoadSearchingWithInAString')
->name('/basic_vba/searching-with-in-a-string');

Route::get('/basic_vba/replace-a-part-of-string',
'App\Http\Controllers\BasicVbaController@LoadReplaceAPartOfString')
->name('/basic_vba/replace-a-part-of-string');

Route::get('/vba_projects/upload-insert-images',
'App\Http\Controllers\VbaProjectsController@LoadVba_ProjectsUploadInsertImages')
->name('/vba_projects/upload-insert-images');

Route::get('/basic_vba/splitting-string-into-array',
'App\Http\Controllers\BasicVbaController@LoadSplittingStringIntoArray')
->name('/basic_vba/splitting-string-into-array');

Route::get('/vba_projects/split-data-into-multiple-sheets',
'App\Http\Controllers\VbaProjectsController@LoadVba_ProjectsSplitDataIntoMultipleSheets')
->name('/vba_projects/split-data-into-multiple-sheets');

Route::get('/basic_vba/date-time-now-date-functions',
'App\Http\Controllers\BasicVbaController@LoadDateTimeNowDateFunctions')
->name('/basic_vba/date-time-now-date-functions');

Route::get('/basic_vba/format-date',
'App\Http\Controllers\BasicVbaController@LoadFormatDate')
->name('/basic_vba/format-date');

Route::get('/basic_vba/open-vb-editor-on-custom-button-click',
'App\Http\Controllers\BasicVbaController@LoadOpenVbEditorOnCustomButtonClick')
->name('/basic_vba/open-vb-editor-on-custom-button-click');

Route::get('/basic_vba/assign-value-to-date-variables',
'App\Http\Controllers\BasicVbaController@LoadAssignValueToDateVariables')
->name('/basic_vba/assign-value-to-date-variables');

Route::get('/basic_vba/datepart-function',
'App\Http\Controllers\BasicVbaController@LoadDatepartFunction')
->name('/basic_vba/datepart-function');

Route::get('/basic_vba/dateadd-function',
'App\Http\Controllers\BasicVbaController@LoadDateaddFunction')
->name('/basic_vba/dateadd-function');

Route::get('/basic_vba/datediff-function',
'App\Http\Controllers\BasicVbaController@LoadDatediffFunction')
->name('/basic_vba/datediff-function');

Route::get('/basic_vba/get-max-number',
'App\Http\Controllers\BasicVbaController@LoadGetMaxNumber')
->name('/basic_vba/get-max-number');

Route::get('/basic_vba/protect-vba-project-with-password',
'App\Http\Controllers\BasicVbaController@LoadProtectVbaProjectWithPassword')
->name('/basic_vba/protect-vba-project-with-password');

Route::get('/basic_vba/weekday-weekdayname-date-functions',
'App\Http\Controllers\BasicVbaController@LoadWeekdayWeekdaynameDateFunctions')
->name('/basic_vba/weekday-weekdayname-date-functions');

Route::get('/advanced_vba/send-outlook-mail',
'App\Http\Controllers\AdvancedVbaController@LoadSendOutlookMail')
->name('/advanced_vba/send-outlook-mail');

Route::get('/advanced_vba/format-email-body-outlook-automation',
'App\Http\Controllers\AdvancedVbaController@LoadFormatEmailBodyOutlookAutomation')
->name('/advanced_vba/format-email-body-outlook-automation');

Route::get('/advanced_vba/add-signature-outlook-automation',
'App\Http\Controllers\AdvancedVbaController@LoadAddSignatureOutlookAutomation')
->name('/advanced_vba/add-signature-outlook-automation');

Route::get('/advanced_vba/add-attachment-in-mail-outlook-automation',
'App\Http\Controllers\AdvancedVbaController@LoadAddAttachmentInMailOutlookAutomation')
->name('/advanced_vba/add-attachment-in-mail-outlook-automation');

Route::get('/advanced_vba/insert-image-in-mail-outlook-automation',
'App\Http\Controllers\AdvancedVbaController@LoadInsertImageInMailOutlookAutomation')
->name('/advanced_vba/insert-image-in-mail-outlook-automation');

Route::get('/advanced_vba/add-list-on-mail-outlook-automation',
'App\Http\Controllers\AdvancedVbaController@LoadAddListOnMailOutlookAutomation')
->name('/advanced_vba/add-list-on-mail-outlook-automation');

Route::get('/excel_tips_and_tricks/copy-from-clipboard-excel-tips-tricks',
'App\Http\Controllers\ExcelTipsAndTricksController@LoadCopyFromClipboardExcelTipsTricks')
->name('/excel_tips_and_tricks/copy-from-clipboard-excel-tips-tricks');

Route::get('/excel_tips_and_tricks/add-bullet-point-excel-tips-tricks',
'App\Http\Controllers\ExcelTipsAndTricksController@LoadAddBulletPointExcelTipsTricks')
->name('/excel_tips_and_tricks/add-bullet-point-excel-tips-tricks');

Route::get('/advanced_vba/add-unordered-list-on-mail-outlook-automation',
'App\Http\Controllers\AdvancedVbaController@LoadAddUnorderedListOnMailOutlookAutomation')
->name('/advanced_vba/add-unordered-list-on-mail-outlook-automation');

Route::get('/advanced_vba/using-rtf-property-outlook-automation',
'App\Http\Controllers\AdvancedVbaController@LoadUsingRtfPropertyOutlookAutomation')
->name('/advanced_vba/using-rtf-property-outlook-automation');



//end of basic
//     Route::get('/basic-vba/vba-introduction',
//                  'App\Http\Controllers\BasicVbaController@LoadVbaIntroduction')
//                  ->name('/basic-vba/vba-introduction');

// Route::get('/basic-vba/enable-developer-tab', 
//                 'App\Http\Controllers\BasicVbaController@LoadEnableDeveloperTab')
//                 ->name('/basic-vba/enable-developer-tab');

Route::get('/single/{video_id}', 
                    'App\Http\Controllers\SingleController@ShowSingleVideo')
                    ->name('single');

Route::post('video-comment',
            'App\Http\Controllers\SingleController@GetVideoComments')
            ->name('user.video.comment');

Route::post('video-comment-count',
            'App\Http\Controllers\SingleController@GetCommentsCount')
            ->name('user.video.comment.count');

Route::post('next-video-suggestion',
            'App\Http\Controllers\SingleController@GetNextVideo')
            ->name('next-video-suggestion');
