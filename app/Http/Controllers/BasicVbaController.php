<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicVbaController extends Controller
{
    protected function LoadWhyShouldLearnVba(){
        return view('vba.basic-vba.Why-Should-Learn-VBA');
        }
        
        protected function LoadVbaIntroduction(){
        return view('vba/basic-vba/vba-introduction');
        }
        
        protected function LoadHowToEnableDeveloperTab(){
        return view('vba/basic-vba/how-to-enable-developer-tab');
        }
        
        protected function LoadMessageBox(){
        return view('vba/basic-vba/message-box');
        }
        
        protected function LoadAddingNewSheets(){
        return view('vba/basic-vba/adding-new-sheets');
        }
        
        protected function LoadDeletingSheets(){
        return view('vba/basic-vba/deleting-sheets');
        }
        
        protected function LoadChangeSheetTabColor(){
        return view('vba/basic-vba/change-sheet-tab-color');
        }
        
        protected function LoadHideUnhideSheets(){
        return view('vba/basic-vba/hide-unhide-sheets');
        }
        
        protected function LoadGroupingSheets(){
        return view('vba/basic-vba/grouping-sheets');
        }
        
        protected function LoadCopyAndMoveSheet(){
        return view('vba/basic-vba/copy-and-move-sheet');
        }
        
        protected function LoadProtectAndUnprotectSheet(){
        return view('vba/basic-vba/protect-and-unprotect-sheet');
        }
        
        protected function LoadAddBackgroundImageInSheet(){
        return view('vba/basic-vba/add-background-image-in-sheet');
        }
        
        protected function LoadWorkingWithWorkbook(){
        return view('vba/basic-vba/working-with-workbook');
        }
        
        protected function LoadSubroutine(){
        return view('vba/basic-vba/subroutine');
        }
        
        protected function LoadAdd50SheetsAndChangeTabColorOfEachSheets(){
        return view('vba/basic-vba/add-50-sheets-and-change-tab-color-of-each-sheets');
        }
        
        protected function LoadObjectHierarchy(){
        return view('vba/basic-vba/object-hierarchy');
        }
        
        protected function LoadRange(){
        return view('vba/basic-vba/range');
        }
        
        protected function LoadVariables(){
        return view('vba/basic-vba/variables');
        }
        
        protected function LoadIfElseStatements(){
        return view('vba/basic-vba/if-else-statements');
        }
        
        protected function LoadSelectCaseStatement(){
        return view('vba/basic-vba/select-case-statement');
        }
        
        protected function LoadForLoop(){
        return view('vba/basic-vba/for-loop');
        }
        
        protected function LoadForLoopExamples(){
        return view('vba/basic-vba/for-loop-examples');
        }
        
        protected function LoadReadDataFromTextFile(){
        return view('vba/basic-vba/read-data-from-text-file');
        }
        
        protected function LoadSendExcelFileInMail(){
        return view('vba/basic-vba/send-excel-file-in-mail');
        }
        
        protected function LoadDoWhileLoop(){
        return view('vba/basic-vba/do-while-loop');
        }
        
        protected function LoadDoWhileLoopExamples(){
        return view('vba/basic-vba/do-while-loop-examples');
        }
        
        protected function LoadForEachLoop(){
        return view('vba/basic-vba/for-each-loop');
        }
        
        protected function LoadHideUnhideGridlines(){
        return view('vba/basic-vba/hide-unhide-gridlines');
        }
        
        protected function LoadMergeUnmergeCells(){
        return view('vba/basic-vba/merge-unmerge-cells');
        }
        
        protected function LoadAutoFormat(){
        return view('vba/basic-vba/auto-format');
        }
        
        protected function LoadRemoveDuplicates(){
        return view('vba/basic-vba/remove-duplicates');
        }
        
        protected function LoadInsertRows(){
        return view('vba/basic-vba/insert-rows');
        }
        
        protected function LoadInsertAlternateRows(){
        return view('vba/basic-vba/insert-alternate-rows');
        }
        
        protected function LoadDeleteRows(){
        return view('vba/basic-vba/delete-rows');
        }
        
        protected function LoadInsertNewColumn(){
        return view('vba/basic-vba/insert-new-column');
        }
        
        protected function LoadDeleteColumn(){
        return view('vba/basic-vba/delete-column');
        }
        
        protected function LoadVbaCodeToApplyTextToColumnsFixedWidth(){
        return view('vba/basic-vba/vba-code-to-apply-text-to-columns-fixed-width');
        }
        
        protected function LoadDelimitedTextToColumns(){
        return view('vba/basic-vba/delimited-text-to-columns');
        }
        
        protected function LoadAdvancedTextToColumnsTricks(){
        return view('vba/basic-vba/advanced-text-to-columns-tricks');
        }
        
        protected function LoadEnableDisableFormulaBar(){
        return view('vba/basic-vba/enable-disable-formula-bar');
        }
        
        protected function LoadArrays(){
        return view('vba/basic-vba/arrays');
        }
        
        protected function LoadHideShowRowColumnHeading(){
        return view('vba/basic-vba/hide-show-row-column-heading');
        }
        
        protected function LoadDynamicArrays(){
        return view('vba/basic-vba/dynamic-arrays');
        }
        
        protected function LoadAutofitColumnsWidth(){
        return view('vba/basic-vba/autofit-columns-width');
        }
        
        protected function LoadWithStatement(){
        return view('vba/basic-vba/with-statement');
        }
        
        protected function LoadCustomList(){
        return view('vba/basic-vba/custom-list');
        }
        
        protected function LoadStatusBar(){
        return view('vba/basic-vba/status-bar');
        }
        
        protected function LoadFindingLastRowOrLastColumn(){
        return view('vba/basic-vba/finding-last-row-or-last-column');
        }
        
        protected function LoadHideScrollBar(){
        return view('vba/basic-vba/hide-scroll-bar');
        }
        
        protected function LoadChangeRowColumnWidthHeight(){
        return view('vba/basic-vba/change-row-column-width-height');
        }
        
        protected function LoadChangeTextOrientation(){
        return view('vba/basic-vba/change-text-orientation');
        }
        
        protected function LoadInsertDeleteEditReadComments(){
        return view('vba/basic-vba/insert-delete-edit-read-comments');
        }
        
        protected function LoadWrapText(){
        return view('vba/basic-vba/wrap-text');
        }
        
        protected function LoadFillDownOption(){
        return view('vba/basic-vba/fill-down-option');
        }
        
        protected function LoadClearCells(){
        return view('vba/basic-vba/clear-cells');
        }
        
        protected function LoadHideUnhideSheetTabBar(){
        return view('vba/basic-vba/hide-unhide-sheet-tab-bar');
        }
        
        protected function LoadExcelVbaActivateFullScreenMode(){
        return view('vba/basic-vba/excel-vba-activate-full-screen-mode');
        }
        
        protected function LoadImmediateWindow(){
        return view('vba/basic-vba/immediate-window');
        }
        
        protected function LoadExcelVbaApplyingBorders(){
        return view('vba/basic-vba/excel-vba-applying-borders');
        }
        
        protected function LoadAddingAndRemovingHyperlinks(){
        return view('vba/basic-vba/adding-and-removing-hyperlinks');
        }
        
        protected function LoadHyperlinksAddTextToDisplayAddScreenTip(){
        return view('vba/basic-vba/hyperlinks-add-text-to-display-add-screen-tip');
        }
        
        protected function LoadHyperlinksOpenFolderFileJumpToACell(){
        return view('vba/basic-vba/hyperlinks-open-folder-file-jump-to-a-cell');
        }
        
        protected function LoadFollowHyperlinks(){
        return view('vba/basic-vba/follow-hyperlinks');
        }
        
        protected function LoadExcelVbaDisplayHyperlinksAddHyperlinksToAShape(){
        return view('vba/basic-vba/excel-vba-display-hyperlinks-add-hyperlinks-to-a-shape');
        }
        
        protected function LoadUsingFreezePanes(){
        return view('vba/basic-vba/using-freeze-panes');
        }
        
        protected function LoadBasicSorting(){
        return view('vba/basic-vba/basic-sorting');
        }
        
        protected function LoadMultiLevelSorting(){
        return view('vba/basic-vba/multi-level-sorting');
        }
        
        protected function LoadSortByFontAndCellColor(){
        return view('vba/basic-vba/sort-by-font-and-cell-color');
        }
        
        protected function LoadHorizontalSorting(){
        return view('vba/basic-vba/horizontal-sorting');
        }
        
        protected function LoadAutoFilter(){
        return view('vba/basic-vba/auto-filter');
        }
        
        protected function LoadAutoFilterUsingWildcard(){
        return view('vba/basic-vba/auto-filter-using-wildcard');
        }
        
        protected function LoadAutoFilterTopBottomRecords(){
        return view('vba/basic-vba/auto-filter-top-bottom-records');
        }
        
        protected function LoadAutoFilterByDates(){
        return view('vba/basic-vba/auto-filter-by-dates');
        }
        
        protected function LoadAutoFilterByColor(){
        return view('vba/basic-vba/auto-filter-by-color');
        }
        
        protected function LoadFilterUniqueRecordsUsingAdvancedFilter(){
        return view('vba/basic-vba/filter-unique-records-using-advanced-filter');
        }
        
        protected function LoadAdvancedFilter(){
        return view('vba/basic-vba/advanced-filter');
        }
        
        protected function LoadAdvancedFilterWithMultipleCriteria(){
        return view('vba/basic-vba/advanced-filter-with-multiple-criteria');
        }
        
        protected function LoadStringFunctions(){
        return view('vba/basic-vba/string-functions');
        }
        
        protected function LoadLeftRightMidFunctions(){
        return view('vba/basic-vba/left-right-mid-functions');
        }
        
        protected function LoadExtractNumbersTextSpecialCharsFromAString(){
        return view('vba/basic-vba/extract-numbers-text-special-chars-from-a-string');
        }
        
        protected function LoadAscChrTrimStringFunctions(){
        return view('vba/basic-vba/asc-chr-trim-string-functions');
        }
        
        protected function LoadSearchingWithInAString(){
        return view('vba/basic-vba/searching-with-in-a-string');
        }
        
        protected function LoadReplaceAPartOfString(){
        return view('vba/basic-vba/replace-a-part-of-string');
        }
        

        protected function LoadSplittingStringIntoArray(){
        return view('vba/basic-vba/splitting-string-into-array');
        }
        

        
        protected function LoadDateTimeNowDateFunctions(){
        return view('vba/basic-vba/date-time-now-date-functions');
        }
        
        protected function LoadFormatDate(){
        return view('vba/basic-vba/format-date');
        }
        
        protected function LoadOpenVbEditorOnCustomButtonClick(){
        return view('vba/basic-vba/open-vb-editor-on-custom-button-click');
        }
        
        protected function LoadAssignValueToDateVariables(){
        return view('vba/basic-vba/assign-value-to-date-variables');
        }
        
        protected function LoadDatepartFunction(){
        return view('vba/basic-vba/datepart-function');
        }
        
        protected function LoadDateaddFunction(){
        return view('vba/basic-vba/dateadd-function');
        }
        
        protected function LoadDatediffFunction(){
        return view('vba/basic-vba/datediff-function');
        }
        
        protected function LoadGetMaxNumber(){
        return view('vba/basic-vba/get-max-number');
        }
        
        protected function LoadProtectVbaProjectWithPassword(){
        return view('vba/basic-vba/protect-vba-project-with-password');
        }
        
        protected function LoadWeekdayWeekdaynameDateFunctions(){
        return view('vba/basic-vba/weekday-weekdayname-date-functions');
        }        
}
