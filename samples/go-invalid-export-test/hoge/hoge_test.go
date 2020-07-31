package hoge_test

import (
	"fmt"
	"testing"

	"github.com/nijinekko/blog/samples/invalidexporttest/hoge"
)

func TestFuga(t *testing.T) {
	// hoge/export_test.goはビルドされる
	// hogeパッケージをimportするとFugaにアクセスできる
	if hoge.Fuga != 1 {
		t.Error(fmt.Errorf("want 1, but got %v", hoge.Fuga))
	}
}
