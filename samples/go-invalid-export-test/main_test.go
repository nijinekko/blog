package main

import (
	"fmt"
	"testing"

	"github.com/nijinekko/blog/samples/invalidexporttest/hoge"
)

func TestMain(t *testing.T) {
	// パッケージが異なるため、hoge/export_test.goはビルドされない
	// hogeパッケージをimportしてもFugaにはアクセスできない
	if hoge.Fuga != 1 {
		t.Error(fmt.Errorf("want 1, but got %v", hoge.Fuga))
	}
}
