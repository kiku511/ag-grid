import { CellRange, ChartModel, ChartOptions, ChartType, Component, IAggFunc, ProcessChartOptionsParams } from "@ag-grid-community/core";
import { ChartPaletteName } from "ag-charts-community";
export interface GridChartParams {
    pivotChart: boolean;
    cellRange: CellRange;
    chartType: ChartType;
    chartPaletteName: ChartPaletteName;
    insideDialog: boolean;
    suppressChartRanges: boolean;
    aggFunc?: string | IAggFunc;
    processChartOptions?: (params: ProcessChartOptionsParams) => ChartOptions<any>;
}
export declare class GridChartComp extends Component {
    private readonly params;
    private static TEMPLATE;
    private eChart;
    private eChartContainer;
    private eMenuContainer;
    private eEmpty;
    private eTitleEditContainer;
    private gridOptionsWrapper;
    private environment;
    private chartTranslator;
    private gridApi;
    private columnApi;
    private popupService;
    private chartMenu;
    private titleEdit;
    private chartDialog;
    private model;
    private chartController;
    private chartProxy;
    private chartType;
    constructor(params: GridChartParams);
    init(): void;
    private createChart;
    private getChartPaletteName;
    private createChartProxy;
    private addDialog;
    private getBestDialogSize;
    private addMenu;
    private addTitleEditComp;
    private refresh;
    private shouldRecreateChart;
    getCurrentChartType(): ChartType;
    getChartModel(): ChartModel;
    updateChart(): void;
    private handleEmptyChart;
    private downloadChart;
    refreshCanvasSize(): void;
    private setActiveChartCellRange;
    private raiseChartCreatedEvent;
    private raiseChartDestroyedEvent;
    protected destroy(): void;
}
