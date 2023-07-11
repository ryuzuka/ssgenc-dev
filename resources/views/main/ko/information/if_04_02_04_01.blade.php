<!DOCTYPE html>
<html lang="ko">
<head>
  @include('main.ko.inc.meta',[
  "title" => "신세계 건설 : 재무정보"
  ])
</head>

<body>
<div class="wrap">
  @include('main.ko.inc.header')

  <!--: Start #contents -->
  <div class="contents section header-black">
    <div class="sub-content i-if04 section header-black">
      <div class="inner">
        <h2 class="sg-text-06">재무정보</h2>
        <div class="flex-box vertical width-type">
          <div class="inner-cell">
            <h3 class="sg-text-04">신용등급</h3>
          </div>
          <div class="inner-cell">
            <p class="sg-text-09">본 정보는 오류가 발생하거나 지연될 수 있으며, 제공된 정보에 의한 투자결과에 대한 법적인 책임을 지지 않습니다.</p>
          </div>
        </div>
        <div class="scroll-box">
          <table class="tbl-list">
            <caption><span class="blind">신용등급 정보</span></caption>
            <colgroup>
              <col style="width:20%;">
              <col style="width:18%;">
              <col style="width:8%;">
              <col style="width:18%;">
              <col style="width:18%;">
              <col style="width:18%;">
            </colgroup>
            <thead>
            <tr>
              <th scope="col">평가대상</th>
              <th scope="col">평가회사</th>
              <th scope="col">구분</th>
              <th scope="col">2023년</th>
              <th scope="col">2022년</th>
              <th scope="col">2021년</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row" rowspan="4">회사채</th>
              <td rowspan="2">한국기업평가</td>
              <td>상반기</td>
              <td>A</td>
              <td>A</td>
              <td>A</td>
            </tr>
            <tr>
              <td>하반기</td>
              <td></td>
              <td>A</td>
              <td>A</td>
            </tr>
            <tr>
              <td rowspan="2">한국신용평가</td>
              <td>상반기</td>
              <td>A</td>
              <td>A</td>
              <td>A</td>
            </tr>
            <tr>
              <td>하반기</td>
              <td></td>
              <td>A</td>
              <td>A</td>
            </tr>
            <tr>
              <th scope="row" rowspan="4">기업어음</th>
              <td rowspan="2">한국기업평가</td>
              <td>상반기</td>
              <td>A2</td>
              <td>A2</td>
              <td>A2</td>
            </tr>
            <tr>
              <td>하반기</td>
              <td></td>
              <td>A2</td>
              <td>A2</td>
            </tr>
            <tr>
              <td rowspan="2">한국신용평가</td>
              <td>상반기</td>
              <td>A2</td>
              <td>A2</td>
              <td>A2</td>
            </tr>
            <tr>
              <td>하반기</td>
              <td></td>
              <td>A2</td>
              <td>A2</td>
            </tr>
            </tbody>
          </table>
        </div>
        <div class="tab js-tab">
          <div class="dropdown tabs js-dropdown" placeholder="회사채 등급정의">
            <button type="button" id="dropdown" class="dropdown-btn" aria-haspopup="listbox" aria-expanded="false"></button>
            <ul class="dropdown-list" role="listbox" aria-labelledby="dropdown" tabindex="-1">
              <li role="option" aria-selected="false"><button type="button" data-value="">회사채 등급정의</button></li>
              <li role="option" aria-selected="false"><button type="button" data-value="">기업어음 등급정의</button></li>
            </ul>
          </div>
          <div class="tab-list" role="tablist">
            <button type="button" id="tab1" role="tab" aria-controls="tab-content1" aria-selected="true">회사채 등급정의</button>
            <button type="button" id="tab2" role="tab" aria-controls="tab-content2" aria-selected="false">기업어음 등급정의</button>
          </div>
          <div class="tab-content">
            <div id="tab-content1" class="content" role="tabpanel" aria-labelledby="tab1" tabindex="0">
              <table class="tbl-view">
                <caption><span class="blind">회사채 등급정의 정보</span></caption>
                <colgroup>
                  <col style="width:11%;">
                  <col style="width:89%;">
                </colgroup>
                <tbody>
                <tr>
                  <th scope="row">AAA</th>
                  <td>원리금 지급확실성이 최고수준이다</td>
                </tr>
                <tr>
                  <th scope="row">AA</th>
                  <td>원리금 지급확실성이 매우 높지만, AAA등급에 비하여 다소 낮은 요소가 있다.</td>
                </tr>
                <tr>
                  <th scope="row">A</th>
                  <td>원리금 지급확실성이 높지만, 장래에 환경변화에 따라 다소의 영향을 받을 가능성이 있다.</td>
                </tr>
                <tr>
                  <th scope="row">BBB</th>
                  <td>원리금 지급확실성이 있지만, 장래의 환경변화에 따라 저하될 가능성이 내포되어 있다.</td>
                </tr>
                <tr>
                  <th scope="row">BB</th>
                  <td>원리금 지급능력에 당면문제는 없으나, 장래의 안정성면에서는 투기적인 요소가 내포되어 있다.</td>
                </tr>
                <tr>
                  <th scope="row">B</th>
                  <td>원리금 지급능력이 부족하여 투기적이다.</td>
                </tr>
                <tr>
                  <th scope="row">CCC</th>
                  <td>원리금의 채무불이행이 발생할 위험요소가 내포되어 있다.</td>
                </tr>
                <tr>
                  <th scope="row">CC</th>
                  <td>현원리금의 채무불이행이 발생할 가능성이 높다.</td>
                </tr>
                <tr>
                  <th scope="row">C</th>
                  <td>원리금의 채무불이행이 발생할 가능성이 지극히 높다.</td>
                </tr>
                <tr>
                  <th scope="row">D</th>
                  <td>현재 채무불이행 상태에 있다.</td>
                </tr>
                </tbody>
              </table>
              <p class="sg-text-10">※ AA부터 B까지는 동일 등급내에서 세분하여 구분할 필요가 있는 경우에는 ‘+’또는 ‘-‘의 기호를 부여할 수 있다.</p>
              <p class="sg-text-10">※ 예비평정의 경우 당해 등급기호의 앞에. ‘P’를 부기한다.</p>
              <p class="sg-text-10">※ 미공시 등급의 경우 당해 등급기호의 앞에 ‘U’를 부기한다.</p>
            </div>
            <div id="tab-content2" class="content" role="tabpanel" aria-labelledby="tab2" tabindex="0">
              <table class="tbl-view">
                <caption><span class="blind">기업어음 등급정의 정보</span></caption>
                <colgroup>
                  <col style="width:11%;">
                  <col style="width:89%;">
                </colgroup>
                <tbody>
                <tr>
                  <th scope="row">A1</th>
                  <td>적기상환능력이 최고 수준이며, 그 안정성은 현단계에서 합리적으로 예측 가능한 장래의 환경변화에 영향을 받지 않을 만큼 높다.</td>
                </tr>
                <tr>
                  <th scope="row">A2</th>
                  <td>적기상환능력이 우수하지만, 그 안정성은 A1등급에 비하여 열등한 요소가 있다.</td>
                </tr>
                <tr>
                  <th scope="row">A3</th>
                  <td>적기상환능력이 양호하지만, 그 안정성은 급격한 환경변화에 따라 다소의 영향을 받을 가능성이 있다.</td>
                </tr>
                <tr>
                  <th scope="row">B</th>
                  <td>최소한 적기상환능력은 인정되나, 그 안정성은 환경변화로 저하될 가능성이 있어 투기적인 요소를 내포하고 있다.</td>
                </tr>
                <tr>
                  <th scope="row">C</th>
                  <td>적기상환능력 및 그 안정성이 매우 가변적이어서 투기적 요소가 강하다.</td>
                </tr>
                <tr>
                  <th scope="row">D</th>
                  <td>현재 채무불이행 상태에 있다.</td>
                </tr>
                </tbody>
              </table>
              <p class="sg-text-10">※ AA부터 B까지는 동일 등급내에서 세분하여 구분할 필요가 있는 경우에는 ‘+’또는 ‘-‘의 기호를 부여할 수 있다.</p>
              <p class="sg-text-10">※ 미공시 등급의 경우 당해 등급기호의 앞에 ‘U’를 부기한다.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--: End #contents -->

    @include('main.ko.inc.footer')
  </div>
</div>

  <!-- common, plugins, app -->
  <script type="text/javascript" src="/js/common.js"></script>
  <script type="text/javascript" src="/js/plugins.js"></script>
  <script type="text/javascript" src="/js/index.js"></script>

  <!-- components -->
  <script>
    ($ => {
      $.depth1Index = 3
      $.depth2Index = 3

      $(document).ready(function () {
        $.switchUI.init($.viewType)
      })
    })(window.jQuery)
  </script>
</body>
</html>
