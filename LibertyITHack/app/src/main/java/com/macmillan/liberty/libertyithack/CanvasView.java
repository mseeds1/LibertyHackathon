package com.macmillan.liberty.libertyithack;

import android.content.Context;
import android.graphics.Canvas;
import android.graphics.Color;
import android.graphics.Paint;
import android.graphics.Rect;
import android.util.AttributeSet;
import android.view.View;

import java.util.jar.Attributes;

/**
 * Created by Seeds on 03/11/2015.
 */
public class CanvasView extends View {

    Paint myPaint = new Paint();


    public CanvasView(Context c, AttributeSet attr) {
        super(c, attr);
        this.setBackgroundColor(Color.BLACK);
        myPaint.setColor(Color.rgb(0, 0, 0));
        myPaint.setStrokeWidth(10);
        //myPaint.setStyle(Paint.Style.STROKE);
        myPaint.setStyle(Paint.Style.FILL_AND_STROKE);
        this.invalidate();
    };

    @Override
    protected void onDraw(Canvas canvas) {
        super.onDraw(canvas);
        canvas.drawRect(new Rect(200, 200, 50, 50), myPaint);

    }
}
